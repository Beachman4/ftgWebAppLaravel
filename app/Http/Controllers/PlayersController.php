<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PlayersController extends Controller
{
    public function getPlayers()
    {
        /*$users = DB::table('playerdata')->select('core_uid', 'core_name', 'core_bank')->get(); */
        $users = DB::table('playerdata')->select('id', 'core_uid', 'core_name', 'core_bank')->simplePaginate(10);        
        return view('players', ['users' =>  $users]);
    }
    public function postSearch(Request $request)
    {   
        $search = $request->input('search');
        $users = DB::table('playerdata')->select('id', 'core_uid', 'core_name', 'core_bank')->where('core_name', 'LIKE', '%'.$search.'%')->simplePaginate(10);
        return view('playersearch', ['users' =>  $users, 'search'    =>  true]);
    }
    public function showplayer($id)
    {
        $user = DB::table('playerdata')->where('id', $id)->first();
        return view('player', ['user'   =>  $user]);
    }
    public function editplayer($id)
    {
        $user = DB::table('playerdata')->where('id', $id)->first();
        return view('editplayer', ['user'   =>  $user]);
    }
    public function posteditplayer(Request $request, $id)
    {
        /*
        $this->validate($request, [
            'name'  =>  'max:255',
            'uid'   =>  'unique:playerdata,core_uid|max:255',
            'money' =>  'max:255',
            'savepoint' =>  'max:255',
            'farming'   =>  'max:255|integer',
            'fishing'   =>  'max:255|integer',
            'mining'    =>  'max:255|integer',
            'civinv'    =>  'max:255',
            'civgear'   =>  'max:255',
            'copinv'    =>  'max:255',
            'copgear'   =>  'max:255',
            'medicinv'  =>  'max:255',
            'medicgear' =>  'max:255',
        ]); */
        $name = $request->input('name');
        $uid = $request->input('uid');
        $money = $request->input('money');
        $savepoint = $request->input('savepoint');
        $farming = $request->input('farming');
        $fishing = $request->input('fishing');
        $mining = $request->input('mining');
        $civinv = $request->input('civinv');
        $civgear = $request->input('civgear');
        $copinv = $request->input('copinv');
        $copgear = $request->input('copgear');
        $medicinv = $request->input('medicinv');
        $medicgear = $request->input('medicgear');
        
        DB::table('playerdata')->where('id', $id)->update(['core_uid'   =>  $uid, 'core_name'   =>  $name, 'core_bank'  =>  $money, 'core_savepoint'    =>  $savepoint, 'core_skill_farm'   =>  $farming, 'core_skill_fish' =>  $fishing, 'core_skill_mine' =>  $mining, 'core_civ_inventory'   =>  $civinv, 'core_civ_gear'    =>  $civgear, 'core_cop_inventory'    =>  $copinv, 'core_cop_gear'    =>  $copgear, 'core_medic_inventory'  =>  $medicinv, 'core_medic_gear'    =>  $medicgear]);
        
        return redirect('/players/'.$id);    
    }
}
