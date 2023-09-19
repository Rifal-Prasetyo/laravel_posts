<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index() {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request) {
        $validatedData= $request->validate([
            'name' => ['required', 'min:5', 'max:255'],
            'username' => 'required|min:5|max:50|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:255'

        ]);
        // $validatedData['password'] = bcrypt($validatedData['password'])  // Cara Pertama
        $validatedData['password'] = Hash::make($validatedData['password']); // cara kedua

        User::create($validatedData);
        $request->session()->flash('status', 'Register succesfully, please log in now');
        return redirect('/login');
    }

}
