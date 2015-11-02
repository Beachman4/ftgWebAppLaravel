<html>
    <head>
        @include('includes.head')
        <style>
            .player_list {
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
            .users {
                width: 90%;
                height: 90%;
                position: relative;
                top: 14%;
                left: 4.5%;
                border-bottom-left-radius: 15px;
                border-bottom-right-radius: 15px;
                border-top-left-radius: 15px;
                border-top-right-radius: 15px;
            }
            .user {
                padding-top: 2%;
                background-color: #1A1C21;
                border-bottom: 1px solid black;
            }
            .user {
                padding-top: 2%;
                background-color: #1A1C21;
                border-bottom: 1px solid black;
            }
            .user p {
                display: inline-block;
                position: relative;
                top: 50%;
                transform: translateY(-50%);
            }
            .rank {
                float: right;
                position: relative;
                right: 5%;
            }
            .email {
                float: left;
                position: relative;
                left: 44%;
            }
            .user a {
                text-decoration: none;
                color: #fff;
            }
            .user button {
                position: relative;
                top: 50%;
                transform: translateY(-50%);
                float: left;
                left: 3%;
            }
            .username {
                position: relative;
                right: 8.8%;
            }
            .legend h4 {
                position: fixed;
            }
            .legend_name {
                left: 26%;
                top: 17.5%;
            }
            .legend_email {
                left: 54.7%;
                top: 17.5%;
            }
            .legend_rank {
                right: 10.5%;
                top: 17.5%;
            }
            #search {
                position: fixed;
                right: 9%;
            }
            #create {
                position: fixed;
                left: 21%;
                top: 11%;
            }
        </style>
    </head>
    <body>
        @include('includes.sidebar')
        <div class="player_list">
            <a href="/admin/create"><button class="btn btn-info" type="button" id="create">Create User</button></a>
            <div class="search">
                <form class="navbar-form navbar-left" id="search" role="search" method="post">
                  <div class="form-group">
                    <input type="text" class="form-control" name="search" placeholder="Username">
                  </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                    <input type="hidden" style="position: absolute; left: 15%;" name="_token" value="{{ csrf_token() }}">
                </form>
            </div>
            <div class="legend">
                <h4 class="legend_name"><u>Username</u></h4>
                <h4 class="legend_email"><u>User Email</u></h4>
                <h4 class="legend_rank"><u>User Rank</u></h4>
            </div>
            <div class="users">
                @foreach ($users as $user)
                    <div class="user">
                        <a href="/admin/users/{{ $user->id }}"><p class="username"><u>{{ $user->username }}</u></p></a>
                        <p class="email">{{ $user->email }} </p>
                        <p class="rank">{{ $user->rank }} </p>
                    </div>
                @endforeach
                {!! $users->render() !!}
            </div>
        </div>
    </body>
</html>