<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>page @yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="main">
  <header>
    
      <nav class="navbar navbar-expand shadow-sm">
        <div class="container">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav me-auto">
            @yield('nav')
          </ul>
          
          <!-- Right Side Of Navbar -->
          @include('layouts.log')
        </div>
      </nav>  
  </header>  
  
  <main class="text-center pt-5">
    @yield('concept')
  </main>
  
</body>
</html>