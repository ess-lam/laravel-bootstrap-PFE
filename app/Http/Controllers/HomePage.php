<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projet;

class HomePage extends Controller
{
    
    function index(){
        return view(
            'home',
            ['projets' => Projet::all()]
        );
    }
}
