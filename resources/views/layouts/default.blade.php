<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

    <title>Crandell Design</title>
  </head>
  <body class="{{$view_name}}">
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
    <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
  </body>
</html>