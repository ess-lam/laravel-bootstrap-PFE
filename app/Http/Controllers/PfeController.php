<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projet;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class PfeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projets = Projet::where('user_id', Auth::id())->get();

        return view(
            'projets.index',
            ['projets' => $projets]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(
            'projets.create'
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'projet-etudiant'=> 'required',
            'projet-encadrant'=> 'required',
            'projet-theme'=> 'required'
        ]);

        $projet = new Projet();

        $projet->etudiant = strip_tags($request->input('projet-etudiant'));
        $projet->encadrant = strip_tags($request->input('projet-encadrant'));
        $projet->theme = strip_tags($request->input('projet-theme'));
        $projet->user_id = Auth::id();

        $projet->save();

        return redirect()->route('projets.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $projet)
    {
        $projet = Projet::findOrFail($projet);

        Gate::authorize('view-projects', $projet);

        return view(
            'projets.show',
            ['projet' => $projet]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $projet)
    {
        $projet = Projet::findOrFail($projet);

        Gate::authorize('view-projects', $projet);

        return view(
            'projets.edit',
            ['projet' => $projet]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $projet)
    {
        $request->validate([
            'projet-etudiant'=> 'required',
            'projet-encadrant'=> 'required',
            'projet-theme'=> 'required'
        ]);

        $to_update = Projet::findOrFail($projet);

        $to_update->etudiant = strip_tags($request->input('projet-etudiant')) ;
        $to_update->encadrant = strip_tags($request->input('projet-encadrant'));
        $to_update->theme = strip_tags($request->input('projet-theme'));

        $to_update->save();

        return redirect()->route('projets.show',$projet);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $projet)
    {
        $to_delete = Projet::findOrFail($projet);
        $to_delete->delete();

        return redirect()->route('projets.index');

    }
}
