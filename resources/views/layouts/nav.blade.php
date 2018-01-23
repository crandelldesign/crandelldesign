<nav class="navbar fixed-top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <a href="{{url('/')}}" class="logo-container">
                    @include('layouts.logo')
                </a>
            </div>
            <div class="col-sm-6">
                <ul class="nav">
                    <li><a href="{{url('/portfolio')}}">Portfolio</a></li>
                    <li><a class="{{(isset($active_page) && $active_page == 'home')?'page-scroll':'animsition-link'}}" href="{{url('/#services')}}" data-toggle="collapse" data-target="#main-menu-collapse">Services</a></li>
                    <li><a class="{{(isset($active_page) && $active_page == 'home')?'page-scroll':'animsition-link'}}" href="{{url('/#about')}}" data-toggle="collapse" data-target="#main-menu-collapse">About</a></li>
                    <li><a class="{{(isset($active_page) && $active_page == 'home')?'page-scroll':'animsition-link'}}" href="{{url('/#contact')}}" data-toggle="collapse" data-target="#main-menu-collapse">Contact</a></li>
                    <li><a class="{{(isset($active_page) && $active_page == 'home')?'page-scroll':'animsition-link'}}" href="{{url('/#blog')}}" data-toggle="collapse" data-target="#main-menu-collapse">Blog</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
