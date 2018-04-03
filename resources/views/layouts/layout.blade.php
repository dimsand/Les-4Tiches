<!DOCTYPE html>
<html lang="fr">

<head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    {{--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-116543519-1"></script>--}}
    {{--<script>--}}
        {{--window.dataLayer = window.dataLayer || [];--}}
        {{--function gtag(){dataLayer.push(arguments);}--}}
        {{--gtag('js', new Date());--}}
        {{--gtag('config', 'UA-116543519-1');--}}
    {{--</script>--}}

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Nous participerons, sous le nom d'équipage Les 4Tiches, le Raid 4L Trophy, du 21 avril au 3 mars 2019">
    <meta name="author" content="Dimitri Sandron">
    <meta name="keywords" content="les 4tiches, 4tiches, les fortiches, fortiches, 4ltrophy, 4L Trophy, Raid humanitaire, course, Maroc" />
    <meta name="robots" content="index,follow" />

    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <title>Les 4Tiches - @yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/landing-page.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/parallax.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    @yield('stylesheet')

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand brand color_orange" href="{{ route('home') }}"><span class="color_red">L</span>es <span class="color_red">4</span>Tiches</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample07">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item <?= ((Route::currentRouteName() == 'home') ? 'active' : '') ?>">
                    <a class="nav-link" href="{{ route('home') }}">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item <?= ((Route::currentRouteName() == 'equipage') ? 'active' : '') ?>">
                    <a class="nav-link" href="{{ route('equipage') }}">L'équipage</a>
                </li>
                <li class="nav-item <?= ((Route::currentRouteName() == 'financement') ? 'active' : '') ?>">
                    <a class="nav-link" href="{{ route('financement') }}">Le financement</a>
                </li>
                <li class="nav-item <?= ((Route::currentRouteName() == 'sponsors') ? 'active' : '') ?>">
                    <a class="nav-link" href="{{ route('sponsors') }}">Nos sponsors</a>
                </li>
                <li class="nav-item <?= ((Route::currentRouteName() == 'projet') ? 'active' : '') ?>">
                    <a class="nav-link" href="{{ route('projet') }}">Le projet</a>
                </li>
                <li class="nav-item <?= ((Route::currentRouteName() == 'news') ? 'active' : '') ?>">
                    <a class="nav-link" href="{{ route('news') }}">Les news</a>
                </li>
            </ul>
            <div class="my-2 my-md-0 text-light text-uppercase compte_rebours">
                <i class="fa fa-flag-checkered mr-2" data-toggle="tooltip" data-placement="bottom" title="Départ de la course dans"></i>
                <span class="badge badge-light jours" data-toggle="tooltip" data-placement="bottom" title="Jours">XX</span> : <!-- JOURS -->
                <span class="badge badge-light heures" data-toggle="tooltip" data-placement="bottom" title="Heures">XX</span> : <!-- HEURES -->
                <span class="badge badge-light minutes" data-toggle="tooltip" data-placement="bottom" title="Minutes">XX</span> : <!-- MINUTES -->
                <span class="badge badge-light secondes" data-toggle="tooltip" data-placement="bottom" title="Secondes">XX</span> <!-- SECONDES -->
            </div>
        </div>
    </div>
</nav>

@yield('content')

<!-- Call to Action -->
<section class="call-to-action text-white text-center">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <h2 class="mb-4">Prêt pour faire partie de l'aventure ?</h2>
                <h4 class="mb-5">Recevez notre dossier de sponsoring et participez au financement !</h4>
            </div>
            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto mt-2">
                <form>
                    <div class="form-row">
                        <div class="col-12 col-md-12 mb-2 mb-md-2">
                            <input type="email" class="form-control form-control-lg" placeholder="Entrer votre nom">
                        </div>
                        <div class="col-12 col-md-12 mb-2 mb-md-2">
                            <input type="email" class="form-control form-control-lg" placeholder="Entrer votre email">
                        </div>
                        <div class="col-12 col-md-12 mb-2 mb-md-2">
                            <button type="submit" class="btn btn-block btn-lg btn-warning">Participez !</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
                <ul class="list-inline mb-2">
                    <li class="list-inline-item">
                        <a href="#">A propos</a>
                    </li>
                    <li class="list-inline-item">&sdot;</li>
                    <li class="list-inline-item">
                        <a href="{{ route('contact') }}">Contact</a>
                    </li>
                    <li class="list-inline-item">&sdot;</li>
                    <li class="list-inline-item">
                        <a href="{{ route('mentions_legales') }}">Mentions légales</a>
                    </li>
                </ul>
                <p class="text-muted small mb-4 mb-lg-0">&copy; Les 4Tiches 2018. All Rights Reserved.</p>
            </div>
            <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item mr-3">
                        <a href="https://www.facebook.com/Les4Tiches/">
                            <i class="fa fa-facebook fa-2x fa-fw"></i>
                        </a>
                    </li>
                    {{--<li class="list-inline-item mr-3">--}}
                        {{--<a href="#">--}}
                            {{--<i class="fa fa-twitter fa-2x fa-fw"></i>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="list-inline-item">--}}
                        {{--<a href="#">--}}
                            {{--<i class="fa fa-instagram fa-2x fa-fw"></i>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                </ul>
            </div>
        </div>
    </div>
</footer>

<a href="#0" class="cd-top">Top</a>

<script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/compte_rebours.js') }}"></script>

<script>
    initCompteRebours($("#navbarsExample07"));

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });

    $(document).ready(function() {
        $(window).on('scroll', function() {
            if (Math.round($(window).scrollTop()) > 100) {
                $('.navbar').addClass('scrolled');
            } else {
                $('.navbar').removeClass('scrolled');
            }
        });
    });

    jQuery(document).ready(function($){
        // browser window scroll (in pixels) after which the "back to top" link is shown
        var offset = 300,
            //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
            offset_opacity = 1200,
            //duration of the top scrolling animation (in ms)
            scroll_top_duration = 700,
            //grab the "back to top" link
            $back_to_top = $('.cd-top');

        //hide or show the "back to top" link
        $(window).scroll(function(){
            ( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
            if( $(this).scrollTop() > offset_opacity ) {
                $back_to_top.addClass('cd-fade-out');
            }
        });

        //smooth scroll to top
        $back_to_top.on('click', function(event){
            event.preventDefault();
            $('body,html').animate({
                    scrollTop: 0 ,
                }, scroll_top_duration
            );
        });

    });

</script>

@yield('javascript')

</body>

</html>
