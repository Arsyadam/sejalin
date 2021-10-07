<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|unique:users|max:255|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|max:255',
            'admin' => 'boolean'
        ]);

        // $validatedData['password'] = bycrpt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        // $request->session()->flash('success', 'Register Berhasil! Silahkan Login');

        return redirect('/login')->with('success', 'Register Berhasil! Silahkan Login');
        
    }
}
