@extends('layout/layout')

@section('title', 'Joined')

@section('content')


<style>
    .box{
       margin:20px auto;
       border:1px solid #eeeeee;
       border-radius: 10px;
       /* width: 600px; */
       padding: 20px;
       box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)


   }
   .card-body{
       display:flex;
       justify-content: center;
       align-items: center;
       height: 100%;
       min-height: 200px
   }
   .bg-gray{
    background-color: #eee;
    height: 100%;
    min-height: 100vh;
   }
</style>
<div class="bg-gray">
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12">
                <div class="card">
                    <div class="card-body text-center">
                        <h2 class="text-{{$data['status']}}">{{ $data['msg'] }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

   <?php
    header("refresh:4; url=/_menu");
    ?>

@endsection
