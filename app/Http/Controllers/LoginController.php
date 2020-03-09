<?php

namespace App\Http\Controllers;
use DB;
use Cookie;
use Illuminate\Http\Request;
class LoginController extends Controller
{
    //
    public function login(Request $request){

        $this->validate($request,[
            'Email'=>'required|email',
            'Password'=>'required'
         ]);

         $encrypt = base64_encode(base64_encode(base64_encode($request->Password)));

         $users = DB::connection('user')
            ->table('tb_user')
            ->where('User_Email',$request->Email)
            ->where('User_Password',$encrypt)
            ->first();
        if ($users != null){

            Cookie::queue('name', $request->Email, 1440);
            return redirect('/ReadytoScan')->with('status', 'Login Success');

            }
        else{
            return redirect('/_login')->with('status', 'Username or password incorrect. Please try again later.');
            }
        }


        public function logout(){
            return redirect('/')->withCookie(Cookie::forget('name'));
        }



}
