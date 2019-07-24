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
                    @foreach($albums as $key => $album)

                        <div class="card mb-3">
                            <div class="card-header">
                                {{ $album->title }}
                            </div>
                            <div class="card-body">
                                <p class="text-center font-italic">{{ $album->description }}</p>
                                <div id="nanogallery-{{ $key }}" data-nanogallery2='{
"thumbnailHeight":  150,
"thumbnailWidth":   "auto",
"thumbnailHoverEffect2":   "scale120",
"galleryDisplayMode": "moreButton",
"galleryDisplayMoreStep": 3,
"itemsBaseURL":     "{{ env('APP_URL') }}/{{ env('GALLERIES_FOLDER') }}"
}'>
                                    @foreach($album->photos as $photo)
                                        @if( !empty($photo) )
                                            <a href="{{ env('APP_URL') }}/{{ env('GALLERIES_FOLDER') }}/{{ $photo->path_image }}"
                                               data-ngthumb="{{ env('APP_URL') }}/{{ env('GALLERIES_FOLDER') }}/{{ $photo->path_image_resize }}"></a>
                                        @endif
                                    @endforeach
                                </div>
                                @if( empty($album->photos) )
                                    <em>Pas encore de photos dans l'album</em>
                                @endif

                            </div>
                        </div>

                    @endforeach

                </div>
            </div>
        </div>
    </section>

@endsection

@section('javascript')
    <!-- nanogallery2 -->
    <script type="text/javascript" src="https://unpkg.com/nanogallery2@2.4.2/dist/jquery.nanogallery2.min.js"></script>
@endsection