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

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body style="background:rgb(225, 218, 198)">
  <header>
      <nav class="navbar navbar-expand bg-body-tertiary">
        <div class="container bg-light">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav me-auto">
            @yield('nav')
          </ul>
          
          <!-- Right Side Of Navbar -->
          @include('layouts.log')
        </div>
      </nav>
    </div>
  </header>  
  
  <main class="text-center">
    @yield('concept')
  </main>
  
</body>
</html>