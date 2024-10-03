<header>
    <section class="top_header_bg">

        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="top_header_menu">

                        <span>
                            <a href="#">DC POWER VISA</a>
                        </span>

                        <span class="ps-5 dropdown">
                            <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                ADDITIONAL DC SITES
                            </a>

                            <ul class="dropdown-menu">
                                <li><a href="#">Link 1</a></li>
                                <li><a href="#">Link 2</a></li>
                                <li><a href="#">Link 3</a></li>
                            </ul>
                        </span>

                    </div>

                </div>
            </div>
        </div>
    </section>


    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="d-flex justify-content-between align-items-center py-4">

                    <div class="header_logo">

                        <img class="logo_img" src="{{ Vite::asset('public/dc-logo.png') }}" alt="DC Comics">

                    </div>

                    <div class="header_navbar">

                        <ul>
                            <li>
                                <a href="{{ route('homepage') }}"
                                    class="{{ Request::routeIs('homepage') ? 'active' : '' }}">
                                    CHARACTERS
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('comics.index') }}"
                                    class="{{ Request::routeIs('comics.*') ? 'active' : '' }}">
                                    COMICS
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('homepage') }}">
                                    MOVIES
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('homepage') }}">
                                    TV
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('homepage') }}">
                                    GAMES
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('homepage') }}">
                                    COLLECTIBLES
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('homepage') }}">
                                    VIDEOS
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('homepage') }}">
                                    FANS
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('homepage') }}">
                                    NEWS
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('homepage') }}">
                                    SHOP
                                </a>
                            </li>
                            <li>
                                <div class="search_bar">

                                    <input type="search" placeholder="Search">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>

            </div>
        </div>
    </div>

</header>
