@extends('layout')


@section('nav')
  <a class="nav-link active" aria-current="page" href="{{route("home1")}}">Home</a>
  <a class="nav-link" href="{{route("search")}}">Search</a>
  @auth
    <a class="nav-link" href="{{route("projets.index")}}">Projects</a>
    <a class="nav-link" href="{{route("projets.create")}}">New</a>
  @endauth
@endsection

@section('concept')
<div class="home-top">
  <div class="home-title">
    <h1> PFE search engine</h1>
    <p>Platforme d'indexation des Projets de fin d'etude</p>
  </div>
  
  {{-- <img class="back-img" src={{asset('storage/images/img.jpg')}} > --}}
  
</div>

<div class="home-main">
  
  <div class="first container-cards">
    <h2>Random</h2>
    <ul class="cards-home">
    
    @foreach ($projets as $projet)
    
      <li class="card-home">
        <div>
          <h3 class="card-title-home">sujet de projet</h3>
          <div class="card-content">
            <p>
              {{ $projet['sujet'] }}
            </p>
          </div>
        </div>
        <div class="card-link-wrapper">
          @livewire('counter', ['project_id' => $projet->id])        </div>
      </li>
    @endforeach
      
    </ul>
  </div>


  <div class="second container-cards">
    <h2>Applications et Sites Web</h2>
    <ul class="cards-home">
    
    @foreach ($webs as $web)
    
      <li class="card-home">
        <div>
          <h3 class="card-title-home">sujet de projet</h3>
          <div class="card-content">
            <p>
              {{ $web['sujet'] }}
            </p>
          </div>
        </div>
        <div class="card-link-wrapper">
          @livewire('counter', ['project_id' => $web->id])
        </div>
      </li>
    @endforeach
      
    </ul>
    
  </div>

  <div class="third container-cards">
    <h2>Applications Desktop</h2>
    <ul class="cards-home">
    
    @foreach ($desktops as $desktop)
      <li class="card-home">
        <div>
          <h3 class="card-title-home">sujet de projet</h3>
          <div class="card-content">
            <p>
              {{ $desktop['sujet'] }}
            </p>
          </div>
        </div>
        <div class="card-link-wrapper">
          @livewire('counter', ['project_id' => $desktop->id])
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