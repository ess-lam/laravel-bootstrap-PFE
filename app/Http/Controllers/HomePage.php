<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Projet;

class HomePage extends Controller
{
    
    function index(){
        $projets_rand = Projet::inRandomOrder()
                        ->limit(5)
                        ->get();

        $projets_web = Projet::where('departement','informatique')
            ->where(function(Builder $query) {
                $query->where('mots_cles','like', '%application%web%')
                ->orWhere('mots_cles','like', '%site%web%')
                ->orWhere('sujet','like', '%application%web%')
                ->orWhere('sujet','like', '%site%web%');
        })->get();

        $projets_desktop = Projet::where('departement','informatique')
            ->where(function(Builder $query) {
                $query->where('mots_cles','like', '%application%desktop%')
                ->orWhere('sujet','like', '%application%desktop%');
        })->get();

        return view(
            'home',[
                'projets' => $projets_rand,
                'webs' => $projets_web,
                'desktops' => $projets_desktop,
            ]
            
        );
    }
}
