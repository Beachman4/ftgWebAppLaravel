@extends('layouts.master')

<head>
    <title>FTG</title>
    <link rel="stylesheet" href="{{ URL::asset('assets/bootstrap/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/bootstrap/bootstrap-theme.css') }}" />
    <script type="text/javascript" src="{{ URL::asset('assets/js/jquery-2.1.4.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/bootstrap/bootstrap.min.js') }}"></script>
    <style>
    .form-horizontal {
    font-family: 'Ubuntu', 'Lato', sans-serif;
    font-weight: 400;
    /* Size and position */
    width: 300px;
    position: relative;
    /*
    top: 18.5%;
    left: 15.3%; */
    padding: 10px;
    overflow: hidden;

    /* Styles */
    background: #111; 
    border-radius: 0.4em;
    border: 1px solid #191919;
    box-shadow: 
        inset 0 0 2px 1px rgba(255,255,255,0.08), 
        0 16px 10px -8px rgba(0, 0, 0, 0.6);
    }

    .form-horizontal label {
        /* Size and position */
        width: 50%;
        float: left;
        padding-top: 9px;

        /* Styles */
        color: #ddd;
        font-size: 12px;
        text-transform: uppercase;
        letter-spacing: 1px;
        text-shadow: 0 1px 0 #000;
        text-indent: 10px;
        font-weight: 700;
        cursor: pointer;
    }

    .form-horizontal input[type=text],
    .form-horizontal input[type=password] {
        /* Size and position */
        width: 50%;
        float: left;
        padding: 8px 5px;
        margin-bottom: 10px;
        font-size: 12px;

        /* Styles */
        background: #1f2124; /* Fallback */
        background: -moz-linear-gradient(#1f2124, #27292c);
        background: -ms-linear-gradient(#1f2124, #27292c);
        background: -o-linear-gradient(#1f2124, #27292c);
        background: -webkit-gradient(linear, 0 0, 0 100%, from(#1f2124), to(#27292c));
        background: -webkit-linear-gradient(#1f2124, #27292c);
        background: linear-gradient(#1f2124, #27292c);    
        border: 1px solid #000;
        box-shadow:
            0 1px 0 rgba(255,255,255,0.1);
        border-radius: 3px;

        /* Font styles */
        font-family: 'Ubuntu', 'Lato', sans-serif;
        color: #fff;

    }

    .form-horizontal input[type=text]:hover,
    .form-horizontal input[type=password]:hover,
    .form-horizontal label:hover ~ input[type=text],
    .form-horizontal label:hover ~ input[type=password] {
        background: #27292c;
    }

    .form-horizontal input[type=text]:focus, 
    .form-horizontal input[type=password]:focus {
        box-shadow: inset 0 0 2px #000;
        background: #494d54;
        border-color: #51cbee;
        outline: none; /* Remove Chrome outline */
    }

    .form-horizontal p:nth-child(3),
    .form-horizontal p:nth-child(4) {
        float: left;
        width: 50%;
    }

    .form-horizontal label[for=remember] {
        width: auto;
        float: none;
        display: inline-block;
        text-transform: capitalize;
        font-size: 11px;
        font-weight: 400;
        letter-spacing: 0px;
        text-indent: 2px;
    }

    .form-horizontal input[type=checkbox] {
        margin-left: 10px;
        vertical-align: middle;
    }

    .form-horizontal input[type=submit] {
        /* Width and position */
        width: 100%;
        padding: 8px 5px;

        /* Styles */
        border: 1px solid #0273dd; /* Fallback */
        border: 1px solid rgba(0,0,0,0.4);
        box-shadow:
            inset 0 1px 0 rgba(255,255,255,0.3),
            inset 0 10px 10px rgba(255,255,255,0.1);
        border-radius: 3px;
        background: #38a6f0;
        cursor:pointer;

        /* Font styles */
        font-family: 'Ubuntu', 'Lato', sans-serif;
        color: white;
        font-weight: 700;
        font-size: 15px;
        text-shadow: 0 -1px 0 rgba(0,0,0,0.8);
    }

    .form-horizontal input[type=submit]:hover { 
        box-shadow: inset 0 1px 0 rgba(255,255,255,0.6);
    }

    .form-horizontal input[type=submit]:active { 
        background: #287db5;
        box-shadow: inset 0 0 3px rgba(0,0,0,0.6);
        border-color: #000; /* Fallback */
        border-color: rgba(0,0,0,0.9);
    }

    .no-boxshadow .form-horizontal input[type=submit]:hover {
        background: #2a92d8;
    }

    .form-horizontal:after {
        /* Size and position */
        content: "";
        height: 1px;
        width: 33%;
        position: absolute;
        left: 20%;
        top: 0;

        /* Styles */
        background: -moz-linear-gradient(left, transparent, #444, #b6b6b8, #444, transparent);
        background: -ms-linear-gradient(left, transparent, #444, #b6b6b8, #444, transparent);
        background: -o-linear-gradient(left, transparent, #444, #b6b6b8, #444, transparent);
        background: -webkit-gradient(linear, 0 0, 100% 0, from(transparent), color-stop(0.25, #444), color-stop(0.5, #b6b6b8), color-stop(0.75, #444), to(transparent));
        background: -webkit-linear-gradient(left, transparent, #444, #b6b6b8, #444, transparent);
        background: linear-gradient(left, transparent, #444, #b6b6b8, #444, transparent);
    }

    .form-horizontal:before {
        /* Size and position */
        content: "";
        width: 8px;
        height: 5px;
        position: absolute;
        left: 34%;
        top: -7px;

        /* Styles */
        border-radius: 50%;
        box-shadow: 0 0 6px 4px #fff;
    }

    .form-horizontal p:nth-child(1):before{
        /* Size and position */
        content:"";
        width:250px;
        height:100px;
        position:absolute;
        top:0;
        left:45px;

        /* Styles */
        -webkit-transform: rotate(75deg);
        -moz-transform: rotate(75deg);
        -ms-transform: rotate(75deg);
        -o-transform: rotate(75deg);
        transform: rotate(75deg);
        background: -moz-linear-gradient(50deg, rgba(255,255,255,0.15), rgba(0,0,0,0));
        background: -ms-linear-gradient(50deg, rgba(255,255,255,0.15), rgba(0,0,0,0));
        background: -o-linear-gradient(50deg, rgba(255,255,255,0.15), rgba(0,0,0,0));
        background: -webkit-linear-gradient(50deg, rgba(255,255,255,0.15), rgba(0,0,0,0));
        background: linear-gradient(50deg, rgba(255,255,255,0.15), rgba(0,0,0,0));
        pointer-events:none;
    }

    .no-pointerevents .form-horizontal p:nth-child(1):before {
        display: none;
    }
    body {
        background-color: #252830;
        color: #fff;
    }
    </style>
</head>
@section('content')		         
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form class="form-horizontal" role="form" method="POST" action="/" style="margin: 60px auto 30px;">
<p class="clearfix">
    <label for="username">Username</label>
    <input type="text" name="username" id="username" placeholder="Username">
</p>
<p class="clearfix">
    <label for="password">Password</label>
    <input type="password" name="password" id="password" placeholder="Password"> 
</p>
<p class="clearfix" style="width:100%;">
    <input type="submit" name="submit" value="Sign in">
</p>
<input type="hidden" style="position: absolute; left: 15%;" name="_token" value="{{ csrf_token() }}">
</form>
</div>
</div>
</div>

</div>
</div>

@endsection