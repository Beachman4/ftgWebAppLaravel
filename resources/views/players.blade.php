<html>
    <head>
        @include('includes.head')
        <style>
        html, body {
               background-color: #252830;
               color: #fff;
               width: 100%;
               height: 100%;
            }
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
            .user p {
                display: inline-block;
                position: relative;
                top: 50%;
                transform: translateY(-50%);
            }
            .money {
                float: right;
                position: relative;
                right: 5%;
            }
            .uid {
                float: left;
                position: relative;
                left: 47.3%;
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
            .player_name {
                left: 0;
            }
            .legend h4 {
                position: fixed;
            }
            .legend_name {
                left: 26%;
                top: 17.5%;
            }
            .legend_uid {
                left: 54.7%;
                top: 17.5%;
            }
            .legend_money {
                right: 12.7%;
                top: 17.5%;
            }
            #search {
                position: fixed;
                right: 9%;
            }
        </style>
    
    </head>
    <body>
        @include('includes.sidebar')
        <div class="player_list">
            <div class="search">
                <form class="navbar-form navbar-left" id="search" role="search" method="post">
                  <div class="form-group">
                    <input type="text" class="form-control" name="search" placeholder="Player Name">
                  </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                    <input type="hidden" style="position: absolute; left: 15%;" name="_token" value="{{ csrf_token() }}">
                </form>
            </div>
            <div class="legend">
                <h4 class="legend_name"><u>Player Name</u></h4>
                <h4 class="legend_uid"><u>Player UID</u></h4>
                <h4 class="legend_money"><u>Player Money</u></h4>
            </div>
            <div class="users">
                @foreach ($users as $user)
                    <div class="user">
                        <!--<a href="/players/{{ $user->id }}"><button class="btn btn-info" id="player_button" type="button">Select</button></a> -->
                        <a href="/players/{{ $user->id }}"><p class="player_name"><u>{{ $user->core_name }}</u></p></a>
                        <p class="uid">{{ $user->core_uid }} </p>
                        <p class="money">${{ number_format($user->core_bank, 2) }} </p>
                    </div>
                @endforeach
                {!! $users->render() !!}
            </div>
        </div>
    </body>
</html>