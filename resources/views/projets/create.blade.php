@extends('layout')

@section('title','create')

@section('nav')
  <a class="nav-link" href="{{route("home1")}}">Home</a>
  <a class="nav-link" href="{{route("search")}}">Search</a>
  <a class="nav-link" href="{{route("projets.index")}}">Projects</a>
  <a class="nav-link active" aria-current="page" href="{{route("projets.create")}}">New</a>
@endsection

@section('concept')
  <h1 class="pb-3"> Data Create Page </h1>
  
  <div class="formulaire py-2 px-3 border border-dark bg-light rounded position-absolute top-25 start-50 translate-middle-x">

    <form action="{{ route('projets.store') }}" method="post" class="row g-3 py-3" enctype="multipart/form-data">
      @csrf
      
          {{--  etudiants --}}
      <div class="col-md-4 col-sm-6">
        <label for="projet-etudiants" class="form-label">nom des etudiants<br>(délimiteur: , )</label>
        <input id="projet-etudiants" name="projet-etudiants" class="form-control"  placeholder="etudiants" value="{{old('projet-etudiants')}}" type="text">
        @error('projet-etudiants')
          <div class="text-danger">
            {{ $message }}
          </div>
        @enderror
      </div>
        
          {{--  encadrants --}}
      <div class="col-md-4 col-sm-6">
        <label for="projet-encadrants" class="form-label">nom des encadrants<br>(délimiteur: , )</label>
        <input id="projet-encadrants" name="projet-encadrants" class="form-control"  placeholder="encadrants" value="{{old('projet-encadrants')}}" type="text">
        @error('projet-encadrants')
        <div class="text-danger">
          {{ $message }}
        </div>
        @enderror
      </div>
      
      {{-- jurys --}}
      <div class="col-md-4 col-sm-6">
        <label for="projet-jurys" class="form-label">nom des jurys<br>(délimiteur: , )</label>
        <input id="projet-jurys" name="projet-jurys" class="form-control"  placeholder="jurys" value="{{old('projet-jurys')}}" type="text">
        @error('projet-jurys')
        <div class="text-danger">
          {{ "entrez nom d'un jury" }}
        </div>
        @enderror
      </div>

      {{-- departement --}}
      <div class="col-md-4 col-sm-6">
        <label for="projet-departement" class="form-label">département</label>
        <input list="departements" id="projet-departement" name="projet-departement" class="form-control" placeholder="departement" value="{{old('projet-departement')}}" type="text">
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
            {{ $message }}
          </div>
        @enderror
      </div>

      {{-- sujet --}}
      <div class="col-md-8 col-sm-6">
        <label for="projet-sujet" class="form-label">sujet</label>
        <input id="projet-sujet" name="projet-sujet" class="form-control"  placeholder="sujet" value="{{old('projet-sujet')}}" type="text">
        @error('projet-sujet')
          <div class="text-danger">
            {{ $message }}
          </div>
        @enderror
      </div>

      {{-- annee --}}
      <div class="col-md-2 col-sm-6">
        <label for="projet-annee" class="form-label">année</label>
        <input id="projet-annee" name="projet-annee" class="form-control"  placeholder="annee" value="{{old('projet-annee')}}" type="text">
        @error('projet-annee')
          <div class="text-danger">
            {{ $message }}
          </div>
        @enderror
      </div>
      {{-- diplome --}}
      <div class="col-md-4 col-sm-6">
        <label for="projet-diplome" class="form-label">diplome</label>
        <input list="diplomes" id="projet-diplome" name="projet-diplome" class="form-control"  placeholder="diplome" value="{{old('projet-diplome')}}" type="text">
        <datalist id="diplomes">
          <option value="Licence">
          <option value="Master">
        </datalist>
        @error('projet-diplome')
          <div class="text-danger">
            {{ $message }}
          </div>
        @enderror
      </div>
      {{-- mots_cles --}}
      <div class="col-sm-6">
        <label for="mots_cles" class="form-label">mots clés (délimiteur: , )</label>
        <input id="mots_cles" name="mots cles" class="form-control"  placeholder="mots clés" value="{{old('mots_cles')}}" type="text">
      </div>

      {{-- fichier --}}
      <div class="col-12">
        <label for="fichier" class="form-label"> document <br>
          (type de fichier: .zip|.rar|.7zip)</label>
        <input id="fichier" name="fichier" class="form-control" type="file" accept=".zip,.rar,.7zip">
        @error('fichier')
        <div class="text-danger">
          {{ $message }}
        </div>
      @enderror
      </div>

      {{--<div class="col-md-1 align-self-center"> 
        ou bien
      </div> --}}

      {{-- lien --}}
      {{-- <div class="col-md-6"> <br>
        <label for="lien" class="form-label"> url </label>
        <input id="lien" name="lien" class="form-control" type="url" value="{{old('lien')}}">
      </div> --}}
      
      
      <div class="col-12">
        <button class="btn btn-primary" type="submit">submit form</button>
      </div>
    </form>
  </div>

@endsection
