<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function showUsers() {
        return view('admin.adminusers');
    }
    public function edituser() {
        return view('admin.edituser');   
    }
    public function home() {
        return view('admin.adminhome');   
    }
}
