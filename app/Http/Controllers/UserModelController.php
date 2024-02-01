<?php

namespace App\Http\Controllers;

use App\Models\userModel;
use App\Http\Requests\StoreuserModelRequest;
use App\Http\Requests\UpdateuserModelRequest;

class UserModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreuserModelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(userModel $userModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(userModel $userModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateuserModelRequest $request, userModel $userModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(userModel $userModel)
    {
        //
    }
}
