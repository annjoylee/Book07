<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Book07 -- 管理區</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

  <div id="app">

    @include('_includes.nav.main')

    <div class="columns">
      <div class="column is-2 side-menu">
        @include('_includes.nav.admin')
      </div>
      <div class="column working-area">
        @yield('content')
      </div>
    </div>

  </div>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')

</body>

</html>
