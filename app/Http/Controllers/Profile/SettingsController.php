<?php

namespace App\Http\Controllers\Profile;

use Illuminate\Http\Request;

use DB;
use Auth;
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
        switch($user->rank) {
            case 1:
                $rank = "Support";
                break;
            case 2:
                $rank = "Moderator";
                break;
            case 3:
                $rank = "Administrator";
                break;
            case 4:
                $rank = "Senior Administrator";
                break;
            case 5:
                $rank = "Head Administrator";
                break;
            default:
                break;
        }
        return view('settings', ['user'  =>  $user, 'rank'  =>  $rank]);
    }
    /**
     * Updates Info in Database if different than current value
     * 
     * @return NULL for now
     */
    public function updateinfo() {
        
    }
}
