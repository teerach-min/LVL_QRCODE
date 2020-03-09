<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use PhpParser\JsonDecoder;
use Redirect;

class RegisController extends Controller
{
    //
    public function register(Request $request){
        // dd($request->request);


        // $curl = curl_init();

        //         curl_setopt_array($curl, array(
        //             CURLOPT_URL => "http://www.api.databar.co.th/event-forum-2019/register",
        //             // CURLOPT_URL => "http://localhost:5000/service/notification/add",
        //             CURLOPT_RETURNTRANSFER => true,
        //             CURLOPT_TIMEOUT => 30,
        //             CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //             CURLOPT_CUSTOMREQUEST => "POST",
        //             CURLOPT_POSTFIELDS => $request->request,
        //             CURLOPT_HTTPHEADER => array(
        //                 "cache-control: no-cache"
        //             ),
        //         ));

        //         $response = curl_exec($curl);
        //         $err = curl_error($curl);

        //         curl_close($curl);
        //         dd(json_decode($response));




    }

    public function saveApiData(Request $request){

        // dd($request->request);
        // $validatedData = $request->validate([
        //     'Regis_Company' => 'required',
        //     'Regis_Title' => 'required',
        //     'Regis_FName' => 'required',
        //     'Regis_LName' => 'required',
        //     'Regis_Job' => 'required',
        //     'Regis_Email' => 'required',
        //     'Regis_Phone' => 'required|min:10',
        // ]);
    

        unset($request['_token']);
        $req = $request->all();
        // dd($req['Regis_Company']);
        $client = new Client();
        $response = $client->Request("POST", "http://www.api.databar.co.th/event-forum-2019/register",[
            // $response = $client->Request("POST", "http://localhost:5000/event-forum-2019/register",[

            'form_params' => [
                'Regis_Company' => $req['Regis_Company'],
                'Regis_Title' => $req['Regis_Title'],
                'Regis_FName' => $req['Regis_FName'],
                'Regis_LName' => $req['Regis_LName'],
                'Regis_Job' => $req['Regis_Job'],
                'Regis_Email' => $req['Regis_Email'],
                'Regis_Phone' => $req['Regis_Phone'],
                'Regis_Type' => 'A',
                'Regis_Status' => '1',
                'Regis_Attend' => date('Y-m-d h:i:s'),
            ]

        ]);

        $res = json_decode($response->getBody()->getContents());
        if (!isset($res->errors))
        {
            if ($res->status != false)
            {
                return view('register/registerSuccess', ['data'=> array(
                    'msg' => 'Registration Success',
                    'sub-msg' => 'Insert to the database',
                    'status' => 'success',
                    'data' => $res
                )]);

            }else {
                return view('register/registerSuccess', ['data'=> array(
                    'msg' => 'Error, Can\'t Registration',
                    'sub-msg' => 'Already in the database',
                    'status' => 'warning',
                    'data' => $res
                )]);

            }

        }
        else{
            $res = $res->errors;
            $data = [];
            foreach ($res as $key => $value) {
                # code...
                echo $value->param;
                $data[$value->param] = array(
                    'value' => $value->value,
                    'msg' => $value->msg,
                    'param' => $value->param,

                 );
            }

            return redirect()->back()->withErrors($data)->withInput();
            // dd($res->errors);
        }

    }

    public function viewall(Request $request){


        return view('/show_all');
    }
}
