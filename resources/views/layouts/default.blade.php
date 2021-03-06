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
          transition: all .3s ease-in-out;
          -moz-transition: all .3s ease-in-out;
          -webkit-transition: all .3s ease-in-out;
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
    <noscript>
      <style>
        #site-overlay {
          display: none;
        }
      </style>
    </noscript>
    <script>
      // Page Transitions
      function hideSiteOverlay() {
          var element = document.getElementById('site-overlay');
          element.classList.add('loaded');
      }
      function showSiteOverlay(e) {
          var e = window.e || e;
          if ((e.target.tagName !== 'A') || e.target.classList.contains('page-scroll') || e.target.target == '_blank' || e.target.href.includes('mailto:') || e.target.href.includes('tel:'))
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

    <link rel="apple-touch-icon" sizes="57x57" href="{{url('/')}}/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="{{url('/')}}/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{url('/')}}/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="{{url('/')}}/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{url('/')}}/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="{{url('/')}}/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="{{url('/')}}/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{url('/')}}/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{url('/')}}/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{url('/')}}/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{url('/')}}/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="{{url('/')}}/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('/')}}/favicon-16x16.png">
    <link rel="manifest" href="{{url('/')}}/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{url('/')}}/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Hotjar Tracking Code for www.crandelldesign.com -->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:376563,hjsv:5};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
    </script>

    <title>{{isset($title) ? $title:''}}</title>
    <meta name="description" content="{{isset($description) ? $description : ''}}">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-68370021-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-68370021-1');
    </script>
    @yield('head')
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