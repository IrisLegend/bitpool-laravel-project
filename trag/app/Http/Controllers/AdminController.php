<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\AdminChallenge;
use App\Models\AdminChallengeUserPlayedMatch;
use App\Models\AdminChallengeUserPlayMatch;
use App\Models\Setting;


class AdminController extends Controller
{
    
    public function add_challenge(){


        return view('admin.add_challenge');

    }


    public function add_challenge_store(Request $req){

        $challenge = new AdminChallenge;
        $challenge->title = $req->title;
        $challenge->difficalty = $req->dif;
        $challenge->streak = $req->streak;
        $challenge->amount = $req->amount;
        $challenge->coin_sku = $req->coin;
        $challenge->qc = $req->qc;
        $challenge->save();

        return redirect('/admin-challenges');
    }



    public function admin_challenge(){
            
            $challenges = AdminChallenge::all();
    
            return view('admin.admin_challenge', compact('challenges'));
    }



    public function admin_bottom_banner(){
        $data = Setting::where('key', 'banner')->first();
        // dd($data);
        return view("admin.admin_bottom_banner", compact('data'));
    }


    public function admin_bottom_banner_post(Request $req){
       
        $data = Setting::where('key', 'banner')->first();
        $data->value2 = $req->url;


        if($req->file()) {
            $fileName = time().'_'.$req->file->getClientOriginalName();
            $filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');
            // $fileModel->name = time().'_'.$req->file->getClientOriginalName();
            $data->value =  '/storage/'.$filePath;

        }
        
        
        $data->save();
        
        return back();

    }



   



}
