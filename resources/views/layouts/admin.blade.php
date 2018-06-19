<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Book07 -- 控制台</title>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

  <div id="app">

    @include('_includes.nav.main')

    @include('_includes.nav.admin')

    <div class="working-area">
      @yield('content')
    </div>


  </div>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>
  <script>
    var navMain = new Vue({
      el: '#nav-main',
      data: {
      }
    })
  </script>
  @yield('scripts')


</body>

</html>
