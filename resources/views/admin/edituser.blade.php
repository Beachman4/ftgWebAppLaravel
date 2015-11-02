<html>
    <head>
        @include('includes.head')
        <style>
            .edituser {
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
            .rank {
                color: black;
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
            #back {
                position: fixed;
                left: 21%;
                top: 12%;
            }
        </style>
    </head>
    <body>
        @include('includes.sidebar')
        <div class="edituser">
            <form class="edit_user navbar-form navbar-left" method="post" action="/admin/users/{{ $user->id }}/edit" id="edit_user">
                <div class="edit">
                    <h4>Username</h4>
                    <input type="text" name="username" class="form-control" value="{{ $user->username }}">
                </div>
                <div class="edit">
                    <h4>E-Mail Address</h4>
                    <input type="email" name="email" class="form-control" value="{{ $user->email }}">
                </div>
                <div class="edit">
                    <h4>Rank</h4>
                    <select name="rank" class="rank form-control">
                        <option value="Head Administrator">Head Administrator</option>
                        <option value="Senior Administrator">Senior Administrator</option>
                        <option value="Administrator">Administrator</option>
                        <option value="Moderator">Moderator</option>
                        <option value="Support">Support</option>
                    </select>
                </div>
                <button type="submit" role="button" class="btn btn-info" id="edit">Edit User</button>
                <input type="hidden" style="position: absolute; left: 15%;" name="_token" value="{{ csrf_token() }}">
            </form>
            <a href="/admin/users/{{ $user->id }}"><button id="back" class="btn btn-default" type="button"><-Back</button></a>
        </div>
    </body>
</html>