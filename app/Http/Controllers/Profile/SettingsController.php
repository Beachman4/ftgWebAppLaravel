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
     * @return to settings
     */
    public function updateinfo(Request $request) {
        $id = Auth::User()->id;
        $username = $request->input('username');
        $email = $request->input('email');
        DB::table('users')->where('id', $id)->update(['username'    =>  $username,'email'   =>  $email, 'rank'  =>  $rank]);
        return redirect('/settings', ['rank'    =>  Auth::User()->rank]);
    }
}
