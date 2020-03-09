@extends('layout/layout')

@section('title', 'DATABAR Not Activeted')

@section('content')
<style>
    .block{
        margin : 10%;
    }
    @media only screen and (max-width: 600px) {
        .text-manage{
            display: flex;
            height: 100vh;
            width: 100%;
            justify-content: center;
            align-items: center;
        }
    }
    @media only screen and (min-width: 600px) {
        .text-box{
            margin : 15%;
        }
    }
</style>
<div class="text-manage">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="img-manage">
                    <figure>
                        <img  src="images/Logo Enterprise-Mobility-Forum-2019 - White-01(1).png" width="100%" alt="logg">
        
                    </figure>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="text-center block">
                <div>
                    <h4 class="text-box">QR code is encrypted and can be scanned by the reception officer at forum.</h4>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
