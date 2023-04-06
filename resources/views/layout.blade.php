<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>page @yield('title')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body style="background:rgb(225, 218, 198)">
  <header>
    <nav class="navbar navbar-expand bg-body-tertiary">
      <div class="container-fluid">
        <div class="navbar-nav">
          @yield('nav')
        </div>     
      </div>             
    </nav>
  </header>  
  
  <main class="text-center">
    @yield('concept')
  </main>
  
</body>
</html>