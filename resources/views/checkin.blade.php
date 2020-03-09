@extends('layout/layout')

@section('title', 'DATABAR Not Activeted')

@section('content')
<style>
     .box{
        margin:20px auto;
        border:1px solid #eeeeee;
        border-radius: 10px;
        width: 600px;
        padding: 20px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
    }
    .alert-danger{
        height: 50px;
    }
</style>
    <div class="container box">
            @if($message = Session::get('status'))
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <p> {{ $message }} </p>
                </div>
            @endif
            <form method="POST" action="{{ url('/checkin_manual')}}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="Email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
    </div>


@endsection
