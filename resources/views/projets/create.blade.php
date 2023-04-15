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
  
  <div class="w-75 py-2 px-5 border border-dark bg-light rounded position-absolute top-25 start-50 translate-middle-x">

    <form action="{{ route('projets.store') }}" method="post" class="row g-3" enctype="multipart/form-data">
      @csrf

          {{--  etudiants --}}
      <div class="col-md-4">
        <label for="projet-etudiant1" class="form-label">nom etudiant1</label>
        <input id="projet-etudiant1" name="projet-etudiant1" class="form-control" placeholder="premier" value="{{old('projet-etudiant1')}}" type="text">
        @error('projet-etudiant1')
          <div class="text-danger">
            {{ "entrez nom d'un etudiant" }}
          </div>
        @enderror

        <label for="projet-etudiant2" class="form-label">nom etudiant2</label>
        <input id="projet-etudiant2" name="projet-etudiant2" class="form-control" placeholder="deuxieme" value="{{old('projet-etudiant2')}}" type="text">
        
        <label for="projet-etudiant3" class="form-label">nom etudiant3</label>
        <input id="projet-etudiant3" name="projet-etudiant3" class="form-control" placeholder="troizieme" value="{{old('projet-etudiant3')}}" type="text">
        
      </div>
          {{--  encadrant --}}
      <div class="col-md-4">
        <label for="projet-encadrant" class="form-label">nom encadrant</label>
        <input id="projet-encadrant" name="projet-encadrant" class="form-control"  placeholder="encadrant" value="{{old('projet-encadrant')}}" type="text">
        @error('projet-encadrant')
          <div class="text-danger">
            {{ "entrez nom de l'encadrant" }}
          </div>
        @enderror
      </div>
      {{-- jurys --}}
      <div class="col-md-4">
        <label for="projet-jurys" class="form-label">jurys</label>
        <input id="projet-jurys" name="projet-jurys" class="form-control"  placeholder="jurys" value="{{old('projet-jurys')}}" type="text">
      </div>

      {{-- theme --}}
      <div class="col-md-4">
        <label for="projet-theme" class="form-label">theme</label>
        <input id="projet-theme" name="projet-theme" class="form-control"  placeholder="theme" value="{{old('projet-theme')}}" type="text">
        @error('projet-theme')
          <div class="text-danger">
            {{ "entrez le theme" }}
          </div>
        @enderror
      </div>

      {{-- sujet --}}
      <div class="col-md-8">
        <label for="projet-sujet" class="form-label">sujet</label>
        <input id="projet-sujet" name="projet-sujet" class="form-control"  placeholder="sujet" value="{{old('projet-sujet')}}" type="text">
        @error('projet-sujet')
          <div class="text-danger">
            {{ "entrez le sujet" }}
          </div>
        @enderror
      </div>

      {{-- fichier --}}
      <div class="col-md-5">
        <label for="fichier" class="form-label"> document <br>
          (accept only : .zip/.rar/.7zip files)</label>
        <input id="fichier" name="fichier" class="form-control" type="file" accept=".zip,.rar,.7zip">
      </div>
      <div class="col-md-1 mb-md-2 ou"> 
        ou bien
      </div>
      <div class="col-md-6"> <br>
        <label for="lien" class="form-label"> url </label>
        <input id="lien" name="lien" class="form-control" type="url">
      </div>
      
      
      <div class="col-12">
        <button class="btn btn-primary" type="submit">submit form</button>
      </div>
    </form>
  </div>

@endsection
