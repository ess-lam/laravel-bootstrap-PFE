@extends('layout')

@section('nav')
  <a class="nav-link" href="{{route("home1")}}">Home</a>
  <a class="nav-link  active" aria-current="page" href="{{route("search")}}">Search</a>
  @auth
    <a class="nav-link" href="{{route("projets.index")}}">Projects</a>
    <a class="nav-link" href="{{route("projets.create")}}">New</a>
  @endauth
  
@endsection

@section('concept')
  <h1 class="py-4"> Search Page </h1>
  
  <div class="justify-content-center">
    <form action="{{ route('search', request()->query()) }}">
      @csrf
      <input name="q" class="w-50"  placeholder="search here" type="text" value="{{$search_param}}" />
      <button type="submit" class="btn btn-outline-dark btn-sm" >search</button>
    </form>
  </div>

  <div class="pt-3">
    @if (isset($search_param) and count($projets)>0)
    <div class="table-responsive">
      <table class="table table-bordered table-striped  table-success ">
        <thead>
          <tr>
            <th scope="col"> ÉTUDIANTS </th>
            <th scope="col"> ENCADRANTS </th>
            <th scope="col"> JURYS</th>
            <th scope="col"> DIPLOME </th>
            <th scope="col"> ANNÉE </th>
            <th scope="col"> SUJET </th>
            <th scope="col"> DEPARTEMENT </th>
            <th scope="col"> DOCUMENT </th>
            <th scope="col"> MOTS CLÉS </th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
          @foreach ($projets as $projet)
            <tr>
              {{-- etudiant --}}
              <td>
                <ul class="list-e">
                  @foreach ($projet->etudiants as $etudiant)
                    <li>{{$etudiant}}</li>
                  @endforeach
                </ul>
              </td>
              {{-- encadrant --}}
              <td>
                <ul class="list-e">
                  @foreach ($projet->encadrants as $enadrant)
                    <li>{{$enadrant}}</li>
                  @endforeach
                </ul>
              </td>

              {{-- jurys --}}
              <td>
                @if ($projet->jurys !== [""])
                  <ul class="list-e">
                    @foreach ($projet->jurys as $jury)
                      <li>{{$jury}}</li>
                    @endforeach
                  </ul>
                @endif
              </td>
              <td> {{$projet->diplome}} </td>
              <td> {{$projet->annee}} </td>
              <td> {{$projet->sujet}} </td>
              <td> {{$projet->departement}} </td>
              {{-- document --}}
              <td>
                @livewire('counter', ['project_id' => $projet->id])

              {{-- 
                @if(substr($projet->document,0,7)=="http://" or substr($projet->document,0,8)=="https://")
                <a href={{$projet->document}}> lien de document </a>
              @else
                @livewire('counter', ['project_id' => $projet->id])
              @endif 
              --}}

              </td>
              
              {{-- mots cles --}}
              <td>
                {{implode(' , ',$projet->mots_cles)}}
              </td>
              
            </tr>
            @endforeach
        </tbody> 
      </table>
    </div>
    @else
      <p> (no records found) </p>
    @endif

  </div>
      
  
  
      

      
    
  
  
@endsection