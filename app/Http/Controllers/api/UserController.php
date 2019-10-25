<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }


    public function store(Request $request)
    {
        User::create($request->all());
    }


    public function show($id)
    {
        return User::findOrFail($id);
    }


    public function update(Request $request, $id)
    {
        $userSelect = User::findOrFail($id);
        $userSelect->update($request->all());
    }


    public function destroy($id)
    {
        $userSelect = User::findOrFail($id);
        $userSelect->delete();
    }
}
