@extends('layout')

@section('nav')
<a class="nav-link" href="{{route("home1")}}" style="color:white">Home</a>
<a class="nav-link" href="{{route("projets.index")}}" style="color:white">Projects</a>
<a class="nav-link" href="{{route("projets.create")}}" style="color:white">New</a>
@endsection

@section('concept')
  <h1 class="pb-3" style="font-family: 'Allura',cursive;"> Data Edit Page </h1>
  
  <div class="formulaire py-2 px-3 border border-dark bg-light rounded">

    <form action="{{ route('projets.update',['projet' => $projet['id']] ) }}" method="post" class="row g-3 py-3">
      @csrf
      @method('PUT')
      {{--  etudiants --}}
      <div class="col-md-4 col-sm-6">
        <label for="projet-etudiants" class="form-label">nom des etudiants<br>(délimiteur: , )</label>
        <input id="projet-etudiants" name="projet-etudiants" class="form-control"  placeholder="etudiants" value="{{implode(' , ',$projet->etudiants)}}" type="text">
        @error('projet-etudiants')
          <div class="text-danger">
            {{ "entrez nom d'un etudiant" }}
          </div>
        @enderror
      </div>
        
          {{--  encadrants --}}
      <div class="col-md-4 col-sm-6">
        <label for="projet-encadrants" class="form-label">nom des encadrants<br>(délimiteur: , )</label>
        <input id="projet-encadrants" name="projet-encadrants" class="form-control"  placeholder="encadrants" value="{{implode(' , ',$projet->encadrants)}}" type="text">
        @error('projet-encadrants')
        <div class="text-danger">
          {{ "entrez nom d'un encadrant" }}
        </div>
        @enderror
      </div>
      
      {{-- jurys --}}
      <div class="col-md-4 col-sm-6">
        <label for="projet-jurys" class="form-label">nom des jurys<br>(délimiteur: , )</label>
        <input id="projet-jurys" name="projet-jurys" class="form-control"  placeholder="jurys" 
        @if ($projet->jurys !== [""])
          value="{{implode(' , ',$projet->jurys)}}"
        @endif
        type="text">
      </div>

      {{-- departement --}}
      <div class="col-md-4 col-sm-6">
        <label for="projet-departement" class="form-label">département</label>
        <input list="departements" id="projet-departement" name="projet-departement" class="form-control" placeholder="departement" value="{{$projet->departement}}" type="text">
        <datalist id="departements">
          <option value="Informatique">
          <option value="Mathematique">
          <option value="Physique">
          <option value="Chimie">
          <option value="Biologie">
          <option value="Geologie">
        </datalist>
        @error('projet-departement')
          <div class="text-danger">
            {{ "entrez le departement" }}
          </div>
        @enderror
      </div>

      {{-- sujet --}}
      <div class="col-md-8 col-sm-6">
        <label for="projet-sujet" class="form-label">sujet</label>
        <input id="projet-sujet" name="projet-sujet" class="form-control"  placeholder="sujet" 
        value="{{$projet->sujet}}" 
        type="text">
        @error('projet-sujet')
          <div class="text-danger">
            {{ "entrez le sujet" }}
          </div>
        @enderror
      </div>

      {{-- annee --}}
      <div class="col-md-2 col-sm-6">
        <label for="projet-annee" class="form-label">année</label>
        <input id="projet-annee" name="projet-annee" class="form-control"  placeholder="annee" value={{$projet->annee}} type="text">
        @error('projet-annee')
          <div class="text-danger">
            {{ "entrez l'année" }}
          </div>
        @enderror
      </div>
      {{-- diplome --}}
      <div class="col-md-4 col-sm-6">
        <label for="projet-diplome" class="form-label">diplome</label>
        <input list="diplomes" id="projet-diplome" name="projet-diplome" class="form-control"  placeholder="diplome" value="{{$projet->diplome}}" type="text">
        <datalist id="diplomes">
          <option value="Licence">
          <option value="Master">
        </datalist>
        @error('projet-diplome')
          <div class="text-danger">
            {{ "entrez le diplome" }}
          </div>
        @enderror
      </div>
      {{-- mots_cles --}}
      <div class="col-sm-6">
        <label for="mots_cles" class="form-label">mots clés (délimiteur: , )</label>
        <input id="mots_cles" name="mots cles" class="form-control"  placeholder="mots clés" 
        @if ($projet->mots_cles !== [""])
          value="{{implode(" , ",$projet->mots_cles)}}" 
        @endif
        type="text">
      </div>
    
      <div class="col-12">
        <button class="btn btn-primary" type="submit">Submit form</button>
      </div>
      
    </form>
  </div>
@endsection
