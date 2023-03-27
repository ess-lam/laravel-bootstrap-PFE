<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projet;

class SearchController extends Controller
{

    public function search(Request $request) {
        /*return view(
            'search',
            ['projets' => Projet::all()]
        );*/
        $projets_query = Projet::query();

        $search_param = $request->query('q');

        if ($search_param) {
            $projets_query = Projet::search($search_param);
        }
        
        $projets = $projets_query->get();

        return view('search', compact('projets', 'search_param'));

    }

}
