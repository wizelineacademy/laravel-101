<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <a class="navbar-brand" href="#">Laravel 101 - Pokemon</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://github.com/wizelineacademy/blockchain101">Code Repository</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://pokeapi.co/">Pokemon API</a>
            </li>
            @if (Auth::check())
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard">User Dashboard</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/register">Register</a>
                </li>
            @endif
        </ul>
    </div>
</nav>
