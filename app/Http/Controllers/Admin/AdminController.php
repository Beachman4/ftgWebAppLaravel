<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use DB;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /*
    Retrieve input from Search form and search in database according to data that is entered
    return search results
    */
    public function search(Request $request)
    {
        $search = $request->input('search');
        $users = DB::table('users')->where('username', 'LIKE', '%'.$search.'%')->simplePaginate(10);
        return view('admin.usersearch', ['users'    =>  $users]);
    }
    /*
    Get User info where ID is User's ID and pass data to view
    */
    public function getuser($id)
    {
        $user = DB::table('users')->where('id', $id)->first();
        $rank = $user->rank;
        switch($rank) {
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
        return view('admin.showuser', ['user'   =>  $user, 'rank'   =>  $rank]);
    }
    /* Get User Info and pass to view
    
    */
    public function getedituser($id) {
        $user = DB::table('users')->where('id', $id)->first();
        return view('admin.edituser', ['user'   =>  $user]);   
    }
    /*
    Retrieve data from Edit User Form, filter rank variable and insert into database
    */
    public function postedituser(Request $request, $id)
    {
        $username = $request->input('username');
        $email = $request->input('email');
        $rank = $request->input('rank');
        switch($rank)
        {
            case "Head Administrator":
                $rank = 5;
                break;
            case "Senior Administrator":
                $rank = 4;
                break;
            case "Administrator":
                $rank = 3;
                break;
            case "Moderator":
                $rank = 2;
                break;
            case "Support":
                $rank = 1;
                break;
            default:
                break;
        }
        DB::table('users')->where('id', $id)->update(['username'    =>  $username, 'email'  =>  $email, 'rank'  =>  $rank]);
        return redirect('/admin/users/'.$id);
    }
    /*
    Retrieve List of Users and pass data to view
    
    */
    public function home() {
        $users = DB::table('users')->select('id', 'username', 'email', 'rank')->simplePaginate(10);
        return view('admin.adminhome', ['users'    =>  $users]);  
    }
    /*
    Display Create page
    */
    public function getCreate() 
    {
        return view('admin.create');
    }
    /*
        Retrieve info from User Create Form and insert into database
    
    return to success page
    */
    public function postCreate(Request $request)
    {
        $username = $request->input('username');
        $email = $request->input('email');
        $password = $request->input('password');
        $password = Hash::make($password);
        DB::table('users')->insert(['username'    =>  $username, 'email'  =>  $email, 'password'  =>  $password]);
        return view('admin.createsuccess');
    }
}
