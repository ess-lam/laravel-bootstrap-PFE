@extends('layout')

@section('title','create')

@section('nav')
  <a class="nav-link" href="{{route("home1")}}">Home</a>
  <a class="nav-link" href="{{route("search")}}">Search</a>
  <a class="nav-link" href="{{route("projets.index")}}">Projects</a>
  <a class="nav-link active" aria-current="page" href="{{route("projets.create")}}">New</a>
@endsection

@section('concept')
  <h1 class="mt-5"> Data Create Page </h1>
  
  <div class="w-75 py-3 px-5 mt-4 border border-dark bg-light rounded position-absolute top-25 start-50 translate-middle-x">

    <form action="{{ route('projets.store') }}" method="post" class="row g-3">
      @csrf
      <div class="col-md-4">

        <label for="projet-etudiant" class="form-label">nom etudiant</label>
        <input id="projet-etudiant" name="projet-etudiant" class="form-control" placeholder="first" value="{{old('projet-etudiant')}}" type="text">
        @error('projet-etudiant')
          <div class="text-danger">
            {{ "entrez nom de l'etudiant" }}
          </div>
        @enderror
      </div>

      <div class="col-md-4">
        <label for="projet-encadrant" class="form-label">nom encadrant</label>
        <input id="projet-encadrant" name="projet-encadrant" class="form-control"  placeholder="second" value="{{old('projet-encadrant')}}" type="text">
        @error('projet-encadrant')
          <div class="text-danger">
            {{ "entrez nom de l'encadrant" }}
          </div>
        @enderror
      </div>

      <div class="col-md-4">
        <label for="projet-theme" class="form-label">theme</label>
        <input id="projet-theme" name="projet-theme" class="form-control"  placeholder="third" value="{{old('projet-theme')}}" type="text">
        @error('projet-theme')
          <div class="text-danger">
            {{ "entrez le theme" }}
          </div>
        @enderror
      </div>

      <div class="col-12">
        <button class="btn btn-primary" type="submit">submit form</button>
      </div>
      
    </form>
  </div>
@endsection
