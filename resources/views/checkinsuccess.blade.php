@extends('layout/layout')

@section('title', 'Success')

@section('content')
{{-- test --}}
{{-- <div class="container box"> --}}
<style>
    .bg-gray{
        width: 100%;
        height: 100%;
        min-height: 100vh;
        background-color: #f9f9f9;

    }
    .my-card{
        width: 100%;
    }
    .box{
        box-shadow: 0px 2px 12px rgba(0, 0, 0, 0.1);
        height: auto;
        padding: 20px 10%;
        margin: 0 auto;
        /* justify-content: center;
        align-items: center; */
        display: flex;
        flex-direction: column;
        border-radius: 20px;
        background-color: #eeeeee;
        letter-spacing: 2px;
    }

    .btn-lg{
        width: 100px;
        border: none;
    }
    .btn-lg:hover{
        border: none;
    }
    /* h1{
        font-size: 3.5rem;
        margin-bottom: 1rem;
    } */
    p{
        font-size: 17px;
    }
    a:hover{
        text-decoration:none;
    }
    .ml-10{
        margin-left: 10%;
    }
    .card{
        border-radius: 20px;
        box-shadow: 0px 2px 12px rgba(0, 0, 0, 0.1);
    }
    .form-group{
        margin-bottom: 0;
    }
    .color-blue{
        color: blue;
    }


</style>

        <form action="{{ url('/Scan-QR-Code/joined')}}" method="post">
            {{ csrf_field() }}

            <div class="bg-gray">
                <div class="row justify-content-center pt-5">
                    <div class="col-md-8 col-sm-11">
                        <div class="card my-card">
                            <div class="card-body pt-5">
                                <h1 class="text-center">Welcome</h1>
                            </div>
                            {{-- <p>Name : {{ $user->Regis_Title.' '.$user->Regis_FName.' '.$user->Regis_LName}}</p>
                            <p>Company : {{ $user->Regis_Company }} </p>
                            <p>Email : {{$user->Regis_Email}} </p>
                            <p>Type : {{$user->Regis_Type}}</p>
                            <div>
                                <button type="submit" class="btn btn-success">Join</button>
                                <a href="{{ url('/ReadytoScan')}}"  class="btn btn-info text-white">Cancel</a>
                                <input type="hidden" name="{{$status}}" value="{{$user->Regis_Token}}">
                            </div> --}}

                            <div class="ml-10 form-group row ">
                                <div class="form-group col-sm-3">
                                    <p class="form-control-plaintext">Name : </p>
                                </div>
                                <div class="form-group col-sm-9">
                                    <p class="form-control-plaintext"> {{ $user->Regis_Title.' '.$user->Regis_FName.' '.$user->Regis_LName}} </p>
                                </div>
                            </div>
                            <div class="ml-10 form-group row">
                                <div class="form-group col-sm-3">
                                    <p class="form-control-plaintext">Company : </p>
                                </div>
                                <div class="form-group col-sm-9">
                                    <p class="form-control-plaintext"> {{ $user->Regis_Company }} </p>
                                </div>
                            </div>
                            <div class="ml-10 form-group row">
                                <div class="form-group col-sm-3">
                                    <p class="form-control-plaintext">Email : </p>
                                </div>
                                <div class="form-group col-sm-9">
                                    <p class="form-control-plaintext"> {{$user->Regis_Email}} </p>
                                </div>
                            </div>
                            <div class="ml-10 form-group row pb-5">
                                <div class="form-group col-sm-3">
                                    <p class="form-control-plaintext">Type : </p>
                                </div>
                                <div class="form-group col-sm-9">

                                    @if ($user->Regis_Type == "B")
                                        <p class="form-control-plaintext color-blue">
                                           <strong> {{$user->Regis_Type }}</strong>
                                        </p>
                                    @else
                                        <p class="form-control-plaintext">
                                            {{$user->Regis_Type }}
                                        </p>
                                    @endif

                                </div>
                            </div>

                            <div class="text-center pb-5">
                                <button type="submit" class="btn-lg btn-success">Join</button>
                                <a href="{{ url('/ReadytoScan')}}"  class="btn-lg btn-info text-white">Cancel</a>
                                <input type="hidden" name="{{$status}}" value="{{$user->Regis_Token}}">
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </form>

@endsection
