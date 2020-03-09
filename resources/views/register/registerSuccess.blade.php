@extends('layout/layout')

@section('title', 'Register Success')

@section('content')
<style>
 .card{
     border-radius: 10px;
     min-height: 200px ;
 }
 .bg-black{
     background: #eee;
     width: 100%;
    height: 100%;
    min-height: 100vh;
 }
 .card-body{
     display: flex;
     justify-content: center;
     align-items: center;
     height: 100%;
 }
</style>
{{-- {{ dd($data)}} --}}
<?php
    header( "refresh:3; url=/_menu" );
?>
<div class="bg-black">
    <div class="container">
        <div class="row justify-content-center pt-5">
            <div class="col-md-10">
                <div class="block">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <h2 class="text-{{$data['status']}}">{{ $data['msg'] }}</h2>
                                <p>{{$data['sub-msg']}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
