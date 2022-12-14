<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $data['title']  = "Dashboard";
        $data['users']  = User::orderBy('id')->get();
        return view('dashboard', $data);
    }
}
