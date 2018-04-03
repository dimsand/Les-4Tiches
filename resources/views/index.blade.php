@extends('layouts.layout')

@section('title', '4L Trophy 2019')

@section('stylesheet')
    <link href="css/caroussel.css" rel="stylesheet">
@endsection

@section('content')
<!-- First Parallax Section -->
<div class="jumbotron paral paralsec mt-5">
    <h1 class="display-3 brand">Les 4Tiches</h1>
    <p>4L Trophy 2019</p>
    <p class="lead mt-3">Here is a short description 1</p>
    <div class="col-md-10 col-lg-8 col-xl-7 mx-auto mt-5">
        <div class="progress" style="height: 25px; border: solid #333 2px;">
            <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%">25%</div>
        </div>
    </div>
    <p class="lead mt-5">
        <a class="btn btn-warning btn-lg btn-md" href="">Nous soutenir</a>
    </p>
</div>

<section class="features-icons bg-light text-center bg_color_yellow">
    <div class="container">
        <h2 class="mb-5">Notre projet en 3 points A</h2>
        <div class="row">
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <i class="icon-screen-desktop m-auto text-primary"></i>
                    </div>
                    <h3>Amitié</h3>
                    <p class="lead mb-0">11 belles années</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <i class="icon-layers m-auto text-primary"></i>
                    </div>
                    <h3>Aide</h3>
                    <p class="lead mb-0">Un défi humanitaire</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <i class="icon-check m-auto text-primary"></i>
                    </div>
                    <h3>Aventure</h3>
                    <p class="lead mb-0">Un raid sportif</p>
                </div>
            </div>
        </div>
        <p class="lead mt-5">
            <a class="btn btn-warning btn-lg btn-md" href="{{ route('projet') }}">En savoir plus</a>
        </p>
    </div>
</section>

<!-- Image Showcases -->
<section class="showcase">
    <div class="container-fluid p-0">
        <div class="row no-gutters">

            <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/bg-showcase-1.jpg');"></div>
            <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                <h2>Fully Responsive Design</h2>
                <p class="lead mb-0">When you use a theme created by Start Bootstrap, you know that the theme will look great on any device, whether it's a phone, tablet, or desktop the page will behave responsively!</p>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/bg-showcase-2.jpg');"></div>
            <div class="col-lg-6 my-auto showcase-text">
                <h2>Updated For Bootstrap 4</h2>
                <p class="lead mb-0">Newly improved, and full of great utility classes, Bootstrap 4 is leading the way in mobile responsive web development! All of the themes on Start Bootstrap are now using Bootstrap 4!</p>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/bg-showcase-3.jpg');"></div>
            <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                <h2>Easy to Use &amp; Customize</h2>
                <p class="lead mb-0">Landing Page is just HTML and CSS with a splash of SCSS for users who demand some deeper customization options. Out of the box, just add your content and images, and your new landing page will be ready to go!</p>
            </div>
        </div>
    </div>
</section>

<section class="testimonials text-center bg-light">
    <div class="container">
        <h2 class="mb-5">Nos sponsors</h2>
        <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
            <div class="carousel-inner row w-100 mx-auto" role="listbox">
                <div class="carousel-item col-md-4 active">
                    <img class="img-fluid mx-auto d-block" src="//placehold.it/500x300/000/fff?text=1" alt="slide 1">
                </div>
                <div class="carousel-item col-md-4">
                    <img class="img-fluid mx-auto d-block" src="//placehold.it/500x300?text=2" alt="slide 2">
                </div>
                <div class="carousel-item col-md-4">
                    <img class="img-fluid mx-auto d-block" src="//placehold.it/500x300?text=3" alt="slide 3">
                </div>
                <div class="carousel-item col-md-4">
                    <img class="img-fluid mx-auto d-block" src="//placehold.it/500x300?text=4" alt="slide 4">
                </div>
                <div class="carousel-item col-md-4">
                    <img class="img-fluid mx-auto d-block" src="//placehold.it/500x300?text=5" alt="slide 5">
                </div>
                <div class="carousel-item col-md-4">
                    <img class="img-fluid mx-auto d-block" src="//placehold.it/500x300?text=6" alt="slide 6">
                </div>
                <div class="carousel-item col-md-4">
                    <img class="img-fluid mx-auto d-block" src="//placehold.it/500x300?text=7" alt="slide 7">
                </div>
                <div class="carousel-item col-md-4">
                    <img class="img-fluid mx-auto d-block" src="//placehold.it/500x300?text=8" alt="slide 7">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                <i class="fa fa-chevron-left fa-lg text-muted"></i>
                <span class="sr-only">Précédent</span>
            </a>
            <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
                <i class="fa fa-chevron-right fa-lg text-muted"></i>
                <span class="sr-only">Suivant</span>
            </a>
        </div>
        <div class="text-right mt-3">
            <a href="{{ route('sponsors') }}">Voir en détails</a>
        </div>
    </div>
</section>

{{--<!-- Testimonials -->--}}
{{--<section class="testimonials text-center bg-light">--}}
    {{--<div class="container">--}}
        {{--<h2 class="mb-5">What people are saying...</h2>--}}
        {{--<div class="row">--}}
            {{--<div class="col-lg-4">--}}
                {{--<div class="testimonial-item mx-auto mb-5 mb-lg-0">--}}
                    {{--<img class="img-fluid rounded-circle mb-3" src="img/testimonials-1.jpg" alt="">--}}
                    {{--<h5>Margaret E.</h5>--}}
                    {{--<p class="font-weight-light mb-0">"This is fantastic! Thanks so much guys!"</p>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-lg-4">--}}
                {{--<div class="testimonial-item mx-auto mb-5 mb-lg-0">--}}
                    {{--<img class="img-fluid rounded-circle mb-3" src="img/testimonials-2.jpg" alt="">--}}
                    {{--<h5>Fred S.</h5>--}}
                    {{--<p class="font-weight-light mb-0">"Bootstrap is amazing. I've been using it to create lots of super nice landing pages."</p>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-lg-4">--}}
                {{--<div class="testimonial-item mx-auto mb-5 mb-lg-0">--}}
                    {{--<img class="img-fluid rounded-circle mb-3" src="img/testimonials-3.jpg" alt="">--}}
                    {{--<h5>Sarah	W.</h5>--}}
                    {{--<p class="font-weight-light mb-0">"Thanks so much for making these free resources available to us!"</p>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}

@endsection

@section('javascript')
    <link href="css/caroussel.css" rel="stylesheet">
@endsection