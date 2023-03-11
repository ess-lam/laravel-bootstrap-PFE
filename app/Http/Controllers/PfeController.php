<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projet;

class PfeController extends Controller
{
    // Array of Static Data
    /*private static function getData()
    {
        return [
            ['id' => 1, 'etudiant' => 'etudiant 1', 'encadrant' => 'encadrant 1', 'theme' => 'info'],
            ['id' => 2, 'etudiant' => 'etudiant 2', 'encadrant' => 'encadrant 2', 'theme' => 'math'],
            ['id' => 3, 'etudiant' => 'etudiant 3', 'encadrant' => 'encadrant 3', 'theme' => 'sv'],
        ];

    }*/

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view(
            'projets.index',
            ['title' => 'data','projets' => Projet::all()]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(
            'projets.create',
            ['title' => 'create']
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

        $projet->save();

        return redirect()->route('projets.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $projet)
    {
        return view(
            'projets.show',
            ['title' => 'element','projet' => Projet::findOrFail($projet)]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $projet)
    {
        return view(
            'projets.edit',
            ['title' => 'modification','projet' => Projet::findOrFail($projet)]);
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
