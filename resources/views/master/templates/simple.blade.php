<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        @include('master.templates.header')
    </head>
    <body class="simple" style="{{isset($special_wallpaper)?'background-image:url('.$special_wallpaper.')':''}}">
        <nav class="navbar navbar-fixed-top spy-active" role="navigation" id="topNav">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{url('/')}}">
                        <img src="{{url('/')}}/img/crandell-design-wordmark.svg" alt="Crandell Design" class="logo img-responsive" data-no-retina>
                    </a>
                </div>

            </div><!-- /.container-fluid -->
        </nav>
        <div class="content">
        @yield('body')
        </div> <!-- /content -->
        <footer class="footer">
            <div class="footer-top">
                <div class="container-fluid">
                </div>
            </div>
            <div class="footer-bottom">
                <p>Copyright &copy; {{date("Y")}} Crandell Design. All Rights Reserved.</p>
                <p>Designated trademarks and brands are the property of their respective owners.</p>
                <p>All graphics are created by Matt Crandell.</p>
            </div>
        </footer>

        <script src="{{url('/')}}/js/jquery-2.1.4.min.js"></script>
        <script src="{{url('/')}}/js/bootstrap.min.js"></script>
        <script src="{{url('/')}}/js/imagesloaded.pkgd.min.js"></script>
        <script src="{{url('/')}}/js/masonry.pkgd.min.js"></script>

        <!-- PHP to JS Variables -->
        <script>
            originURL = '{{$_SERVER["REQUEST_URI"]}}';
            requestURL = '{{$_SERVER["REQUEST_URI"]}}';
            domainURL = "{{url('/')}}";
            URLtitle = '{{$title}}';
        </script>
        <script src="{{url('/')}}/js/master.min.js"></script>

        @yield('footercode')

        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-68370021-1', 'auto');
            ga('send', 'pageview');
        </script>
    </body>
    
</html>