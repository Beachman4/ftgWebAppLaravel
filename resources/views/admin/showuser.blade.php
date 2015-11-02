<html>
    <head>
        @include('includes.head')
        <style>
            .user {
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
            .info {
                position: relative;
                left: 40%;
                top: 20%;
                width: 15%;
            }
            .user_info {
                padding-top: 2%;
            }
            .user_info h4 {
                text-align: center;
            }
            .user_info p {
                text-align: center;
            }
            #back {
                position: fixed;
                left: 21%;
                top: 12%;
            }
            #edit {
                position: fixed;
                right: 6%;
                top: 85%;
            }
        </style>
    </head>
    <body>
        @include('includes.sidebar')
        <div class="user">
            <div class="info">
                <div class="user_info">
                <h4>Username</h4>
                <p>{{ $user->username }}</p>
                </div>
                <div class="user_info">
                <h4>E-Mail Address</h4>
                <p>{{ $user->email }}</p>
                </div>
                <div class="user_info">
                <h4>Rank</h4>
                <p>{{ $rank }}</p>
                </div>
            </div>
        </div>
        <a href="/admin"><button id="back" class="btn btn-default" type="button"><-Back</button></a>
        <a href="/admin/users/{{ $user->id }}/edit"><button class="btn btn-default" id="edit" type="button">Edit User</button></a>
    </body>
</html>