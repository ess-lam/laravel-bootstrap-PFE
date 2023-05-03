<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ config('app.name') }}</title>
  
  <link rel="apple-touch-icon" sizes="180x180" href="/icons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/icons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/icons/favicon-16x16.png">
  <link rel="manifest" href="/icons/site.webmanifest">

  <!-- Fonts -->    
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
  
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  @livewireStyles
</head>
<body class="main">

  <div id="body-container">
    <div id="body-content">
      <header>
        <nav class="navbar navbar-expand shadow-sm">
          <div class="container">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
              @yield('nav')
            </ul>
            
            <!-- Right Side Of Navbar -->
            @auth
              @include('layouts.log')
            @endauth
            
          </div>
        </nav> 
        @auth
          <div class="auth-state">
            admin space 
          </div>
        @endauth
        
      </header>  
  
      <main class="text-center">
        @yield('concept')
      </main>
    </div>
  
  @include('layouts.footer')
  </div>

  @livewireScripts
</body>
</html>