<?php

namespace App\Http\Controllers;

use App\Models\userModel;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        return view('login');
    }

    public function login(Request $request){
        $credentials = $request->only('name', 'password');

        if (auth()->attempt($credentials)) {
            // Jika otentikasi berhasil
            return redirect()->route('dashboard');
        }

        // Jika otentikasi gagal
        return redirect('/login')->with('error', 'Login failed. Please check your credentials.');
    }

    public function register(Request $request){
        $user = userModel::create([
            'name' => $request->input('username'),
            'password' => bcrypt($request->input('password')),
            'email' => $request->input('email'),
            'role' => 'user'
        ]);

        if ($user) {
            // Registrasi berhasil
            return redirect()->route('dashboard');
        } else {
            // Registrasi gagal
            return redirect('/register');
        }
    }
}
