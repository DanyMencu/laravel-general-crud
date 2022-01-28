<header>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand col-2" href="{{ route('home') }}">
                <img src="{{ asset('images/Logo.png') }}" alt="GameStop logo" class="img-fluid">
            </a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                    <a class="nav-link" href="{{ route('games.index') }}">Games List</a>
                </div>
            </div>
        </div>
    </nav>
</header>