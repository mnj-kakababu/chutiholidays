<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
    <div class="container-fluid">
        <div class="navbar-wrapper">
            <a class="navbar-brand" href="#">  @yield('title') </a>


        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end">

                <ul class="navbar-nav">
                        <li class="nav-item">
                                <a class="navbar-brand" href="#"> Hello, {{ Auth::user()->name }} </a>
                        </li>
                </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#pablo">
                        <i class="material-icons">dashboard</i>
                        <p class="d-lg-none d-md-block">
                            Stats
                        </p>
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">person</i>
                        <p class="d-lg-none d-md-block">
                            Account
                        </p>
                    </a>

                </li>
                <li>
                    <a href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <i class="material-icons">exit_to_app</i>
                        <p class="d-lg-none d-md-block">Log Out</p>
                    </a>
                    <form id="logout-form" method="POST" action="{{route('logout')}}" style="display: none">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
