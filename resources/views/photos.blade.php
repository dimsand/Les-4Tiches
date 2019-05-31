@extends('layouts.layout')

@section('title', 'Photos')

@section('stylesheet')
    <link href="https://unpkg.com/nanogallery2@2.4.2/dist/css/nanogallery2.min.css" rel="stylesheet" type="text/css">
    <style>
        span.jgallery-btn.slideshow, span.jgallery-btn.full-screen, span.jgallery-btn.minimalize-thumbnails {
            display: none !important;
        }
    </style>
@endsection

@section('content')

    <div class="jumbotron paral paralsec_photos mt-5">
        <h1 class="display-3">Les photos de l'aventure</h1>
    </div>

    <section class="banner-sec photos mb-3 mt-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mt-2">

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
    "galleryDisplayMode": "moreButton",
    "galleryDisplayMoreStep": 3,
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

                </div>
            </div>
        </div>
    </section>

@endsection

@section('javascript')
    <!-- nanogallery2 -->
    <script type="text/javascript" src="https://unpkg.com/nanogallery2@2.4.2/dist/jquery.nanogallery2.min.js"></script>
    <script>

        $( document ).ready(function() {
            $('#myTab li:first a').trigger('click');
            $("section.photos").on('click', '.nav-link', function(e) {
                $(".ngy2_container").nanogallery2('refresh');
            });
        });
    </script>
@endsection