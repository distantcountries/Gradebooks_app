<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gradebook;
use App\User;

class GradebooksController extends Controller
{
    public function index()
    {
        return Gradebook::with(['user', 'students'])->get();
    }

    public function store(Request $request, $id)
    {
        // $this->validate(request(), Gradebook::STORE_RULES);

        $user = User::find($id);
        $gradebook = new Gradebook();
        $gradebook->name = $request->input('name');
        
        $gradebook->user_id = $user->id;

        $gradebook->save();

        return $gradebook;

    }

    public function show($id)
    {
        $gradebook = Gradebook::with(['user', 'students'])->findOrFail($id);
        return $gradebook;
    }

    public function update(Request $request, $id)
    {
        $gradebook = Gradebook::find($id);
        $gradebook->update($request->all());

        return $gradebook;
    }

    public function destroy($id)
    {
        Gradebook::destroy($id);
        return response()->json('Gradebook is deleted!');
    }
}
