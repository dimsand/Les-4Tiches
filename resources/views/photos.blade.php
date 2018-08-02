@extends('layouts.layout')

@section('title', 'Photos')

@section('stylesheet')
    <link rel="stylesheet" type="text/css" media="all" href="css/jgallery/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" media="all" href="css/jgallery/jgallery.min.css?v=1.6.4" />
    <style>
        span.jgallery-btn.slideshow, span.jgallery-btn.full-screen, span.jgallery-btn.minimalize-thumbnails{
            display: none !important;
        }
    </style>
@endsection

@section('content')

    <div class="jumbotron paral paralsec_photos mt-5">
        <h1 class="display-3">Les photos</h1>
    </div>

    <section class="banner-sec photos">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mt-2">
                    <div id="gallery">
                        <div class="album" data-jgallery-album-title="Notre 4L">
                            <a href="{{ "/img/albums/4l/4l_1.jpg" }}"><img src="{{ "/img/albums/4l/4l_1.jpg" }}" alt="Notre 4L dans un si beau paysage..." /></a>
                            <a href="{{ "/img/albums/4l/4l_2.jpg" }}"><img src="{{ "/img/albums/4l/4l_2.jpg" }}" alt="Notre 4L à l'ombre" /></a>
                            <a href="{{ "/img/albums/4l/4l_3.jpg" }}"><img src="{{ "/img/albums/4l/4l_3.jpg" }}" alt="Première inspection mécanique de la 4L" /></a>
                            <a href="{{ "/img/albums/4l/4l_4.jpg" }}"><img src="{{ "/img/albums/4l/4l_4.jpg" }}" alt="Notre 4L en plein cagnard ! Heureusement qu'il y a le toît ouvrant ;)" /></a>
                        </div>
                        <div class="album" data-jgallery-album-title="L'équipage">
                            <a href="{{ "/img/albums/equipage/equipage_1.jpg" }}"><img src="{{ "/img/albums/equipage/equipage_1.jpg" }}" alt="Nous voici, nous voilà !" /></a>
                            <a href="{{ "/img/albums/equipage/equipage_2.jpg" }}"><img src="{{ "/img/albums/equipage/equipage_2.jpg" }}" alt="11 ans d'amitié, pour 10 jours d'aventure extraordinaire !" /></a>
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
        $( function(){
            $( "#gallery" ).jGallery( {
                "transition":"fade_moveFromRight",
                "transitionBackward":"fade_moveFromLeft",
                "transitionCols":"1",
                "transitionRows":"1",
                "thumbnailsPosition":"bottom",
                "thumbType":"image",
                "backgroundColor":"#ffffff",
                "textColor":"#000000",
                "mode":"standard",
                tooltips: false,
                titleExpanded: false
            } );
        } );
    </script>
@endsection