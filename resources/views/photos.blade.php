@extends('layouts.layout')

@section('title', 'Photos')

@section('stylesheet')
    <link rel="stylesheet" type="text/css" media="all" href="css/jgallery/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" media="all" href="css/jgallery/jgallery.min.css?v=1.6.4"/>
    <link href="https://unpkg.com/nanogallery2@2.4.2/dist/css/nanogallery2.min.css" rel="stylesheet" type="text/css">
    <style>
        span.jgallery-btn.slideshow, span.jgallery-btn.full-screen, span.jgallery-btn.minimalize-thumbnails {
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
                {{--<div id="nanogallery2">gallery_made_with_nanogallery2</div>--}}


                <!-- ### gallery content ### -->
                    <div class="card ">
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs"  id="myTab" role="tablist">
                                @foreach($galleries as $labelGallery => $gallery)
                                <li class="nav-item">
                                    <a class="nav-link" id="{{ $labelGallery }}-tab" data-toggle="tab" href="#{{ $labelGallery }}" role="tab" aria-controls="{{ $labelGallery }}" aria-selected="true">{{ $labelGallery }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="myTabContent">

                                @foreach($galleries as $labelGallery => $gallery)
                                    <div class="tab-pane fade" id="{{ $labelGallery }}" role="tabpanel" aria-labelledby="{{ $labelGallery }}-tab">
                                        @foreach($gallery as $labelSousGallery => $sousGallery)
                                            <h3>{{ $labelSousGallery }}</h3>
                                            <div id="nanogallery-{{ $labelSousGallery }}" data-nanogallery2='{
    "thumbnailHeight":  150,
    "thumbnailWidth":   "auto",
    "thumbnailHoverEffect2":   "scale120",
    "itemsBaseURL":     "{{ env('APP_URL') }}/{{ env('GALLERIES_FOLDER') }}"
  }'>
                                                @foreach($sousGallery as $photo)
                                                    <a href="{{ env('APP_URL') }}/{{ env('GALLERIES_FOLDER') }}/{{ $photo }}"
                                                       data-ngthumb="{{ env('APP_URL') }}/{{ env('GALLERIES_FOLDER') }}/{{ $photo }}"></a>
                                                @endforeach
                                            </div>
                                        @endforeach
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>

                    {{--@foreach($galleries as $labelGallery => $gallery)--}}
                        {{--<h2>{{ $labelGallery }}</h2>--}}
                        {{--@foreach($gallery as $labelSousGallery => $sousGallery)--}}
                            {{--<h3>{{ $labelSousGallery }}</h3>--}}
                            {{--<div data-nanogallery2='{--}}
    {{--<!-- ### gallery settings ### -->--}}
    {{--"thumbnailHeight":  150,--}}
    {{--"thumbnailWidth":   150,--}}
    {{--"itemsBaseURL":     "{{ env('APP_URL') }}/{{ env('GALLERIES_FOLDER') }}"--}}
  {{--}'>--}}
                                {{--@foreach($sousGallery as $photo)--}}
                                    {{--<a href="{{ env('APP_URL') }}/{{ env('GALLERIES_FOLDER') }}/{{ $photo }}"--}}
                                       {{--data-ngthumb="{{ env('APP_URL') }}/{{ env('GALLERIES_FOLDER') }}/{{ $photo }}">Title--}}
                                        {{--Image 1</a>--}}
                                {{--@endforeach--}}
                            {{--</div>--}}
                        {{--@endforeach--}}
                    {{--@endforeach--}}

                </div>
            </div>
        </div>
    </section>

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

    <!-- nanogallery2 -->
    <script type="text/javascript" src="https://unpkg.com/nanogallery2@2.4.2/dist/jquery.nanogallery2.min.js"></script>
    <script>
        //        jQuery(document).ready(function () {
        //
        //            jQuery("#nanogallery2").nanogallery2( {
        //                // ### gallery settings ###
        //                thumbnailHeight:  150,
        //                thumbnailWidth:   150,
        //                itemsBaseURL:     'https://nanogallery2.nanostudio.org/samples/',
        //
        //                // ### gallery content ###
        //                items: [
        //                    { src: 'berlin1.jpg', srct: 'berlin1_t.jpg', title: 'Berlin 1' },
        //                    { src: 'berlin2.jpg', srct: 'berlin2_t.jpg', title: 'Berlin 2' },
        //                    { src: 'berlin3.jpg', srct: 'berlin3_t.jpg', title: 'Berlin 3' }
        //                ]
        //            });
        //        });

        $("section.photos").on('click', '.nav-link', function(e) {
            $(".ngy2_container").nanogallery2('refresh');
        });

    </script>
@endsection