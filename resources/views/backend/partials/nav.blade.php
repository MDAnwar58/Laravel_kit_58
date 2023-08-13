<nav class="navbar sticky-top navbar-expand-lg bg-light">
    <div class="container">
        <a class="navbar-brand" href="#"><span class="span1">Admin</span> <span class="span2">Panel</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse d-flex justify-content-end navbar-collapse" id="navbarSupportedContent">
            <div>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="btn btn-outline-dark btn-sm"
                        href="{{ route('admin.logout') }}">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
