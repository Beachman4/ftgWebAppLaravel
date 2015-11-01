<?php

namespace App\Http\Controllers\Profile;

use Illuminate\Http\Request;

use DB;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
    /**
     *Retreive User info from database and pass to View
     *
     * @return user settings to view
     */
    public function getdbinfo()
    {
        $user = Auth::User();
        return view('settings', ['user'  =>  $user]);
    }
    /**
     * Updates Info in Database if different than current value
     * 
     * @return NULL for now
     */
    public function updateinfo()
    {
        
    }
}
