<html>
    <head>
        @include('includes.head')
        <style>
            .user{
                background-color: #30343e;
                border-bottom-left-radius: 15px;
                border-bottom-right-radius: 15px;
                border-top-left-radius: 15px;
                border-top-right-radius: 15px;
                position: fixed;
                width: 75%;
                height: 80%;
                left: 20%;
                top: 10%;
            }
        </style>
    </head>
    <body>
        @include('includes.sidebar')
        <div class="user">
            <div class="alert alert-success" role="alert" style="text-align: center;">User Created!</div>
        </div>
    </body>
</html>