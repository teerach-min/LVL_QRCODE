<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Cookie;

use Illuminate\Http\Request;

class ForumController extends Controller
{
    //
    public function ViewCustomer ()
    {
        $client = new Client();
        $res = $client->request('GET', 'http://www.api.databar.co.th/event-forum-2019/customers');

        $res = $res->getBody()->getContents();
        $res = json_decode($res);

        return view('/show_all', ['data'=> $res]);
        // dd(json_decode($result));
    }

    public function MenuForum()
    {
        if(Cookie::get('name') != null){

            return view('/menu', ['name' => Cookie::get('name')]);
        }else{
            return redirect('_login');
        }


    }
}
