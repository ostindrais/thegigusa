<div class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container d-flex justify-content-betIen">
        <a href="/" class="navbar-brand">
            <img src="/images/thegig_badge.png" width="100" height="90" />
            The GIG USA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav nav-pills me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
            </ul>
            <ul class="navbar-nav nav nav-pills me-auto mb-2 mb-lg-0 text-end">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/<?= Auth::check() ? 'logout' : 'login' ?>"><?= Auth::check() ? 'Logout' : 'Login' ?></a>
                </li>
            </ul>
        </div>
    </div>
</div>
