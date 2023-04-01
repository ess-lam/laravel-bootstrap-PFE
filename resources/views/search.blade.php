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
  
  <div class="row justify-content-center">
    <div class="col-10">

      <form action="{{ route('search', request()->query()) }}">
        @csrf
        <input name="q" class="w-50"  placeholder="search here" type="text" value="{{$search_param}}" />
        <button type="submit" class="btn btn-outline-dark btn-sm" >search</button>
      </form>
      <br>

      @if (isset($search_param) and count($projets)>0)
        <table class="table table-responsive table-dark">
          <thead>
            <tr>
              <th scope="col"> etudiant </th>
              <th scope="col"> encadrant </th>
              <th scope="col"> theme </th>
            </tr>
          </thead>
          <tbody>
            
              @foreach ($projets as $projet)
                  <tr>
                    <td> {{$projet->etudiant}} </td>
                    <td> {{$projet->encadrant}} </td>
                    <td> {{$projet->theme}} </td>
                  </tr>
              @endforeach
          </tbody>
        </table>
        
      @else
      <p> no records found </p>
      @endif
    </div>
  </div>
  
@endsection