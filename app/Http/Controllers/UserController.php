<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function createuser()
    {
       
        $userName = auth()->user()->name; 
        return view('user.create',compact('userName'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => 'nullable|digits_between:10,15',
            'role' => 'required|in:0,1',
            'password' => 'required|confirmed|min:6',
        ]);
    
        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone_number' => $validated['phone'],
            'is_admin' => $validated['role'],
            'admin_id' => auth()->id(),
            'password' => Hash::make($validated['password']),
        ]);
    
        return redirect()->back()->with('success', 'User created successfully!');
    }
}
