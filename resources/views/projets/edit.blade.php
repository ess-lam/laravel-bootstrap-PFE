@extends('layout')

@section('title','modification')

@section('nav')
<a class="nav-link" href="{{route("home1")}}">Home</a>
<a class="nav-link" href="{{route("search")}}">Search</a>
<a class="nav-link" href="{{route("projets.index")}}">Projects</a>
<a class="nav-link" href="{{route("projets.create")}}">New</a>
@endsection

@section('concept')
  <h1 class="mt-5"> data edit Page </h1>
  
  <div class="w-75 py-3 px-5 mt-4 border border-dark bg-light rounded position-absolute top-25 start-50 translate-middle-x">

    <form action="{{ route('projets.update',['projet' => $projet['id']] ) }}" method="post" class="row g-3">
      @csrf
      @method('PUT')
        {{-- etudiants --}}
      <div class="col-md-4">
        <label for="projet-etudiant1" class="form-label">nom etudiant1</label>
        <input id="projet-etudiant1" name="projet-etudiant1" class="form-control" value="{{$projet->etudiants["1"]}}" type="text">
        @error('projet-etudiant1')
          <div class="text-danger">
            {{ "entrez nom de l'etudiant" }}
          </div>
        @enderror

        @isset ($projet->etudiants["2"])
          <label for="projet-etudiant2" class="form-label">nom etudiant2</label>
          <input id="projet-etudiant2" name="projet-etudiant2" class="form-control" value="{{$projet->etudiants["2"]}}" type="text">
        @endisset
      
        @isset ($projet->etudiants["3"])
          <label for="projet-etudiant3" class="form-label">nom etudiant1</label>
          <input id="projet-etudiant3" name="projet-etudiant3" class="form-control" value="{{$projet->etudiants["3"]}}" type="text">
        @endisset
        
      </div>
        {{--  encadrant --}}
      <div class="col-md-4">
        <label for="projet-encadrant" class="form-label">nom encadrant</label>
        <input id="projet-encadrant" name="projet-encadrant" class="form-control" value="{{$projet->encadrant}}" type="text">
        @error('projet-encadrant')
          <div class="text-danger">
            {{ "entrez nom de l'encadrant" }}
          </div>
        @enderror
      </div>
        {{-- theme --}}
      <div class="col-md-4">
        <label for="projet-theme" class="form-label">theme</label>
        <input id="projet-theme" name="projet-theme" class="form-control" value="{{ $projet->theme }}" type="text">
        @error('projet-theme')
          <div class="text-danger">
            {{ "entrez le theme" }}
          </div>
        @enderror
      </div>
      {{-- jurys --}}
      <div class="col-md-4">
        <label for="projet-jurys" class="form-label">jurys</label>
        <input id="projet-jurys" name="projet-jurys" class="form-control" value="{{$projet->jurys}}" type="text">
      </div>
      {{-- sujet --}}
      <div class="col-md-4">
        <label for="projet-sujet" class="form-label">sujet</label>
        <input id="projet-sujet" name="projet-sujet" class="form-control" value="{{$projet->sujet}}" type="text">
        @error('projet-sujet')
          <div class="text-danger">
            {{ "entrez le sujet" }}
          </div>
        @enderror
      </div>

      <div class="col-12">
        <button class="btn btn-primary" type="submit">Submit form</button>
      </div>
      
    </form>
  </div>
@endsection
