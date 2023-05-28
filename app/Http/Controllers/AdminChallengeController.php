<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//import all models
use App\Models\AdminChallenge;
use App\Models\AdminChallengeUserPlayedMatch;
use App\Models\AdminChallengeUserPlayMatch;
use App\Models\Setting;


use Illuminate\Support\Facades\Http;



class AdminChallengeController extends Controller
{


    public function getchallenge(){

        $challenge = AdminChallenge::where('status',1)->get();

        
        return response()->json([
            'status' => 1,
            'data' => $challenge
        ]);

    }


    public function getchallengebyid(Request $request){


        // request prams
        // challenge_id

        $challenge = AdminChallenge::where('id',$request->challenge_id)->first();

        
        return response()->json([
            'status' => 1,
            'data' => $challenge
        ]);

    }


    public function startChallenge(Request $request){


        // request prams
        // user_id
        // challenge_id



        // check challenge is open or closed

        $ch = AdminChallenge::where('id',$request->challenge_id)->first();
        if($ch->status == '2'){
            return response()->json([
                'status' => 0,
                'message' => 'Challenge is closed'
            ]);
        }


        $challenge = AdminChallenge::where('id',$request->challenge_id)->first();
        
        $start = AdminChallengeUserPlayMatch::create([
            'user_id' => $request->user_id,
            'challenge_id' => $request->challenge_id
        ]);

        return response()->json([
            'status' => 1,
            'message' => 'Challenge Started',
            'data' => $start
        ]);

    }


    public function startMatch(Request $request){


        // request prams
        // match_id
        // user_id



        $challenge = AdminChallengeUserPlayMatch::where('challenge_id',$request->match_id)->where('user_id', $request->user_id)->orderBy('id', 'DESC')->first();

        
        // check challenge is open or closed

        // $ch = AdminChallenge::where('id',$challenge->challenge_id)->first();
        // if($ch->status == '2'){
        //     return response()->json([
        //         'status' => 0,
        //         'message' => 'Challenge is closed'
        //     ]);
        // }



        // close prevoius match
        $prevoius_match = AdminChallengeUserPlayedMatch::where('user_id', $challenge->user_id)->orderBy('id', 'DESC')->first();
        if($prevoius_match){
            $prevoius_match->winorloss = 0;
            $prevoius_match->end_match = 'Close by System';
            $prevoius_match->status = 2;
            $prevoius_match->save();
        }

        $start = new AdminChallengeUserPlayedMatch();
        $start->challenge_id = $request->match_id;
        $start->user_id = $challenge->user_id;
        $start->start_match = date('Y-m-d H:i:s');
        $start->end_match = "not set";
        $start->winorloss = "not set";
        $start->save();

        // $challenge->currant_match = $challenge->currant_match + 1;
        $challenge->tot_match = $challenge->tot_match + 1;
        $challenge->save();



        
        return response()->json([
            'status' => 1,
            'message' => 'Match Started',
            'data' => $start
        ]);

    }


    public function submitResult(Request $req){

        // request prams
        // match_id
        // result


        // dd($req->all());

        $challenge_id = $req->match_id;

        $iswonchallenge = false;

        // if won  = 1
        // if loss = 0
        $result = $req->result;


        $match = AdminChallengeUserPlayedMatch::find($challenge_id);

        $uid = $match->user_id;

        // update user challenge table
        $challenge = AdminChallengeUserPlayMatch::where('challenge_id',$match->challenge_id)->where('user_id', $uid)->first();


        // $ch = AdminChallenge::where('id',$challenge->challenge_id)->first();
        // if($ch->status == '2'){
        //     return response()->json([
        //         'status' => 0,
        //         'message' => 'Challenge is closed'
        //     ]);
        // }


        // update user match table

        $match->winorloss = $result;
        $match->end_match = date('Y-m-d H:i:s');
        $match->status = 2;
        $match->save();


 

        // get main task
        $main_task = AdminChallenge::where('id',$match->challenge_id)->first();


        if($result == 1){
            $challenge->win_match = $challenge->win_match + 1;
        }else{
            $challenge->loss_match = $challenge->loss_match + 1;
        }

   

        $challenge->save();


        // if loss back 2 step

        if($result == 0){
            $a = $challenge->currant_match - 2;

            if($a < 0){
                $a = 0;
            }
            $challenge->currant_match = $a;

            $challenge->save();
        }


        // if win increase 1 step
        if($result == 1){
            $challenge->currant_match = $challenge->currant_match + 1;
            $challenge->save();
        }


        //if not win & not bitp set visible
        if($result == 0 && $main_task->coin_sku != 'BITP'){
            $main_task->status = '1';
            $main_task->save();
        }
        

        if($challenge->currant_match == $main_task->streak){
            $challenge->status = 2;
            $challenge->wonchallenge = 1;
            $challenge->save();

            $iswonchallenge = true;

            $c = AdminChallenge::where('id',$challenge->challenge_id)->first();
            $c->status = 2;
            $c->save();

            // update user balance
            // call to dapp api

        }

        if($iswonchallenge){
            $response = Http::withOptions([
            'debug' => false,
            'verify' => false,
        ])->post('https://wallet.bitpool.gg/api/claim-reward', [
                'user_id' => $challenge->user_id,
                'amount' => $main_task->amount,
                'coin' => $main_task->coin_sku
            ]);
        }


        

        return response()->json([
            'status' => 1,
            'message' => 'Result Submitted',
            'iswon' => $iswonchallenge,

        ]);

    }






    
}
