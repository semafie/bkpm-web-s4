<?php

namespace App\Http\Controllers;

use App\Models\userModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class loginController extends Controller
{
    public function apa()
    {
        return redirect('/dasboard');
    }
    public function login(Request $request)
    {
        // dd(($request->all()));
        // $credential = $request->only('name', 'password');
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'password' => 'required',
        ]);

        try {
            $validator->validate(); // Lemparkan ValidationException jika validasi gagal

            if (auth()->attempt($request->only('name', 'password'))) {
                // Autentikasi berhasil
                // echo 'berhasil login';
                return redirect()->route('dashboard');
            } else {
                // Autentikasi gagal
                throw ValidationException::withMessages([
                    'name' => ['Nama pengguna atau kata sandi salah.'],
                ]);
            }
        } catch (ValidationException $e) {
            echo $e->getMessage();
        }
    }
}
