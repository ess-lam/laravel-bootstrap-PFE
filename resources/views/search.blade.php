@extends('layout')

@section('nav')
  <a class="nav-link" href="{{route('home1')}}"  style="color:white">Home</a>
  <a class="nav-link  active" aria-current="page" href="{{route('search')}}" style="color:white">Search</a>
  
@endsection

@section('concept')
  <h1 class="py-4 search-title">Search Page</h1>
  
  
  {{ $slot }}
  
  
@endsection