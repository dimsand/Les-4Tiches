@extends('layouts.layout')

@section('title', 'L\'équipage')

@section('stylesheet')
    <link rel="stylesheet" type="text/css" media="all" href="css/jgallery/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" media="all" href="css/jgallery/jgallery.min.css?v=1.6.4"/>
    <style>
        span.jgallery-btn.slideshow, span.jgallery-btn.full-screen, span.jgallery-btn.minimalize-thumbnails {
            display: none !important;
        }
    </style>
@endsection

@section('content')

<div class="jumbotron paral paralsec_equipage mt-5">
    <h1 class="display-3">L'équipage</h1>
</div>

<section class="features-icons bg-light text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <a href="{{ "/docs/Frise Chrono Les 4Tiches - v3.pdf" }}" target="_blank"><img src="img/Frise Chrono Les 4Tiches - v3.png" style="border-radius: 10px; width: 100%; height: auto;"></a>
            </div>
        </div>
    </div>
</section>

<div class="jumbotron paral paralsec_notre_4l">
    <h1 class="display-3">Photos de l'équipe</h1>
</div>

<section class="features-icons bg-light text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <img src="img/image_4l.jpg" alt="Notre 4L" class="img-thumbnail">
                <p class="mt-3 pl-5 pr-5">La voici, la voilà, notre troisième coéquipière avec qui nous allons traverser le désert marocain pour acheminer fournitures scolaires et équipements sportifs aux enfants les plus défavorisés. 🚗<p>
                <p>
                    <span class="badge badge-pill badge-warning">Renault R4</span>
                    <span class="badge badge-pill badge-danger">34CV</span>
                    <span class="badge badge-pill badge-warning">1108cm3</span>
                    <span class="badge badge-pill badge-danger">Année 1982</span>
                </p>
            </div>
        </div>
    </div>
</section>

<div class="jumbotron paral paralsec_notre_4l">
    <h1 class="display-3">Notre 4L</h1>
</div>

<section class="banner-sec photos">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-2">
                <div id="gallery">
                    <div class="album" data-jgallery-album-title="Notre 4L">
                        <a href="{{ "/img/albums/4l/4l_1.jpg" }}"><img src="{{ "/img/albums/4l/4l_1.jpg" }}"
                                                                       alt="Notre 4L dans un si beau paysage..."/></a>
                        <a href="{{ "/img/albums/4l/4l_2.jpg" }}"><img src="{{ "/img/albums/4l/4l_2.jpg" }}"
                                                                       alt="Notre 4L à l'ombre"/></a>
                        <a href="{{ "/img/albums/4l/4l_3.jpg" }}"><img src="{{ "/img/albums/4l/4l_3.jpg" }}"
                                                                       alt="Première inspection mécanique de la 4L"/></a>
                        <a href="{{ "/img/albums/4l/4l_4.jpg" }}"><img src="{{ "/img/albums/4l/4l_4.jpg" }}"
                                                                       alt="Notre 4L en plein cagnard ! Heureusement qu'il y a le toît ouvrant ;)"/></a>
                    </div>
                    <div class="album" data-jgallery-album-title="L'équipage">
                        <a href="{{ "/img/albums/equipage/equipage_1.jpg" }}"><img
                                    src="{{ "/img/albums/equipage/equipage_1.jpg" }}"
                                    alt="Nous voici, nous voilà !"/></a>
                        <a href="{{ "/img/albums/equipage/equipage_2.jpg" }}"><img
                                    src="{{ "/img/albums/equipage/equipage_2.jpg" }}"
                                    alt="11 ans d'amitié, pour 10 jours d'aventure extraordinaire !"/></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('javascript')
    <script type="text/javascript" src="js/jgallery/jgallery.min.js?v=1.6.4"></script>
    <script>
        $(function () {
            $("#gallery").jGallery({
                "transition": "fade_moveFromRight",
                "transitionBackward": "fade_moveFromLeft",
                "transitionCols": "1",
                "transitionRows": "1",
                "thumbnailsPosition": "bottom",
                "thumbType": "image",
                "backgroundColor": "#ffffff",
                "textColor": "#000000",
                "mode": "standard",
                tooltips: false,
                titleExpanded: false
            });
        });
    </script>
@endsection