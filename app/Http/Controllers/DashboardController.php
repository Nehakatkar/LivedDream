<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $userName = auth()->user()->name; 
        return view('dashboard',compact('userName')); // Replace 'dashboard' with your actual dashboard view name
    }
    
}
