<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forum2019</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
</head>
<body>

<div class="container box">
        @if (count($errors) > 0)
            <div class = "alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            </div>
        @endif

        @if($message = Session::get('status'))
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <p> {{ $message }} </p>
            </div>
        @endif

        <form method="post" action=" {{ url('/_login') }}">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="email" class="form-control" name="Email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="Password" id="exampleInputPassword1" placeholder="Password">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</div>
{{--
<h2> {{  dd(Cookie::get('testnaja')) }} </h2> --}}

</body>
</html>
