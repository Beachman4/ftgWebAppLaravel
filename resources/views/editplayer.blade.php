<html>
    <head>
        @include('includes.head')
        <style>
            .editplayer{
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
            .edit_player {
                height: 40%;
                width: 90%;
                display: inline-block;
                position: relative;
                left: 15%;
            }
            .input {
                display: inline-block;
                padding-right: 12%;
            }
            #edit {
                position: fixed;
                top: 80%;
                left: 53%;
            }
            .input h4 {
                text-align: center;
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
        <div class="editplayer">
            <div class="alert alert-danger" role="alert" style="text-align: center;"><u><strong>DO NOT</strong></u> edit any of the below fields <u><strong>UNLESS</strong></u> you know what you are doing</div>
            <form class="edit_player navbar-form navbar-left" method="post" action="/players/{{ $user->id }}/edit" id="edit_player">
                <div class="input">
                <h4>Name</h4>
                <input type="text" class="form-control" name="name" value="{{ $user->core_name }}">
                </div>
                <div class="input">
                <h4>UID</h4>
                <input type="text" class="form-control" name="uid" value="{{ $user->core_uid }}">
                </div>
                <div class="input">
                <h4>Money</h4>
                <input type="text" class="form-control" name="money" value="{{ $user->core_bank }}">
                </div>
                <div class="input">
                <h4>Last Savepoint</h4>
                <input type="text" class="form-control" name="savepoint" value="{{ $user->core_savepoint }}">
                </div>
                <div class="input">
                <h4>Farming Skill</h4>
                <input type="text" class="form-control" name="farming" value="{{ $user->core_skill_farm }}">
                </div>
                <div class="input">
                <h4>Fishing Skill</h4>
                <input type="text" class="form-control" name="fishing" value="{{ $user->core_skill_fish }}">
                </div>
                <div class="input">
                <h4>Mining Skill</h4>
                <input type="text" class="form-control" name="mining" value="{{ $user->core_skill_mine }}">
                </div>
                <div class="input">
                <h4>Civilian Inventory</h4>
                <textarea type="text" class="form-control" name="civinv" cols="22">{{ $user->core_civ_inventory }}</textarea>
                </div>
                <div class="input">
                <h4>Civilian Gear</h4>
                <textarea type="text" class="form-control" name="civgear" cols="22">{{ $user->core_civ_gear }}</textarea>
                </div>
                <div class="input">
                <h4>Cop Inventory</h4>
                <textarea type="text" class="form-control" name="copinv" cols="22">{{ $user->core_cop_inventory }}</textarea>
                </div>
                <div class="input">
                <h4>Cop Gear</h4>
                <textarea type="text" class="form-control" name="copgear" cols="22">{{ $user->core_cop_gear }}</textarea>
                </div>
                <div class="input">
                <h4>Medic Inventory</h4>
                    <textarea type="text" class="form-control" name="medicinv" cols="22">{{ $user->core_medic_inventory }}</textarea>
                </div>
                <div class="input">
                <h4>Medic Gear</h4>
                    <textarea type="text" class="form-control" name="medicgear" cols="22">{{ $user->core_medic_gear }}</textarea>
                </div>
                <button type="submit" class="btn btn-default" id="edit">Edit Player</button>
                <input type="hidden" style="position: absolute; left: 15%;" name="_token" value="{{ csrf_token() }}">
            </form>
            <a href="/players/{{ $user->id }}"><button id="back" class="btn btn-default" type="button"><-Back</button></a>
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
        </div>
    </body>
</html>