<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=windows-874">
    {{-- <link href="https://fonts.googleapis.com/css?family=Prompt:400|Roboto&display=swap" rel="stylesheet"> --}}
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>@yield('title')</title>
</head>

<style>
   body{
    font-family: 'Poppins', sans-serif; sans-serif;
    height: 100%;
    /* width:100%; */
    margin:0px;
    padding:0px;
   }


    .text-manage{
        background-color: black;
        color: #eeeeee;
        height: 100vh;
        align-items: center;
        display: flex;
        flex-direction: column;
    }
    /* .block{
        box-shadow: 0px 2px 12px rgba(0, 0, 0, 0.1);
        height: 150px;
        padding: 0 100px;
        margin: 0 auto;
        justify-content: center;
        align-items: center;
        display: flex;
        border-radius: 20px;
        background-color: black;
        letter-spacing: 2px;
    } */
    .img-manage{
        text-align: center;
        padding: 10% 10% 0 10%;
    }

</style>

<body>

@yield('content')

</body>
</html>
