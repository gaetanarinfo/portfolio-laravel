<div class="navbar navbar-expand-lg navbar-dark bg-dark">

    <div class="container">

        <a href="/" class="navbar-brand">{{ config('app.name_short') }}</a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#main-navbar" aria-expanded="true">
            <span class="ti-menu"></span>
        </button>

        <div class="collapse navbar-collapse" id="main-navbar">

            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a href="/" class="nav-link font-weight-bold" data-animate="scrolling">Accueil</a>
                </li>

                <li class="nav-item">
                    <a href="/#about" class="nav-link font-weight-bold" data-animate="scrolling">À propos</a>
                </li>

                <li class="nav-item">
                    <a href="/#blog" class="nav-link font-weight-bold" data-animate="scrolling">Blog</a>
                </li>

            </ul>

            <ul class="nav ml-auto">
                <li class="nav-item">
                    <button
                        class="btn btn-fab btn-theme no-shadow text-uppercase font-weight-bold">{{ str_replace('_', '-', app()->getLocale()) }}</button>
                </li>
            </ul>

        </div>

    </div>

</div>
