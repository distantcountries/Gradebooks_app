<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Gradebook;

class UsersController extends Controller
{
    public function index()
    {
        return User::with(['gradebook', 'images'])->get();
    }

    public function store(Request $request, $id)
    {
        // $this->validate(request(), User::STORE_RULES);
        $user = new User();
        $user->firstName = $request->input('firstName');
        $user->lastName = $request->input('lastName');
        $user->images->image = $request->input('image');
        $user->gradebook->name = $request->input('name');
        
        $user->save();
        return $user;


        return User::create($request->all());
    }

    public function show($id)
    {
        return User::with(['gradebook.students', 'images'])->find($id);
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
