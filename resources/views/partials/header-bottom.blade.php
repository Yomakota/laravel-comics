<section class="header-bottom">
    <div class="container">
        <div class="logo">
            <img src="{{ asset('img/dc-logo.png') }}" alt="">
        </div>
        <nav>
            <ul class="list-menu">
                <li>
                    <a href="#">Characters</a>
                </li>

                <li class="{{ Route::current()->getName() === 'home' ? 'current' : '' }}">
                    <a href="{{ route('home') }}">Comics</a>
                </li>

                <li>
                    <a href="#">Movie</a>
                </li>
                <li>
                    <a href="#">TV</a>
                </li>

                <li>
                    <a href="#">Games</a>
                </li>

                <li>
                    <a href="#">Collectibles</a>
                </li>
                <li>
                    <a href="#">Video</a>
                </li>

                <li>
                    <a href="#">Fans</a>
                </li>

                <li class="{{ Route::current()->getName() === 'news' ? 'current' : '' }}">
                    <a href="{{ route('news') }}">News</a>
                </li>

                <li>
                    <a href="#">Shop</a>
                </li>
            </ul>
        </nav>
        <div class="search">
            <input placeholder='Search' />
        </div>
    </div>
</section>
