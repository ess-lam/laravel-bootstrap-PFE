@extends('layout')

@section('nav')
  <a class="nav-link" href="{{route("home1")}}" style="color:white">Home</a>
  <a class="nav-link active" aria-current="page" href="{{route("projets.index")}}" style="color:white">Projects</a>
  <a class="nav-link" href="{{route("projets.create")}}" style="color:white">New</a>
@endsection


  @section('concept')
  <h1 class="py-4" style="font-family: 'Allura',cursive;"> Data Index Page </h1>
  
  
    @if (count($projets)>0)
      <p> you have created {{count($projets)}} projects</p>
      <div class="list-p list-group">
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

