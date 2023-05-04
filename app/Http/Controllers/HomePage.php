<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Projet;

class HomePage extends Controller
{
    
    function index(){
        $projets_rand = Projet::inRandomOrder()
                        ->limit(13)
                        ->get();

        $projets_third = Projet::where('departement','informatique')
            ->where(function(Builder $query) {
                $query->whereJsonContains('mots_cles', 'java')
                ->OrWhereJsonContains('mots_cles', 'j2ee');
        })->get();

        $projets_second = Projet::where('departement','informatique')
                ->orderBy('downloads', 'desc')
                ->limit(10)
                ->get();

        return view(
            'home',[
                'projets' => $projets_rand,
                'seconds' => $projets_second,
                'thirds' => $projets_third,
            ]
            
        );
    }
}
