<header>
    <div class="header-plus">
        <div class="container">
            <ul>
                <li>Dc power visa<i class="fa-regular fa-registered"></i> </li>
                <li>Addittional DC Sites<i class="fa-solid fa-caret-down"></i></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <nav>
            <a href="/"><img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="Logo"
                    srcset=""></a>
            <ul>
                <li><a href="/">Characters</a></li>
                <li class="{{ Route::currentRouteName() === 'comics.index' || 'comics.show' ? 'active' : '' }}"><a
                        href="{{ Route('comics.index') }}">Comics</a></li>
                <li><a href="/">Movies</a></li>
                <li><a href="/">TV</a></li>
                <li><a href="/">Games</a></li>
                <li><a href="/">Collectibles</a></li>
                <li><a href="/">Videos</a></li>
                <li><a href="/">Fans</a></li>
                <li><a href="/">News</a></li>
                <li><a href="/">Shop<i class="fa-solid fa-caret-down"></i></a></li>
            </ul>
            <div>
                <input type="text" name="" id="" placeholder="Search">
                <button><i class="fa-solid fa-magnifying-glass fa-xl"></i></button>
            </div>
        </nav>
    </div>
</header>
