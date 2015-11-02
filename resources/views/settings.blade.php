<html>
    <head>
        @include('includes.head')
        <style>
            .settings {
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
            #edit_user h4 {
                text-align: center;
            }
            #edit_user {
                position: relative;
                left: 40%;
                top: 25%;
            }
            #edit {
                position: fixed;
                left: 53.5%;
                top: 63%;
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
        <div class="settings">
            <form class="edit_user navbar-form navbar-left" method="post" action="/admin/users/{{ $user->id }}/edit" id="edit_user">
                <div class="edit">
                    <h4>Username</h4>
                    <input type="text" name="username" class="form-control" value="{{ $user->username }}">
                </div>
                <div class="edit">
                    <h4>E-Mail Address</h4>
                    <input type="email" name="email" class="form-control" value="{{ $user->email }}">
                </div>
                <button type="submit" role="button" class="btn btn-info" id="edit">Edit Settings</button>
                <input type="hidden" style="position: absolute; left: 15%;" name="_token" value="{{ csrf_token() }}">
            </form>
        </div>
    </body>
</html>