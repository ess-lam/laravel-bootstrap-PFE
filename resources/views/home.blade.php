@extends('layout')


@section('nav')
  <a class="nav-link active" aria-current="page" href="{{route("home1")}}" style="color:white">Home</a>
  @guest
    <a class="nav-link" href="{{route("search")}}" style="color:white">Search</a>
  @endguest
  @auth
    <a class="nav-link" href="{{route("projets.index")}}" style="color:white">Projects</a>
    <a class="nav-link" href="{{route("projets.create")}}" style="color:white">New</a>
  @endauth
@endsection

@section('concept')
<div class="home-top {{auth()->check() ? 'auth' : 'guest'}}">
  <div class="home-title">
    <h1> PFE search engine</h1>
    <p>Platforme d'indexation des Projets de fin d'etude</p>
  </div>
</div>

<div class="home-main">
  
  <div class="first container-cards">
    <h2>Random</h2>
    <ul class="cards-home">
    
    @foreach ($projets as $projet)
    
      <li class="card-home">
        <div>
          <h3 class="card-title-home">Subject:</h3>
          <div class="card-content">
            <p class="subject">
              {{ $projet['sujet'] }}
            </p>
            <p>
              by 
              <span class="etudiants">
                {{ implode(',',$projet['etudiants']) }}
              </span> 
            </p>
          </div>
        </div>
        <div class="card-link-wrapper">
          @livewire('counter', ['project_id' => $projet->id])
        </div>
      </li>
    @endforeach
      
    </ul>
  </div>


  <div class="second container-cards">
    <h2>the 10 top downloads</h2>
    <ul class="cards-home">
    
    @foreach ($seconds as $second)
    
      <li class="card-home">
        <div>
          <h3 class="card-title-home">Subject:</h3>
          <div class="card-content">
            <p class="subject">
              {{ $second['sujet'] }}
            </p>
            <p>
              by 
              <span class="etudiants">
                {{ implode(',',$second['etudiants']) }}
              </span> 
            </p>
          </div>
        </div>
        <div class="card-link-wrapper">
          @livewire('counter', ['project_id' => $second->id])
        </div>
      </li>
    @endforeach
      
    </ul>
    
  </div>

  <div class="third container-cards">
    <h2> java projects </h2>
    <ul class="cards-home">
    
    @foreach ($thirds as $third)
      <li class="card-home">
        <div>
          <h3 class="card-title-home">Subject:</h3>
          <div class="card-content">
            <p class="subject">
              {{ $third['sujet'] }}
            </p>
            <p>
              by 
              <span class="etudiants">
                {{ implode(',',$third['etudiants']) }}
              </span> 
            </p>
          </div>
        </div>
        <div class="card-link-wrapper">
          @livewire('counter', ['project_id' => $third->id])
        </div>
      </li>
    @endforeach
      
    </ul>
  </div>
</div>

  
<div class="page-footer">
  <a id="top" href="#">Top &#8593;</a>
</div>

@endsection