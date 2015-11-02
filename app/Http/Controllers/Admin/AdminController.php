<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use DB;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AdminController extends Controller
{
    use AuthenticatesAndRegistersUsers, ThrottlesLogins;
    
    public function showUsers() {
        $users = DB::table('users')->get();
        return view('admin.adminusers', ['users'    =>  $users]);
    }
    public function search(Request $request)
    {
        $search = $request->input('search');
        $users = DB::table('users')->where('username', 'LIKE', '%'.$search.'%')->simplePaginate(10);
        return view('admin.usersearch', ['users'    =>  $users]);
    }
    public function edituser() {
        return view('admin.edituser');   
    }
    public function home() {
        $users = DB::table('users')->select('id', 'username', 'email', 'rank')->simplePaginate(10);
        return view('admin.adminhome', ['users'    =>  $users]);  
    }
    public function create()
    {
        return User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
