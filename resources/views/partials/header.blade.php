<header>

    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="d-flex justify-content-end">
                        additional menu
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC Comics">
                        </div>

                        <div class="header_navbar">
                            <ul>
                                <li>
                                    <a href="{{ route('homepage') }}">
                                        HOME
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('comics.index') }}">
                                        COMICS
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</header>
