<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function index() 
    {
        return view('register.index', [
            'title' => 'Register',  
            'active' => 'register',
        ]);
    }
    public function store(Request $request) 
    {
        $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|unique:users|max:255|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|max:255',
            'admin' => 'boolean',
        ]);
        
    }
}
