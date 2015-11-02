<html>
    <head>
        <title>FTG</title>
        <link rel="stylesheet" href="{{ URL::asset('assets/bootstrap/bootstrap.css') }}" />
        <link rel="stylesheet" href="{{ URL::asset('assets/bootstrap/bootstrap-theme.css') }}" />
        <script type="text/javascript" src="{{ URL::asset('assets/js/jquery-2.1.4.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('assets/bootstrap/bootstrap.min.js') }}"></script>
        
        <style>
            html, body {
               background-color: #252830;
               color: #fff;
               width: 100%;
               height: 100%;
            }
            .mainbody {
                position: fixed;
                left: 15%;
                top: 15%;
                width: 85%;
                height: 85%;
                border: 2px solid black;
            }
        </style>
    </head>
    <body>
        @include('includes.sidebar')
        <div class="mainbody">
        </div>
    </body>
</html>
