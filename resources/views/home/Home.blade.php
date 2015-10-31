<html>
    <head>
        <title>FTG</title>
        <link rel="stylesheet" href="{{ URL::asset('assets/bootstrap/bootstrap.css') }}" />
        <link rel="stylesheet" href="{{ URL::asset('assets/bootstrap/bootstrap-theme.css') }}" />
        
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
        Rank: {{ $rank }}
        </div>
    </body>
</html>
