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
    </body>
</html>