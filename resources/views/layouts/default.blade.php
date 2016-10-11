<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        @include('layouts.head')
        {!! Analytics::render() !!}
    </head>
    <body>
        <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "Crandell Design",
            "url": "http://www.crandelldesign.com",
            "sameAs": [
                "http://facebook.com/crandelldesign",
                "https://plus.google.com/100599816596951419097",
                "http://twitter.com/crandelldesign"
            ]
        }
        </script>
        <div class="animsition">
            @include('layouts.nav')
            @yield('content')

            <script type="text/javascript" src="{{ elixir('js/default.js') }}"></script>
            @include('layouts.footer')
            @yield('scripts')
        </div>
    </body>

</html>
