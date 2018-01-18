<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        @include('layouts.head')
    </head>
    <body>
        <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "Crandell Design",
            "url": "https://www.crandelldesign.com",
            "sameAs": [
                "https://facebook.com/crandelldesign",
                "https://plus.google.com/100599816596951419097",
                "https://twitter.com/crandelldesign"
            ]
        }
        </script>
        <div id="site-overlay">@include('layouts.logo-circle')</div>
        <div class="site-container">
            @include('layouts.nav')
            @yield('content')

            <script type="text/javascript" src="{{ mix('js/default.js') }}"></script>
            @include('layouts.footer')
            @yield('scripts')
        </div>
    </body>

</html>
