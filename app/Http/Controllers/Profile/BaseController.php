<?php

namespace App\Http\Controllers\Profile;

use Illuminate\Http\Request;

use DB;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    /**
    *   Call rank from Auth::User and return rank to view
    *   Call View Home
    *   return $rank
    */
    public function Home()
    {
        $rank = Auth::User()->rank;
        return view('home.home', ['rank'    =>  $rank]);
    }
}
