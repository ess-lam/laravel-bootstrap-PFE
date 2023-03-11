@extends('layout')

@section('nav')
  <a class="nav-link" href="{{route("projet1")}}">Home</a>
  <a class="nav-link active" aria-current="page" href="{{route("projet2")}}">Search</a>
  <a class="nav-link" href="{{route("projet3")}}">Add</a>
@endsection

@section('concept')
  <h1 class="mt-5 text-center "> Search Page </h1>
@endsection
