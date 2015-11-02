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
        $user = DB::table('playerdata')->where('id', $id)->first();;
        return view('player', ['user'   =>  $user]);
    }
    public function editplayer($id)
    {
        $user = DB::table('playerdata')->where('id', $id)->first();
        return view('player', ['user'   =>  $user]);
    }
    public function posteditplayer($id)
    {
        
    }
}
