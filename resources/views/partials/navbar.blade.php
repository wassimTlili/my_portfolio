<nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll" href="#page-top">
            <img src="{{ asset('img/LOGO.png') }}" alt="Logo" width="70px" height="60px">
        </a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
            aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link js-scroll {{ Request::is('/') ? 'active' : '' }}" href="{{ url('#home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll {{ Request::is('partials.about') ? 'active' : '' }}" href="{{ url('#about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll {{ Request::is('services') ? 'active' : '' }}" href="{{ url('#service') }}">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll {{ Request::is('partials.work') ? 'active' : '' }}" href="{{ url('#work') }}">Work</a>
                </li>
                
            </ul>
        </div>
    </div>
</nav>
