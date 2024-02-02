<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index(){
        $data_user = $this->gettabeluser();
        return view('dashboard' , compact('data_user'));
    }

    public function gettabeluser(){
        
        return User::all();
    }
}
