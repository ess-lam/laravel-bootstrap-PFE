@extends('layout')

@section('title','search')

@section('nav')
<a class="nav-link" href="{{route("home")}}">Home</a>
<a class="nav-link  active" aria-current="page" href="{{route("search")}}">Search</a>
<a class="nav-link" href="{{route("projets.index")}}">Projects</a>
<a class="nav-link" href="{{route("projets.create")}}">New</a>
@endsection

@section('concept')
  <h1 class="mt-5 "> Search Page </h1>

  <div class="">
    <form action="{{ route('search', request()->query()) }}" class="d-flex justify-content-center">
        @csrf
        <input name="q" class="w-100"  placeholder="search here" type="text" value="{{$search_param}}" />
        <button type="submit" >search</button>
    </form>
  </div>

  <table class="table table-dark">
    <thead>
        <tr>
            <th scope="col"> etudiant </th>
            <th scope="col"> encadrant </th>
            <th scope="col"> theme </th>
        </tr>
    </thead>
    <tbody>
      @if (count($projets)>0)
        @foreach ($projets as $projet)
            <tr>
                <td> {{$projet->etudiant}} </td>
                <td> {{$projet->encadrant}} </td>
                <td> {{$projet->theme}} </td>
            </tr>
        @endforeach

      @else
        <tr>
          <td> null </td>
          <td> null </td>
          <td> null </td>
        </tr>      
      @endif    
    </tbody>
  </table>


@endsection