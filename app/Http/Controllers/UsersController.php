<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index()
    {
        return User::with(['gradebook', 'images'])->get();
    }

    public function store(Request $request)
    {
        // $this->validate(request(), User::STORE_RULES);

        return User::create($request->all());
    }

    public function show($id)
    {
        return User::with(['gradebook', 'images'])->find($id);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update($request->all());

        return $user;
    }

    public function destroy($id)
    {
        User::destroy($id);
        return response()->json('User is deleted!');
    }
}
