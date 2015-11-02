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
            .settings_panel {
                width: 50%;
                height: 30%;
                background-color:
            }
        </style>
    </head>
    <body>
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
    @include('includes.sidebar')
        <div class="settings_panel">
            <form class="form-1" action="/settings" method="post">
                <input name="email" type="email" id="email" placeholder="{{ $user->email }}" />
                <input name="confirm_email" type="email" id="confirm_email" placeholder="Only if changing email" />
            </form>
        </div>
    </body>
</html>