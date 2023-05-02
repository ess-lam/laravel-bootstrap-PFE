@extends('layout')

@section('nav')
  <a class="nav-link" href="{{route("home1")}}">Home</a>
  <a class="nav-link  active" aria-current="page" href="{{route("search")}}" style="color:white">Search</a>
  @auth
    <a class="nav-link" href="{{route("projets.index")}}" style="color:white">Projects</a>
    <a class="nav-link" href="{{route("projets.create")}}" style="color:white">New</a>
  @endauth
  
@endsection

@section('concept')
  <h1 class="py-4" style="font-family: 'Allura',cursive;" style="color:white">Search Page</h1>
  
  
  {{ $slot }}
  
  
@endsection