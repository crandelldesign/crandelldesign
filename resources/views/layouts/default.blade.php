<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        @include('layouts.head')
        {!! Analytics::render() !!}
    </head>
    <body>
        <div class="animsition">
            <div class="container-fluid page">
                <div class="content">
                    @yield('content')
                </div>
            </div>

            <script type="text/javascript" src="{{ elixir('js/default.js') }}"></script>
            @include('layouts.footer')
            @yield('scripts')
        </div>
    </body>
    
</html>