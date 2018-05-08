<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @if( env('APP_ENV') == 'production' )
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116543519-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-116543519-1');
        </script>
    @endif

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Nous sommes deux étudiants, Rémi Sany et Dimitri Sandron. Nous participerons, sous le nom d'équipage Les 4Tiches, au Raid 4L Trophy, du 21 février au 3 mars 2019">
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

    <title>Les 4Tiches - @yield('title') - Equipage 0594 au 4L Trophy 2019 - Rémi Sany & Dimitri Sandron</title>

    <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fonts/Lato_font.css') }}" rel="stylesheet">

    <link href="{{ asset('css/landing-page.min.css') }}?v={{ time() }}" rel="stylesheet">
    <link href="{{ asset('css/parallax.css') }}?v={{ time() }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}?v={{ time() }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}?v={{ time() }}" rel="stylesheet">

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
                <li class="nav-item <?= ((Route::currentRouteName() == 'projet') ? 'active' : '') ?>">
                    <a class="nav-link" href="{{ route('projet') }}">Le projet</a>
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
                <li class="nav-item <?= ((Route::currentRouteName() == 'news') ? 'active' : '') ?>">
                    <a class="nav-link" href="{{ route('news') }}">Les news</a>
                </li>
                <li class="nav-item <?= ((Route::currentRouteName() == 'contact') ? 'active' : '') ?>">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
            <div class="my-2 my-md-0 text-light text-uppercase compte_rebours">
                <i class="fa fa-flag-checkered mr-2" data-toggle="tooltip" data-placement="bottom" title="Départ de la course dans"></i>
                <span class="badge badge-light jours" data-toggle="tooltip" data-placement="bottom" title="Jours">J-XX</span> <!-- JOURS -->
                {{--<span class="badge badge-light heures" data-toggle="tooltip" data-placement="bottom" title="Heures">XX</span> : <!-- HEURES -->--}}
                {{--<span class="badge badge-light minutes" data-toggle="tooltip" data-placement="bottom" title="Minutes">XX</span> : <!-- MINUTES -->--}}
                {{--<span class="badge badge-light secondes" data-toggle="tooltip" data-placement="bottom" title="Secondes">XX</span> <!-- SECONDES -->--}}
                <button class="navbar-toggler float-right d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon-cross"><i class="fa fa-times"></i></span>
                </button>
            </div>
        </div>
    </div>
</nav>

@yield('content')

<div class="jumbotron paral paralsec3 text-white text-center">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="col-xl-12 mx-auto">
                    <h2 class="mb-4">Prêt pour faire partie de l'aventure ?</h2>
                    <h4 class="lead mb-5">Recevez notre dossier de sponsoring et participez au financement !</h4>
                </div>
                <div class="col-md-12 col-lg-9 col-xl-9 mx-auto mt-2">
                    <form id="contactMeForm">
                        <div class="form-row">
                            <div class="col-12 col-md-12 mb-2 mb-md-2">
                                <input type="text" name="name" class="form-control form-control-lg" placeholder="Entrer votre nom">
                            </div>
                            <div class="col-12 col-md-12 mb-2 mb-md-2">
                                <input type="email" name="email" class="form-control form-control-lg" placeholder="Entrer votre email">
                            </div>
                            <div class="col-12 col-md-12 mb-2 mb-md-2">
                                <button type="submit" id="contactMeSubmit" class="btn btn-block btn-lg btn-warning"><span class="loader"></span>Nous contacter !</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-12 col-lg-4 mt-5 mt-lg-2">
                <div class="col-xl-12 mx-auto">
                    <p class="mb-4">Ou via notre programme de financement participatif</p>
                </div>
                <div class="col-md-12 col-lg-9 col-xl-9 mx-auto mt-2">
                    {!! Html::image('img/helloasso-logo-couleurs-2015.png', 'Amitié', array('class' => 'logo_helloasso mb-3')) !!}
                    <a id="btn_je_donne_botton" target="_blank" href="https://www.helloasso.com/associations/les-4tiches/collectes/participation-au-raid-4l-trophy" class="btn btn-lg btn-success big_btn mt-3">Je fais un don !</a>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="footer bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-center text-lg-left my-auto">
                <ul class="list-inline mb-2">
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
            <div class="col-lg-6 text-center text-lg-right my-auto">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item mr-3">
                        <a href="https://www.facebook.com/Les4Tiches/">
                            <i class="fa fa-facebook fa-2x fa-fw"></i>
                        </a>
                    </li>
                    <li class="list-inline-item mr-3">
                        <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FLes4Tiches%2F&width=79&layout=button_count&action=like&size=small&show_faces=true&share=false&height=21&appId" width="79" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<a href="#0" class="cd-top">Top</a>

<script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/highcharts.js') }}"></script>
<script src="{{ asset('js/compte_rebours.js') }}?v={{ time() }}"></script>
<script src="{{ asset('js/alertify.js') }}"></script>

<script>
    $.fn.extend({
        animateCss: function(animationName, callback) {
            const animationEnd = (function(el) {
                const animations = {
                    animation: 'animationend',
                    OAnimation: 'oAnimationEnd',
                    MozAnimation: 'mozAnimationEnd',
                    WebkitAnimation: 'webkitAnimationEnd',
                };

                for (let t in animations) {
                    if (el.style[t] !== undefined) {
                        return animations[t];
                    }
                }
            })(document.createElement('div'));

            this.addClass('animated ' + animationName).one(animationEnd, function() {
                $(this).removeClass('animated ' + animationName);

                if (typeof callback === 'function') callback();
            });

            return this;
        },
    });

    $('#btn_je_donne_botton').hover(function() {
        $(this).animateCss('tada');
    });

    $(document).on('click', 'a[href^="#"]', function (event) {
        event.preventDefault();

        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 500);
    });

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
        const offset = 300,
            offset_opacity = 1200,
            scroll_top_duration = 700,
            $back_to_top = $('.cd-top');

        $(window).scroll(function(){
            ( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
            if( $(this).scrollTop() > offset_opacity ) {
                $back_to_top.addClass('cd-fade-out');
            }
        });

        $back_to_top.on('click', function(event){
            event.preventDefault();
            $('body,html').animate({
                    scrollTop: 0 ,
                }, scroll_top_duration
            );
        });

    });

    $('#contactMeForm').submit(function(e){
        e.preventDefault();
        $('#contactMeSubmit').attr("disabled", true);
        $('#contactMeSubmit span.loader').html('<img style="height: 30px;" src="img/Spinner-1s-200px.gif">');
        const $form = $('#contactMeForm');
        const data = {
            "name": $form.find('[name="name"]').val(),
            "email": $form.find('[name="email"]').val(),
            "_token": "{{ csrf_token() }}"
        };
        $.ajax({
            type: "POST",
            url: "{{ route('contactMe') }}",
            data: data,
            // contentType: "json"
        }).done(function( json ) {
            $('#contactMeSubmit span.loader').html('');
            $('#contactMeSubmit').removeAttr("disabled");
            $form.find('[name="name"]').val('');
            $form.find('[name="email"]').val('');
            alertify.alert("Nous vous avons envoyé notre dossier de sponsoring. Nous vous recontacterons dans les plus brefs délais.");
        }).fail(function( error ) {
            $('#contactMeSubmit').removeAttr("disabled");
            $('#contactMeSubmit span.loader').html('');
            alertify.alert("Erreur. Veuillez réessayer ultérieurement.");
        });
    });

</script>

@yield('javascript')

</body>

</html>
