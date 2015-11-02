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
            .player{
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
            .uid {
                float: right;
            }
            .savepoint {
                float: right;
            }
            .farming {
                float: right;
            }
            .mining {
                float: right;
            }
            .civgear {
                float: right;
            }
            .copgear {
                float: right;
            }
            .medicgear {
                float: right;
            }
            .player div {
                padding-bottom: 2%;
                position: relative;
                top: 15%;
                left: 15%;
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
        <div class="player">
            <div class="name col-md-6">
            <h4>Name</h4>
            <p>{{ $user->core_name }}</p>
            </div>
            <div class="uid col-md-6">
            <h4>UID</h4>
            <p>{{ $user->core_uid }}</p>
            </div>
            <div class="money col-md-6">
            <h4>Money</h4>
            <p>${{ number_format($user->core_bank, 2) }}</p>
            </div>
            <div class="savepoint col-md-6">
            <h4>Last Savepoint</h4>
            <p>{{ $user->core_savepoint }}</p>
            </div>
            <div class="farming col-md-6">
            <h4>Farming Skill</h4>
            <p>{{ $user->core_skill_farm }}</p>
            </div>
            <div class="fishing col-md-6">
            <h4>Fishing Skill</h4>
            <p>{{ $user->core_skill_fish }}</p>
            </div>
            <div class="mining col-md-6">
            <h4>Mining Skill</h4>
            <p>{{ $user->core_skill_mine }}</p>
            </div>
            <div class="civinv col-md-6">
            <h4>Civilian Inventory</h4>
            <p>{{ $user->core_civ_inventory }}</p>
            </div>
            <div class="civgear col-md-6">
            <h4>Civilian Gear</h4>
            <p>{{ $user->core_civ_gear }}</p>
            </div>
            <div class="copinv col-md-6">
            <h4>Cop Inventory</h4>
            <p>{{ $user->core_cop_inventory }}</p>
            </div>
            <div class="copgear col-md-6">
            <h4>Cop Gear</h4>
            <p>{{ $user->core_cop_gear }}</p>
            </div>
            <div class="medicinv col-md-6">
            <h4>Medic Inventory</h4>
            <p>{{ $user->core_medic_inventory }}</p>
            </div>
            <div class="medicgear col-md-6">
            <h4>Medic Gear</h4>
            <p>{{ $user->core_medic_gear }}</p>
            </div>
        </div>
        <a href="/players"><button id="back" class="btn btn-default" type="button"><-Back</button></a>
        @if (Auth::User()->rank >= 3)
        <a href="/players/{{ $user->id }}/edit"><button class="btn btn-default" id="edit" type="button">Edit Player</button></a>
        @endif
    </body>
</html>