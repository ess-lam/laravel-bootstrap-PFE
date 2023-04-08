@extends('layout')

@section('title','accueil')

@section('nav')
  <a class="nav-link active" aria-current="page" href="{{route("home1")}}">Home</a>
  <a class="nav-link" href="{{route("search")}}">Search</a>
  @auth
    <a class="nav-link" href="{{route("projets.index")}}">Projects</a>
    <a class="nav-link" href="{{route("projets.create")}}">New</a>
  @endauth
@endsection

@section('concept')
  <h1 class="mt-5 text-center"> Home Page </h1>
@endsection