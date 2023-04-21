<div class="vg-page page-about" id="about">

    <div class="container py-5">

        <div class="row">

            <div class="col-lg-4 py-3">

                <div class="img-place wow fadeInUp">
                    <img src="{{ URL::asset('img/gaetan.jpg') }}"
                        alt="{{ config('app.first_name') }} {{ config('app.last_name') }}">
                </div>

            </div>

            <div class="col-lg-6 offset-lg-1 wow fadeInRight">

                <h1 class="fw-light">{{ config('app.first_name') }} {{ config('app.last_name') }}</h1>

                <h5 class="fg-theme mb-3">{{ config('app.organization') }}</h5>

                <p class="text-muted">{{ config('app.bio') }}</p>

                <ul class="theme-list">
                    <li><b>Localisation :</b> {{ config('app.city') }}</li>
                    <li><b>Age :</b> {{ config('app.age') }}</li>
                    <li><b>Sexe :</b> {{ config('app.genre') }}</li>
                </ul>

                <button id="download-cv" href="{{ URL::asset('documents/cv.pdf') }}"
                    class="btn btn-theme-outline">Télécharger mon CV</button>

            </div>

        </div>

    </div>

    <div class="container py-5">

        <h1 class="text-center fw-normal wow fadeIn">Mes compétences</h1>

        <div class="row py-3">

            <div class="col-md-6">

                <div class="px-lg-3">

                    <h4 class="wow fadeInUp">Compétences en codage</h4>

                    <div class="progress-wrapper wow fadeInUp">
                        <span class="caption">JavaScript + Jquery</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90"
                                aria-valuemin="0" aria-valuemax="100">86%</div>
                        </div>
                    </div>

                    <div class="progress-wrapper wow fadeInUp">
                        <span class="caption">PHP</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100">75%</div>
                        </div>
                    </div>

                    <div class="progress-wrapper wow fadeInUp">
                        <span class="caption">HTML + CSS</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100"
                                aria-valuemin="0" aria-valuemax="100">100%</div>
                        </div>
                    </div>

                    <div class="progress-wrapper wow fadeInUp">
                        <span class="caption">MySql - MariaDb</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="65"
                                aria-valuemin="0" aria-valuemax="100">65%</div>
                        </div>
                    </div>

                    <div class="progress-wrapper wow fadeInUp">
                        <span class="caption">Linux</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="70"
                                aria-valuemin="0" aria-valuemax="100">70%</div>
                        </div>
                    </div>

                    <div class="progress-wrapper wow fadeInUp">
                        <span class="caption">NodeJs</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50"
                                aria-valuemin="0" aria-valuemax="100">50%</div>
                        </div>
                    </div>

                    <div class="progress-wrapper wow fadeInUp">
                        <span class="caption">Laravel + Symphonie</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 20%;" aria-valuenow="20"
                                aria-valuemin="0" aria-valuemax="100">20%</div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="col-md-6">

                <div class="px-lg-3">

                    <h4 class="wow fadeInUp">Compétences en conception</h4>

                    <div class="progress-wrapper wow fadeInUp">
                        <span class="caption">UI / UX Design</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100"
                                aria-valuemin="0" aria-valuemax="100">100%</div>
                        </div>
                    </div>

                    <div class="progress-wrapper wow fadeInUp">
                        <span class="caption">Création de sites web</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100"
                                aria-valuemin="0" aria-valuemax="100">100%</div>
                        </div>
                    </div>

                    <div class="progress-wrapper wow fadeInUp">
                        <span class="caption">Création de logos</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 10%;" aria-valuenow="10"
                                aria-valuemin="0" aria-valuemax="100">10%</div>
                        </div>
                    </div>

                    <div class="progress-wrapper wow fadeInUp">
                        <span class="caption">Gimp + Photoshop</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 35%;" aria-valuenow="35"
                                aria-valuemin="0" aria-valuemax="100">35%</div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="container pt-5">

        <div class="row">

            <div class="col-md-6 wow fadeInRight">

                <h2 class="fw-normal">Études scolaires</h2>

                <ul class="timeline mt-4 pr-md-5">

                    <li>
                        <div class="title">2010</div>
                        <div class="details">
                            <h5>Développeur web et web mobile (Titre Professionnel niv VI)</h5>
                            <small class="fg-theme">ARINFO, Le Mans</small>
                        </div>
                    </li>

                    <li>
                        <div class="title">2008</div>
                        <div class="details">
                            <h5>Obtention du CFG</h5>
                            <small class="fg-theme">Collège de Ballon 72</small>
                        </div>
                    </li>

                </ul>

            </div>

            <div class="col-md-6 wow fadeInRight" data-wow-delay="200ms">

                <h2 class="fw-normal">Expériences professionnel</h2>

                <ul class="timeline mt-4 pr-md-5">

                    <li>

                        <div class="title">16 JUIN 2021 AU 6 FÉVRIER 2023</div>

                        <div class="details">

                            <h5>Intégrateur PHP/JS Front et Back</h5>

                            <small class="fg-theme">1984 AGENCY</small>

                            <ul class="timeline mt-4 pr-md-5">

                                <li>Création des tables MySQL avec PHPMyAdmin.</li>

                                <li>Création des jointures sous PHP pour relier différentes tables
                                    entre elle, et pour éviter qu'une table soit trop chargée.</li>

                                <li>Récupération des data en BACK-END pour que le site
                                    internet soit dynamique, et plus facile à gérer.</li>

                                <li>Suppression et mise à jour des différentes tables et data,
                                    selon la demande de l'entreprise.</li>

                                <li>Mise en place d'un système de paiement STRIPE et Paypal,
                                    avec JavaScript et Php pour l'entreprise Centre Services.</li>

                                <li>Création des différentes pages dynamique et statique selon
                                    la demande de 1984, et avec une maquette définie.</li>

                                <li>Création de différentes pages pour l'application de 1984
                                    Agency, notamment gestion des data dynamique sous forme
                                    de graphique avec ChartJS, ou de tableau.</li>

                                <li>Maintenance et correction des bugs sur l'application web.</li>

                                <li>Génération de sitemap xml avec un générateur sur internet.</li>

                                <li>Liaison Facebook et le système de publication des actualités
                                    pour l'entreprise Centre Services pour éviter de créer des
                                    posts à la main, avec PHP et Composer.</li>

                            </ul>

                        </div>

                    </li>

                </ul>

            </div>

        </div>

    </div>

</div>

<div class="vg-page page-service">

    <div class="container">

        <div class="text-center wow fadeInUp">
            <div class="badge badge-subhead">Services</div>
        </div>

        <h1 class="fw-normal text-center wow fadeInUp">Que puis-je faire ?</h1>

        <div class="row mt-5">

            <div class="col-md-6 col-lg-4 col-xl-3">

                <div class="card card-service wow fadeInUp">

                    <div class="icon">
                        <span class="ti-paint-bucket"></span>
                    </div>

                    <div class="caption">
                        <h4 class="fg-theme">Création de sites</h4>
                        <p>Des sites internet sur mesure avec un design de qualité.</p>
                    </div>

                </div>

            </div>

            <div class="col-md-6 col-lg-4 col-xl-3">

                <div class="card card-service wow fadeInUp">

                    <div class="icon">
                        <span class="ti-search"></span>
                    </div>

                    <div class="caption">
                        <h4 class="fg-theme">SEO</h4>
                        <p>Avec un peu de connaissance en SEO je peux apporter ma graine pour une visibilité
                            parfaite.</p>
                    </div>

                </div>

            </div>

            <div class="col-md-6 col-lg-4 col-xl-3">

                <div class="card card-service wow fadeInUp">

                    <div class="icon">
                        <span class="ti-vector"></span>
                    </div>

                    <div class="caption">
                        <h4 class="fg-theme">Conception UI/UX</h4>
                        <p>Je peux construire des sites internet, à la main ou à base de template comme (Bootstrap).
                        </p>
                    </div>

                </div>

            </div>

            <div class="col-md-6 col-lg-4 col-xl-3">

                <div class="card card-service wow fadeInUp">

                    <div class="icon">
                        <span class="ti-desktop"></span>
                    </div>

                    <div class="caption">
                        <h4 class="fg-theme">Développement</h4>
                        <p>Je connais quelques technologies et pourrait vous apporter mes connaissances et ma
                            logique.</p>
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<div class="vg-page page-funfact" style="background-image: url('{{ URL::asset('img/bg_banner.jpg') }}');">

    <div class="container">

        <div class="row section-counter">

            <div class="col-md-6 col-lg-6 py-4 wow fadeIn">
                <h1 class="number" data-number="14">14</h1>
                <span>Projet terminé</span>
            </div>

            <div class="col-md-6 col-lg-6 py-4 wow fadeIn">
                <h1 class="number" data-number="2">2</h1>
                <span>Projet en cours</span>
            </div>

        </div>

    </div>

</div>

<!-- Portfolio page -->
<div class="vg-page page-portfolio" id="portfolio">

    <div class="container">

        <div class="text-center wow fadeInUp">
            <div class="badge badge-subhead">Portfolio</div>
        </div>

        <h1 class="text-center fw-normal wow fadeInUp">Voir mon travail</h1>

        <div class="filterable-button py-3 wow fadeInUp" data-toggle="selected">
            <button class="btn btn-theme-outline selected" data-filter="*">Tous</button>
            <button class="btn btn-theme-outline" data-filter=".android">Android</button>
            <button class="btn btn-theme-outline" data-filter=".template">Site internet</button>
            <button class="btn btn-theme-outline" data-filter=".ios">Ios</button>
        </div>

        <div class="gridder my-3">



        </div>
        <!-- End gridder -->

    </div>

</div>
<!-- End Portfolio page -->

<!-- Blog -->
<div class="vg-page page-blog" id="blog">

    <div class="container">

        <div class="text-center">

            <div class="badge badge-subhead wow fadeInUp">Blog</div>
        </div>

        <h1 class="text-center fw-normal wow fadeInUp">Dernières actualités</h1>

        <div class="row post-grid" id="blog-grid">

        </div>

    </div>

</div>
<!-- End blog -->

<!-- Contact -->
<div class="vg-page page-contact">

    <div class="container-fluid">

        <div class="text-center wow fadeInUp">
            <div class="badge badge-subhead">Contact</div>
        </div>

        <h1 class="text-center fw-normal wow fadeInUp">Me contacter</h1>

        <div class="row py-5 form-contact">

            <div class="ml-5 col-lg-6 px-0 wow zoomIn">
                <div class="vg-maps" id="map">

                </div>
            </div>

            <div class="col-lg-5">

                <div class="loader-form hidden">
                    <img src="{{ URL::asset('img/loader.svg') }}" alt="">
                </div>

                <form id="submit-contact" action="{{ route('contact.create') }}" method="POST"
                    class="vg-contact-form">

                    <input type="hidden" name="token" value="{{ csrf_token() }}" />

                    <div class="form-row">

                        <div class="col-12 mt-3 wow fadeInUp">
                            <input class="form-control @error('name') is-invalid @enderror" type="text"
                                name="name" placeholder="Votre nom et prénom">

                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                            <span class="error-text text-danger name_error"></span>

                        </div>

                        <div class="col-6 mt-3 wow fadeInUp">
                            <input class="form-control @error('email') is-invalid @enderror" type="text"
                                name="email" value="{{ old('email') }}" placeholder="Adresse email">

                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                            <span class="error-text text-danger email_error"></span>

                        </div>

                        <div class="col-6 mt-3 wow fadeInUp">
                            <input class="form-control @error('sujet') is-invalid @enderror" type="text"
                                name="sujet" placeholder="Sujet">

                            @error('sujet')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                            <span class="error-text text-danger sujet_error"></span>

                        </div>

                        <div class="col-12 mt-3 wow fadeInUp">
                            <textarea class="form-control @error('message') is-invalid @enderror" name="message" rows="6"
                                placeholder="Entrez votre message ici..">{{ old('message') }}</textarea>

                            @error('message')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                            <span class="error-text text-danger message_error"></span>

                        </div>

                        <button type="submit" class="btn btn-theme mt-3 wow fadeInUp ml-1">Envoyer</button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>
<!-- End Contact -->

<!-- Toast -->
<div aria-live="polite" aria-atomic="true" style="position: relative;">

    <div class="toast toast-form-contact" style="position: fixed;bottom: 5rem;right: 1rem;z-index: 999;">

        <div class="toast-header">

            <div class="svg"></div>

            <strong class="title mr-auto"></strong>

            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>

        <div class="toast-body">

        </div>
    </div>

</div>

<!-- Map -->

<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
    integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>

<script>
    var map = L.map('map').setView([{{ config('app.latitude') }}, {{ config('app.longitude') }}], 13),
        adresse = "125 avenue Félix Geneslay<br/>72100 Le Mans";

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

    L.marker([{{ config('app.latitude') }}, {{ config('app.longitude') }}]).addTo(map)
        .bindPopup(adresse)
        .openPopup();
</script>