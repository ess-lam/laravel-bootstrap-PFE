@extends('layout')

@section('title','element')

@section('nav')
<a class="nav-link" href="{{route("home")}}">Home</a>
<a class="nav-link" href="{{route("search")}}">Search</a>
<a class="nav-link" href="{{route("projets.index")}}">Projects</a>
<a class="nav-link" href="{{route("projets.create")}}">New</a>
@endsection

@section('concept')
<h1 class="mt-5"> Data Show Page </h1>
<div class="mx-4 mt-4">
  
  <p class="fs-3">{{ $projet['etudiant'].' - '.$projet['encadrant'].' - '.$projet['theme']}}</p> 
    
  <div class="d-flex justify-content-center">
    
      <a class="inline me-2 btn btn-outline-secondary btn-sm" href="{{route('projets.edit', $projet->id) }}">modifier</a>
  
      <form class="inline" action="{{route('projets.destroy', $projet->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <input class="btn btn-outline-secondary btn-sm" value="supprimer" type="submit">
      </form>
    
  </div>
  
</div>
@endsection
