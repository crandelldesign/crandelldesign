<nav class="navbar navbar-fixed-top" id="main-menu">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand animsition-link" href="{{url('/')}}"><img src="{{url('/img/crandell-design-wordmark.svg')}}" alt="Crandell Design" class="img-responsive"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="main-menu-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a class="animsition-link" href="{{url('/portfolio')}}" data-toggle="collapse" data-target="#main-menu-collapse">Portfolio</a></li>
                <li><a class="{{(isset($active_page) && $active_page == 'home')?'page-scroll':'animsition-link'}}" href="{{url('/#services')}}" data-toggle="collapse" data-target="#main-menu-collapse">Services</a></li>
                <li><a class="{{(isset($active_page) && $active_page == 'home')?'page-scroll':'animsition-link'}}" href="{{url('/#about')}}" data-toggle="collapse" data-target="#main-menu-collapse">About</a></li>
                <li><a class="{{(isset($active_page) && $active_page == 'home')?'page-scroll':'animsition-link'}}" href="{{url('/#contact')}}" data-toggle="collapse" data-target="#main-menu-collapse">Contact</a></li>
                <li><a class="{{(isset($active_page) && $active_page == 'home')?'page-scroll':'animsition-link'}}" href="{{url('/#blog')}}" data-toggle="collapse" data-target="#main-menu-collapse">Blog</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>