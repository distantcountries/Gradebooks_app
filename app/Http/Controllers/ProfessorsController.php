<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professor;

class ProfessorsController extends Controller
{
    public function index()
    {
        return Professor::with('professor')->get();
    }

    public function store(Request $request)
    {
        // $this->validate(request(), Professor::STORE_RULES);

        return Professor::create($request->all());
    }

    public function show($id)
    {
        return Professor::with('gradebook')->find($id);
    }

    public function update(Request $request, $id)
    {
        $professor = Professor::find($id);
        $professor->update($request->all());

        return $professor;
    }

    public function destroy($id)
    {
        Professor::destroy($id);
        return response()->json('Professor is deleted!');
    }
}

