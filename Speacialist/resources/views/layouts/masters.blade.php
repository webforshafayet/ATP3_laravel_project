<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Laravel Project</title>

  @include('home.styles')
</head>
<body>

  <div class="wrapper">

    @include('home.nav')
    @yield('content')
    @include('home.footer')

  </div>


  @include('home.scripts')
  </body>
</html>
