@extends('layout/layout')

@section('title', 'Menu')

@section('content')
<style>
    .manage{
        padding: 15px;
    }
   
    .card{
        border-radius: 10px;
        font-size: 20px;
    }
    .card-body{
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 200px;
        font-size: 20px;
        font-weight: 600;
    }
    .title{
        font-weight: 700;
    }

</style>
<div class="container text-center pt-5">
    <h1 class="title">Menu</h1>
    <hr>
    <div class="row">
        <div class="col-6 manage">
                <a href="/walkin_regis">
                    <div class="card">
                        <div class="card-body">
                               Walk-in Registration
                        </div>
                    </div>
                </a>
        </div>
        <div class="col-6 manage">
                <a href="/checkin_manual">
                    <div class="card">
                        <div class="card-body">
                            Forget QR Code
                        </div>
                    </div>
                </a>
        </div>

        <div class="col-6 manage">
                <a href="/views">
                    <div class="card">
                        <div class="card-body">
                            View
                        </div>
                    </div>
                </a>
        </div>
        {{-- <div class="col-6 manage">
                <a href="/_logout">
                    <div class="card">
                        <div class="card-body">
                            Logout
                        </div>
                    </div>
                </a>
        </div> --}}
       


    </div>
</div>
<p style="font-size: 10px; text-align:center"> {{ isset($name) ? $name : '' }} </p>

@endsection
