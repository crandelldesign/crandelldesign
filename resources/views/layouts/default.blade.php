<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <style>
      #site-overlay {
          position: fixed;
          z-index: 9999;
          width: 100%;
          height: 100%;
          background-color: #FFF;
          top: 0;
          bottom: 0;
          left: 0;
          right: 0;
          transition: all .25s ease-in-out;
          -moz-transition: all .25s ease-in-out;
          -webkit-transition: all .25s ease-in-out;
      }
      #site-overlay.loaded {
          opacity: 0;
          z-index: 0;
      }
      #site-overlay svg {
          height: 80px;
          width: 80px;
          position: fixed;
          top: 50%;
          left: 50%;
          margin-top: -40px;
          margin-left: -40px;
          border-radius: 50%;
          animation: ckw 2s infinite linear;
          transform-origin: 50% 50%;
          display: block;
      }
      @keyframes ckw {
          0% {
              transform: rotate(0deg);
          }
          100% {
              transform: rotate(360deg);
          }
      }
    </style>
    <script>
      // Page Transitions
      function hideSiteOverlay() {
          var element = document.getElementById('site-overlay');
          element.classList.add('loaded');
      }
      function showSiteOverlay(e) {
          var e = window.e || e;
          if ((e.target.tagName !== 'A') || e.target.classList.contains('page-scroll'))
              return;

          var element = document.getElementById('site-overlay');
          element.classList.remove('loaded');
      }
      // Listen to remove overlay
      if (window.addEventListener)
          window.addEventListener("load", hideSiteOverlay, false);
      else if (window.attachEvent)
          window.attachEvent("onload", hideSiteOverlay);
      else window.onload = hideSiteOverlay;
      // Listen to add overlay
      if (document.addEventListener)
          document.addEventListener('click', showSiteOverlay, false);
      else
          document.attachEvent('onclick', showSiteOverlay);
      // Cancel Transition if it's taking too long
      setTimeout(function() {
          hideSiteOverlay()
      }, 5000);
    </script>

    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

    <title>Crandell Design</title>
  </head>
  <body class="{{$view_name}}">
    <div id="site-overlay">@include('layouts.logo-circle')</div>
    <div class="site-container">
      @include('layouts.header')
      @yield('content')
      @include('layouts.footer')
      @yield('scripts')
    </div>
    <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
  </body>
</html>