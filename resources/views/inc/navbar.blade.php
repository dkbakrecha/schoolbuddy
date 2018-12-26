<!-- Navigation -->
<nav class="navbar homepage-header" role="navigation">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-3 color-patch yellow"></div>
            <div class="col-xs-3 color-patch blue"></div>
            <div class="col-xs-3 color-patch red"></div>
            <div class="col-xs-3 color-patch turquoise"></div>
        </div>
    </div>

    <div class="header-topbar">
        <div class="container">
            <div class="row">
                <div class="contact-info">
                    <ul class="nav navbar-nav">
                        <li><i class="fa fa-phone"></i> +91 00011 00011</li>
                        <li><i class="fa fa-envelope-o"></i> support@schoolbuddy.in</li>
                    </ul>
                </div>

                <div class="social-icon-list">
                    <ul class="nav navbar-nav pull-right">
                        <li>
                            <a class="gl-fb" href="https://www.facebook.com/pages/Room247/1456229788028092" target="_BLANK">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>

                        <li>
                            <a class="gl-twitter" href="https://plus.google.com/106357602084283264523/about" target="_BLANK">
                                <i class="fa fa-google"></i>
                            </a>
                        </li>                       
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ URL::to('/') }}/images/SBM-Logo.png" class="cms-icon" alt="{{ config('app.name', 'Laravel') }}">  
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="{{ request()->is('about-us') ? 'active' : '' }}">
                    <a href="{{ url('/about-us') }}">About</a>
                </li>
                <li class="{{ request()->is('admission') ? 'active' : '' }}">
                    <a href="{{ url('/admission') }}">Admission</a>
                </li>
                <li class="{{ request()->is('events') ? 'active' : '' }}">
                    <a href="{{ url('/events') }}">Event</a>
                </li>
                <li class="{{ request()->is('galleries') ? 'active' : '' }}">
                    <a href="{{ url('/galleries') }}">Gallery</a>
                </li>
                <li class="{{ request()->is('contact-us') ? 'active' : '' }}">
                    <a href="{{ url('/contact-us') }}">Contact</a>
                </li>

                <!-- Authentication Links -->
                @if (Auth::guest())
                <li><a class="btn btn-primary green" href="{{ route('login') }}">Login</a></li>
                @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }} <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>

                @endif
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>