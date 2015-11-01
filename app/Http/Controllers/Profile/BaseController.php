<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    /**
    *   Call Database and retreive rank where username = stored
    *
    *   return $rank
    */
    public function getRank()
    {
        $rank = DB::table('users')->where('username', Auth::User())->value('rank');
        return view('home.home', ['rank'    =>  $rank]);
    }
}
