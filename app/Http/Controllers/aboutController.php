<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutController extends Controller
{
    public function about(Request $request, $id)
    {
        return redirect()->route('resources.index')->with('success', 'Data berhasil diperbarui');
    }
}
