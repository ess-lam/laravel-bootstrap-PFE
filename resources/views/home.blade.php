@extends('layout')

@section('title','accueil')

@section('nav')
  <a class="nav-link active" aria-current="page" href="{{route("home1")}}">Home</a>
  <a class="nav-link" href="{{route("search")}}">Search</a>
  @auth
    <a class="nav-link" href="{{route("projets.index")}}">Projects</a>
    <a class="nav-link" href="{{route("projets.create")}}">New</a>
  @endauth
@endsection

@section('concept')
<div class="home">
  <div>
    <h1> PFE search engine</h1>
    <p>Platforme d'indexation des Projets de fin d'etude</p>
  </div>
  
  <img class="back-img" src={{asset('storage/images/img.jpg')}} >
</div>


@endsection