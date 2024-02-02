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
            'name' => $request->input('username'),
            'password' => bcrypt($request->input('password')),
            'email' => $request->input('email'),
            'role' => 'user'
        ]);

        if ($user) {
            // Registrasi berhasil
            return redirect('/dasboard');
        } else {
            // Registrasi gagal
            return redirect('/register');
        }
    }
}
