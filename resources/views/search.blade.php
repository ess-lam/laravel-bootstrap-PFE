@extends('layout')

@section('title','search')

@section('nav')
  <a class="nav-link" href="{{route("home1")}}">Home</a>
  <a class="nav-link  active" aria-current="page" href="{{route("search")}}">Search</a>
  @auth
    <a class="nav-link" href="{{route("projets.index")}}">Projects</a>
    <a class="nav-link" href="{{route("projets.create")}}">New</a>
  @endauth
  
@endsection

@section('concept')
  <h1> Search Page </h1>
  
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
              <th scope="col"> ETUDIANTS </th>
              <th scope="col"> ENCADRANT </th>
              <th scope="col"> SUJET </th>
              <th scope="col"> THEME </th>
              <th scope="col"> DOCUMENT </th>
            </tr>
          </thead>
          <tbody>
            
              @foreach ($projets as $projet)
                  <tr>
                    <td> {{implode(' , ',$projet['etudiants'])}} </td>
                    <td> {{$projet->encadrant}} </td>
                    <td> {{$projet->sujet}} </td>
                    <td> {{$projet->theme}} 
                    <td> <a href={{ route('file.download',$projet->id) }}>rapport</a>  </td>
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