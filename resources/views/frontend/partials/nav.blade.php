<nav class="navbar sticky-top navbar-expand-lg bg-light">
    <div class="container">
        <a class="navbar-brand" href="#"><span class="span1">Laravel</span> <span class="span2">Kits</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link same {{ Route::is('home') ? 'active' : '' }}"
                               href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link same {{ Route::is('kits') ? 'active' : '' }} {{ Route::is('kit.code.show') ? 'active' : '' }}"
                               href="{{ route('kits') }}">Kits</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link same {{ Route::is('about') ? 'active' : '' }}"
                               href="{{ route('about') }}">About</a>
                        </li>
                    </ul>
                </div>
                <div>
                    @if(Route::is('kits'))
                    <form class="d-flex input-group" id="searchfrm" role="search">
                        <input class="form-control search" name="ajax_title" type="search" id="search"
                               placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
{{--                    @else--}}
{{--                        <form action="{{ route('search.load.code') }}" method="POST" class="d-flex input-group" role="search">--}}
{{--                            <input class="form-control search" name="title" type="search"--}}
{{--                                   placeholder="Search" aria-label="Search">--}}
{{--                            <button class="btn btn-outline-success" type="submit">Search</button>--}}
{{--                        </form>--}}
                    @endif
                </div>
        </div>
    </div>
</nav>
