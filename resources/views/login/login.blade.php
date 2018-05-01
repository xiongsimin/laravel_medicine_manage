<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> --}}
    <script src="js/jquery-3.3.1.min.js"></script>
</head>
<body>
    <script src="js/my.js"></script>

<img class="bg_pic" src="imgs/login_back.jpg">
<div class="title">医药连锁店管理系统<br><span>MEDICAL CHAIN STORE MANAGEMENT SYSTEM<span></div>
{{-- <form id="sub" action="/login" method="post"> --}}
    {!! Form::open(['url'=>'/login','method'=>'post','id'=>'sub']) !!}
    <div class="mid"></div>
    <div class="main">
        <!-- <div><img src="imgs/medicine_store.png"></div> -->
        <div><img src="imgs/admin.png"></div>
        &nbsp;&nbsp;
        {!! Form::text("user_id",null,["class"=>"user_psw","id"=>"user_id",'placeholder'=>'请输入账号']) !!}
        {{-- <input class="user_psw" type="text" placeholder="请输入账号" name="user_id" id="user_id"> --}}
        <br>
        <br>
        <div><img src="imgs/password.png"></div>
        &nbsp;&nbsp;
        {!! Form::password("psw",["class"=>"user_psw","id"=>"psw",'placeholder'=>'请输入密码']) !!}
        {{-- <input class="user_psw" type="password" placeholder="请输入密码" name="psw" id="psw"> --}}
        <br>
        <br>
        <br>
        {!!Form::hidden('_token',csrf_token())!!}
        {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}" /> --}}
        &nbsp;&nbsp;
        {!!Form::button('登陆',['class'=>'but_green','onclick'=>'login();'])!!}
        &nbsp;&nbsp;&nbsp;&nbsp;
        {{-- <input type="button" onclick="login();" class="but_green" value="登陆">&nbsp;&nbsp;&nbsp;&nbsp; --}}
        {!!Form::reset('重置',['class'=>'but_orange'])!!}
        {{-- <input class="but_orange"type="reset" value="重置"> --}}
        &nbsp;&nbsp;&nbsp;&nbsp;
        {!!Form::button('注册',['class'=>'but_blue'])!!}
        {{-- <input type="button" class="but_blue" value="注册"> --}}
        
    </div>
    {!!Form::close()!!}
    
{{-- </form> --}}
</body>
</html>