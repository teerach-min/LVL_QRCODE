<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class CheckinManual extends Controller
{
    //
    public function Checkin(Request $request){

         $user = DB::connection('forum')
            ->table('forum_register')
            ->where('Regis_Email',$request->Email)
            ->first();

        if (isset($user->Regis_Email))
        {
            return view('/checkinsuccess', ['user' => $user, 'status' => 'Regis_Token']);

        }else{
            // return view('', ['data' => $request->Email]);
            // return view('/joined',['data'=> 'Joined']);
            return redirect('/checkin_manual')->with('status', 'Email address incorrect. Please try again.');

        }

    }
}
