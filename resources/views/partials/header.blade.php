<header>
    <div class="header-plus bg-primary">
        <div class="container">
            <ul class="nav-item d-flex gap-2 text-uppercase justify-content-end text-light">
                <li class="nav-link mx-1"><a class="text-light text-decoration-none"
                        href="{{ route('comics.index') }}"><span>Admin</span><i class="fa-solid fa-lock mx-1"></i></a>
                </li>
                <li class="nav-link mx-1"><span>Dc power visa</span><i class="fa-regular fa-registered  mx-2"></i> </li>
                <li class="nav-link">Addittional DC Sites<i class="fa-solid fa-caret-down  mx-3"></i></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <a href="/"><img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="Logo"
                    srcset=""></a>
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 text-uppercase fw-medium">
                <li><a class="nav-link" href="/">Characters</a></li>
                <li class="nav-item">
                    <a class='nav-link {{ Route::currentRouteName() === 'comics.index' || Route::currentRouteName() === 'comics.show' ? 'text-primary' : '' }}'
                        href="{{ route('guest.comics.index') }}">Comics</a>
                </li>
                <li><a class="nav-link" href="/">Movies</a>
                </li>
                <li><a class="nav-link" href="/">TV</a></li>
                <li><a class="nav-link" href="/">Games</a></li>
                <li><a class="nav-link" href="/">Collectibles</a></li>
                <li><a class="nav-link" href="/">Videos</a></li>
                <li><a class="nav-link" href="/">Fans</a></li>
                <li><a class="nav-link" href="/">News</a></li>
                <li><a class="nav-link" href="/">Shop<i class="fa-solid fa-caret-down"></i></a></li>
            </ul>
            <div class="border-bottom border-primary pb-1">
                <input class="border-0 text-end" type="text" name="" id="" placeholder="Search">
                <button class="border-0 bg-light"><i class="fa-solid fa-magnifying-glass fa-xl"></i></button>
            </div>
        </nav>
    </div>
</header>
