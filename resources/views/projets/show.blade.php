@extends('layout')

@section('title','element')

@section('nav')
<a class="nav-link" href="{{route("home1")}}">Home</a>
<a class="nav-link" href="{{route("search")}}">Search</a>
<a class="nav-link" href="{{route("projets.index")}}">Projects</a>
<a class="nav-link" href="{{route("projets.create")}}">New</a>
@endsection

@section('concept')
<h1 class="pt-5"> Data Show Page </h1>
<div class="mx-4 mt-4">
  
  <div class="show">
    <div class="sujet"> {{$projet['sujet']}} </div>
    
    <div class="etudiant"> 
      <span class="label">Étudiants: </span>
      {{implode(' , ',$projet['etudiants'])}} </div>
      
    <div class="encadrant"> 
      <span class="label">Encadrants: </span>
      {{implode(' , ',$projet['encadrants'])}} </div> 

    <div class="departement"> 
      <span class="label">Département:</span>
      {{$projet['departement']}} </div> 

      <div class="mot-cle"> 
        <span class="label">mots clés: </span>
        {{implode(' , ',$projet['mots_cles'])}} </div>
        
    <div class="diplome"> {{$projet['diplome']}} </div> 

    <div class="annee"> {{$projet['annee']}} </div>
    
  </div> 
    
  <div class="show-b d-flex justify-content-center">
      <a class="inline me-2 btn btn-outline-success btn-sm" href="{{route('projets.edit', $projet->id) }}">
        modifier
      </a>
  
      <form class="inline" action="{{route('projets.destroy', $projet->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <input class="btn btn-outline-danger btn-sm" value="supprimer" type="submit">
      </form>
    
  </div>
  
</div>
@endsection
