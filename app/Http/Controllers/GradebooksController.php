<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gradebook;

class GradebooksController extends Controller
{
    public function index()
    {
        return Gradebook::all();
    }

    public function store(Request $request)
    {
        $this->validate(request(), Gradebook::STORE_RULES);

        $gradebook = new Gradebook();
        $gradebook->name = $request->input('name');

        $gradebook->save();

        return $gradebook;

    }

    public function show($id)
    {
        return Gradebook::find($id);
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
