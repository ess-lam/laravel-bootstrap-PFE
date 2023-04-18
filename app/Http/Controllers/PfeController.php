<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projet;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\FileController;

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
            'projet-etudiants'=> 'required',
            'projet-encadrants'=> 'required',
            //'projet-jurys'=> 'required',
            'projet-departement'=> 'required',
            'projet-sujet'=> 'required',
            'projet-annee'=> 'required',
            'projet-diplome'=> 'required',
        ]);


        $projet = new Projet();

        $etudiants = strip_tags($request->input('projet-etudiants'));
        $projet->etudiants = explode(',',$etudiants);

        $encadrants = strip_tags($request->input('projet-encadrants'));
        $projet->encadrants = explode(',',$encadrants);

        $jurys = strip_tags($request->input('projet-jurys'));
        $projet->jurys = explode(',',$jurys);

        $projet->departement = strip_tags($request->input('projet-departement'));
        $projet->sujet = strip_tags($request->input('projet-sujet'));
        $projet->annee = strip_tags($request->input('projet-annee'));
        $projet->diplome = strip_tags($request->input('projet-diplome'));
        
        $mots_cles = strip_tags($request->input('mots_cles'));
        $projet->mots_cles = explode(',',$mots_cles);

        if( $request->file('fichier') !== null){
            $path = $request->file('fichier')->getClientOriginalName();
            $projet->document = $request->file('fichier')->storeAs('uploads',$path,'public');
        }else{
            $projet->document = strip_tags($request->input('lien'));
        }
        
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
            'projet-etudiants'=> 'required',
            'projet-encadrants'=> 'required',
            //'projet-jurys'=> 'required',
            'projet-departement'=> 'required',
            'projet-sujet'=> 'required',
            'projet-annee'=> 'required',
            'projet-diplome'=> 'required',
        ]);

        $to_update = Projet::findOrFail($projet);
        $to_update->etudiants = ["1" => strip_tags($request->input('projet-etudiant1'))];

        if(strip_tags($request->input('projet-etudiant2')) )
        $to_update->etudiants += ["2" => strip_tags($request->input('projet-etudiant2'))];

        if(strip_tags($request->input('projet-etudiant3')) )
        $to_update->etudiants += ["3" => strip_tags($request->input('projet-etudiant3'))];

        $to_update->encadrant = strip_tags($request->input('projet-encadrant'));
        $to_update->theme = strip_tags($request->input('projet-theme'));
        $to_update->jurys = strip_tags($request->input('projet-jurys'));
        $to_update->sujet = strip_tags($request->input('projet-sujet'));

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
