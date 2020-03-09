<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Mpdf\Tag\Strong;
use Cookie;
use DB;

class ScanController extends Controller
{
    //

    public function Qrcode($id){

        if(Cookie::get('name') != null){

            $users = DB::connection('forum')
            ->table('forum_register')
            ->where('Regis_Token',$id)
            ->first();

            if (isset($users->Regis_Token ) == $id)
            {
                return view('/checkinsuccess', ['user' => $users, 'status' => 'Regis_Token']);
            }else{
                
                return view('/joined',['data'=> array(
                    'status' => 'warning',
                    'msg' =>'QR Code is not in the system.'
                )]);
            }

        }
        else{
            return redirect('/')->with('status', 'Please login.');
        }
    }


    public function Joined(Request $request){
        unset($request['_token']);
        $req = $request->all();
        $checkreq = $req['Regis_Token'];

        $users = DB::connection('forum')
        ->table('forum_register')
        ->where('Regis_Token',$req['Regis_Token'])
        ->first();


            if($users->Regis_Status == 0){
                $client = new Client();
                $response = $client->Request("POST", "http://www.api.databar.co.th/event-forum-2019/attend-the-event",[

                    'form_params' => [
                        'Regis_Token' => $req['Regis_Token'],
                    ]
                    ]);

                $data = json_decode($response->getBody()->getContents());

                if($data->status == true)
                {
                    return view('/joined', ['data'=> array(
                        'msg' => 'Join Success',
                        'status' => 'success'
                    )]);
                }
                else
                {
                    return view('/joined',['data'=> array(
                        'msg' => 'Error SQL',
                        'status' => 'danger'
                    )]);
                }
            }
            else{
                return view('/joined',['data'=> array(
                    'msg' => 'You has Joined',
                    'status' => 'warning'
                )]);
            }

    }
}
