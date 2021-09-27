<div class="preloader">
    <div class="preloader-img">
        <span class="loading-animation animate-flicker"><img src="{{asset('img/loading.GIF')}}" alt="loading" /></span>
    </div>
</div>

<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top fadeInDown" data-wow-delay="0.2s">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand smoothie" href="index.html">THE <span class="theme-accent-color">GRILL</span></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="main-navigation">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#about" class="page-scroll">{{ $navbar[0]->contenu }}</a></li>  
                <li><a href="#about" class="page-scroll">{{ $navbar[1]->contenu }}</a></li>    
                <li><a href="#the-menu" class="page-scroll">{{ $navbar[2]->contenu }}</a></li>
                <li><a href="#about" class="page-scroll">{{ $navbar[3]->contenu }}</a></li>                 
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">{{ $navbar[4]->contenu }} <span class="pe-7s-angle-down"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="404.html">404</a></li>
                    </ul>
                </li>
                <li><a href="#search"><i class="fa fa-search"></i></a></li>
                @auth
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('backoffice') }}">Dashboard</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        {{-- LOGOUT --}}
                        <form method="POST" style="margin-top: 22px " class="nav-link py-3 px-0 px-lg-3 rounded" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </li>
                @else
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('login') }}">Log in</a>
                    </li>

                        @if (Route::has('register'))

                            <li class="nav-item mx-0 mx-lg-1">
                                <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('register') }}">Register</a>
                            </li>
                        @endif

@endauth
            </ul>

        </div>
        <!-- /.navbar-collapse -->         

    </div>
    <!-- /.container-fluid -->
</nav>

<div id="search-wrapper">
    <button type="button" class="close">×</button>
    <form>
        <input type="search" value="" placeholder="Enter Search Term" />
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>