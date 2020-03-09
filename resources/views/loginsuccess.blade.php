<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Success</title>
<style>
    .box{
        margin:20px auto;
        border-radius: 10px;
        width: 600px;
        padding: 20px;

    }
    .alert-success{
        height: 50px;
    }
    h1{
        font-size: 3rem;
        color: #403e3e;
    }

    .text-manage{
        background-color: white;
        color: black;
        flex-direction: row;
        line-height: 50px;
    }
    .block{
        display: flex;
        align-items: center;
        justify-content: center;
        height: 70vh;
    }

</style>
</head>
<body>

<div class="container box">

    @if($message = Session::get('status'))
        <div class="alert alert-success">
            <p> {{ $message }} </p>
        </div>
    @endif
<?php 
    header( "refresh:5; url=/_menu" ); 
?>
        <div class="text-manage block">
                <h1>Ready to Scan.</h1>
        </div>

        <?php
            header("refresh:5; url=/_menu");
        ?>
</div>

</body>
</html>
