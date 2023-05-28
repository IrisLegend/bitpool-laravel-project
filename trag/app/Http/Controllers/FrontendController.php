<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\AdminChallenge;
use App\Models\AdminChallengeUserPlayedMatch;
use App\Models\AdminChallengeUserPlayMatch;
use Illuminate\Support\Facades\Cookie;

use Illuminate\Support\Facades\Http;

use App\Models\Setting;


class FrontendController extends Controller
{


    
    



    public function dashboard(Request $req)
    {

        if(isset($_GET['lmt'])){
            $lmt = $_GET['lmt'];
        }else{
            $lmt = 10;
        }

        $uid = $req->uid;

        if($uid == null){
            $uid = Cookie::get('user_id');
           

            // if($uid == ""){
            //     header('Location: https://app.bitsport.gg/login?redirect=http://localhost:8000/?uid=1110');
            //     exit();
            // }
        }

        Cookie::queue('user_id', $uid, 60*24*30);
        // $user = $this->getUserData();
        $user = [];


        // dd($this->_user_id);

        $challenges = AdminChallenge::where('status', '1')->limit($lmt)->get();

        
        $isSeeMore = true;
        
        $c = AdminChallenge::where('status', '1')->get();

        if(count($c) <= $lmt){
            $isSeeMore = false;
        }

        $lmt = $lmt + 10;


        return view('dashboard', compact('challenges', 'user', 'lmt', 'isSeeMore'));
    }


    public function quests(Request $request)
    {

        // $uid = $request->uid;
        $id = $request->id;

        $uid =  Cookie::get('user_id');
        // dd($uid);

        $challenge = AdminChallenge::where('id', $id)->first();

        // status change when challenge accept except bitp challenge

        if($challenge->status == '2'){
            session()->put('error', 'Challenge closed');
            return back();
        }

        
        if($challenge->coin_sku != 'BITP'){

            // check QC available
            

            $q = $this->getUSDG();
            $qc = $q['qc'];

            if((int)$qc < (int)$challenge->qc){
                session()->put('error', 'insufficient QC');
                return back();

            }else if($qc>0){
                // reduce QC

                $uid = Cookie::get('user_id');

                
                $response = Http::post('http://localhost:8000/api/credit-qc', [
                    'id' => $uid,
                    'amount' =>$challenge->qc
                ]);
                
                $response = $response->json();
                
            }


            $challenge->status = '2';
            $challenge->save();
        }



        $challenge_user_play_match = AdminChallengeUserPlayMatch::where('challenge_id',$challenge->id)->where('user_id', $uid)->orderBy('id', 'DESC')->first();

       if(!$challenge_user_play_match){

            $start = AdminChallengeUserPlayMatch::create([
                'user_id' => $uid,
                'challenge_id' => $challenge->id
            ]);
       }


       $cid = $challenge->id;

    //    $user = $this->getUserData();
    $user = [];


    //    $msg = ($challenge_user_play_match->currant_match+1)." of ".$challenge->streak;
       $msg = "";


        return view('quests', compact('challenge', 'uid', 'cid', 'user', 'msg'));
    }





    public function getUserData(){


        // get user data from cookes
        $user_id = Cookie::get('user_id');

        $response = Http::post('https://app.bitsport.gg/api/bitpool/get-user', [
            'user_id' => $user_id
        ]);

        $response = $response->json();

        if($response == null){

            $user = [
                'username' => "",
                'mbtc' => 0,
                'profile' => ""
            ];

            return $user;
        }

        $user = $response['data'];


        if($user == null){

            $user = [
                'username' => "",
                'mbtc' => 0,
                'profile' => ""
            ];

            return $user;
        }




        // forget cookie
        Cookie::queue(Cookie::forget('user_name'));
        Cookie::queue(Cookie::forget('user_bitp'));
        Cookie::queue(Cookie::forget('user_img'));


        // set cookie
        Cookie::queue('user_name', $user['username'], 60*24*30);
        Cookie::queue('user_bitp', $user['mbtc'], 60*24*30);
        Cookie::queue('user_img', $user['profile'], 60*24*30);

        
        // dd($response);

        return $user;


    }



    public function getCurrantMatc($id){


        $uid =  Cookie::get('user_id');

        $challenge_user_play_match = AdminChallengeUserPlayMatch::where('challenge_id',$id)->where('user_id', $uid)->orderBy('id', 'DESC')->first();

        if($challenge_user_play_match){
            return $challenge_user_play_match->currant_match;
        }else{
                return 0;
            }

    }


    public function login(Request $req){
            
            $email = $req->email;
            $password = $req->password;
    

            $response = Http::post('https://app.bitsport.gg/api/bitpool/login', [
                'email' => $email,
                'password' => $password
            ]);


            $response_ = $response->json();

            if($response_['status'] == '0'){
                session()->put('error', 'Invalid Email or Password');
                return back()->with('error', 'Invalid Email or Password');
            }

            // dd($response_);

            $user_id = $response_['uid'];
            
            Cookie::queue('user_id', $user_id, 60*24*30);
            // $user = $this->getUserData();
        $user = [];

    
    
            return back();
    }




    public function register(Request $req){
            
        $email = $req->email;
        $password = $req->password;
        $fname = $req->fname;
        $lname = $req->lname;
        $username = $req->username;


        // dd($req->all());


        $response = Http::post('https://app.bitsport.gg/api/bitpool/register', [
            'email' => $email,
            'password' => $password,
            'fname' => $fname,
            'lname' => $lname,
            'username' => $username
        ]);


        $response_ = $response->json();


        // dd($response_);  


        if($response_['status'] == '1'){

            session()->put('rerror', 'Username already exists');
            return back()->with('error', 'Username already exists');
        }

        if($response_['status'] == '0'){
            session()->put('rerror', 'Email already exists');
            return back()->with('error', 'Email already exists');
        }

 

       

        $user_id = $response_['uid'];
        
        Cookie::queue('user_id', $user_id, 60*24*30);
        // $user = $this->getUserData();
        $user = [];



        return back();
}



    public function logout(){
        Cookie::queue(Cookie::forget('user_id'));
        Cookie::queue(Cookie::forget('user_name'));
        Cookie::queue(Cookie::forget('user_bitp'));
        Cookie::queue(Cookie::forget('user_img'));

        return redirect('/');
    }


    public function winner(Request $req){

        $req = $req->id;

        $challenge = AdminChallenge::where('id', $req)->first();


        // $user = $this->getUserData();
        $user = [];
        

        return view('winner', compact('challenge', 'user'));

    }

    public static function getOnlinePlayers(){
            $p = AdminChallengeUserPlayedMatch::where('status', 1)->get();
            return count($p);
    }




    public static function getBannerBottom(){

        $setting = Setting::where('key', 'banner')->first();
        
        return $setting->value;

    }

    public static function getBannerBottomUrl(){

        $setting = Setting::where('key', 'banner')->first();
        
        return $setting->value2;

    }


    public static function getUSDG(){

        $uid = Cookie::get('user_id');

        $response = Http::post('http://localhost:8000/api/get-usdg', [
            'id' => $uid
        ]);

        $response = $response->json();

        return $response;

    }


}
