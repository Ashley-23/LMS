<?php

namespace App\Http\Controllers;

use App\Enums\FormationLevelEnum;
use App\Http\Requests\FormationRequest;
use App\Models\Formation;
use App\Models\User;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function index()
    {
        $formations = Formation::with('user')->latest('name')->get();
        return view('formations.index', compact('formations'));
    }

    public function create()
    {
        return view('formations.create', [
            'formation' => new Formation(),
            'levels' => FormationLevelEnum::cases(),
        ]);
    }

    public function store(FormationRequest $request)
    {
        Formation::create([
            ...$request->validated(),
            'level' => $request->enum('level', FormationLevelEnum::class),
            'user_id' => auth()->id(),
        ]);

        return to_route('formations.index')->with('success', 'Formation créée avec succès.');
    }

    public function show(Formation $formation)
    {
        //
    }

    public function edit(Formation $formation)
    {
        return view('formations.edit', [
            'formation' => $formation,
            'levels' => FormationLevelEnum::cases(),
        ]);
    }

    public function update(FormationRequest $request, Formation $formation)
    {
        $formation->update([
            ...$request->validated(),
        ]);

        return to_route('formations.index')->with('success', 'Formation créée avec succès.');
    }

    public function destroy(Formation $formation)
    {
        //
    }
}
