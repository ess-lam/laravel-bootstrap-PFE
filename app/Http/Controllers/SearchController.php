<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projet;

class SearchController extends Controller
{

    public function search() {
        return view(
            'search',
            ['projets' => Projet::all()]
        );
    }
    
}
