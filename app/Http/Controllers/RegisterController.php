<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register', [
            'title' => "Register"
        ]);
    }
    public function register(Request $request)
    {
        // return $request->all();
        $validatedData = $request->validate([
            'name' => 'required|min:5|max:20',  
            'username' => 'required|min:5|max:20|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6|max:255',
        ]);

        // dd($validatedData);
        $validatedData['password'] = bcrypt($validatedData['password']);
        User::Create($validatedData);
        return redirect()->route('login')->with('success', __('Registration successfull! Please login'));
    }

    public function update(Request $request, User $user)
    {
        return dd($request);
    }
}
