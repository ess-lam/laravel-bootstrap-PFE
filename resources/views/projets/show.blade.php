@extends('layout')


@section('nav')
<a class="nav-link" href="{{route("home1")}}" style="color:white">Home</a>
<a class="nav-link" href="{{route("projets.index")}}" style="color:white">Projects</a>
<a class="nav-link" href="{{route("projets.create")}}" style="color:white">New</a>
@endsection

@section('concept')
<h1 class="pt-5"> Data Show Page </h1>
<div class="mx-4 mt-4">

  {{-- list the project informations --}}
  @include('components.list')

    {{-- buttons --}}
  <div class="show-b d-flex justify-content-center">
      <a class="inline me-2 btn btn-outline-success btn-sm" href="{{route('projets.edit', $projet->id) }}">
        modifier
      </a>
  
      <form class="inline" action="{{route('projets.destroy', $projet->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <input class="btn btn-outline-danger btn-sm" value="supprimer" type="submit">
      </form>
    
  </div>
  
</div>
@endsection
