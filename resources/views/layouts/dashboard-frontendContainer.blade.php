<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

    @include('layouts.header')

  <body class="{{ $section }}">

    @include('layouts.dashboard-navigation')
    @section('container')

    @show

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @section('legroom')

  </body>
</html>
