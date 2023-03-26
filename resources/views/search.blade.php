@extends('layout')

@section('title','search')

@section('nav')
<a class="nav-link" href="{{route("home")}}">Home</a>
<a class="nav-link  active" aria-current="page" href="{{route("search")}}">Search</a>
<a class="nav-link" href="{{route("projets.index")}}">Projects</a>
<a class="nav-link" href="{{route("projets.create")}}">New</a>
@endsection

@section('concept')
  <h1 class="mt-5 text-center "> Search Page </h1>
@endsection