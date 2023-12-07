<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    
// Admin login form view
    public function Index(){
        return view('admin.admin_login');
    }

// Admin login form view
    public function Login(){
        return view('admin.admin_registration');
    }

// Admin Dahaboard view
    public function Dashboard(){
        return view('admin.index');
    }
}
