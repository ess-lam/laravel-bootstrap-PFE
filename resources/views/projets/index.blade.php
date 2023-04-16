@extends('layout')

@section('title','data')

@section('nav')
  <a class="nav-link" href="{{route("home1")}}">Home</a>
  <a class="nav-link" href="{{route("search")}}">Search</a>
  <a class="nav-link active" aria-current="page" href="{{route("projets.index")}}">Projects</a>
  <a class="nav-link" href="{{route("projets.create")}}">New</a>
@endsection


  @section('concept')
  <h1 class="mt-5"> Data Index Page </h1>
  
  
    @if (count($projets)>0)

      <div class="list-p list-group mt-4 position-absolute top-25 start-50 translate-middle-x">
        @foreach ($projets as $projet)
            <a href="{{ route('projets.show', ['projet' => $projet['id']]) }}"   
              class="list-group-item list-group-item-action list-group-item-dark">

              <div class="etudiant"> {{implode(' , ',$projet['etudiants'])}} </div> -
              <div class="sujet"> {{$projet['sujet']}} </div> -
              <div class="departement"> {{$projet['departement']}} </div> -
              <div class="diplome"> {{$projet['diplome']}} </div> -
              <div class="annee"> {{$projet['annee']}} </div>
            
            </a>          
        @endforeach
      </div> 
      
    @else
      <p> no projects are created by you</p>  
    @endif
  
  @endsection

