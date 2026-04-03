<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function index()
    {
        $formations = Formation::all();
        return view('formations.index', compact('formations'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Formation $formation)
    {
        //
    }

    public function edit(Formation $formation)
    {
        //
    }

    public function update(Request $request, Formation $formation)
    {
        //
    }

    public function destroy(Formation $formation)
    {
        //
    }
}
