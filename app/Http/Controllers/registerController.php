<?php

namespace App\Http\Controllers;

use App\Models\userModel;
use Illuminate\Http\Request;

class registerController extends Controller
{
    public function register(Request $request)
    {
        // $request->validate([
        //     'username' => 'required|unique:user',
        //     'password' => 'required|min:6',
        //     'email' => 'required|email|unique:user',
        // ]);
        // dd(($request->all()));
        $data = $request->except(
            '_token',
            `updated_at`,
            `created_at`
        );
        $user = userModel::create([
            'name' => $data['username'],
            'password' => bcrypt($data['password']),
            'email' => $data['email'],
            'role' => 'user'
        ]);

        if ($user) {
            // Registrasi berhasil
            return view('/dasboard');
        } else {
            // Registrasi gagal
            return view('/register');
        }
    }
}
