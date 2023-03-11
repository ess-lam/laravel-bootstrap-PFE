<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function home() {
        return view(
            'home',
            ['title'=>'accueil']
        );
    }

    public function about() {
        return view('about',
        ['title'=>'about']);
    }
}
