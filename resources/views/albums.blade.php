@extends('layouts.layout')

@section('title', 'Photos - Albums')

@section('stylesheet')
    <style>
        .header-bg{
            background-size: cover;
            background-position: center;
            height: 175px;
            -webkit-box-shadow: none;
            box-shadow: none;
            border: 0px;
            border-radius: 0px;
        }
        .list-albums{
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            flex-wrap: wrap;
        }
        .card{
            width: 300px;
            cursor: pointer;
        }
        .card:hover {
            transform: scale(1.1);
            border: solid #000 1px;
        }
        a.deco-none{
            color:#000000 !important;
            text-decoration:none;
        }
        .deco-none {
            color: inherit;
            text-decoration: inherit;
        }

        .deco-none:link {
            color: inherit;
            text-decoration: inherit;
        }

        .deco-none:hover {
            color: inherit;
            text-decoration: inherit;
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
                <div class="col-lg-12 p-2">
                    <p class="mt-3 text-center">Cliquer sur un album pour voir les photos</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 list-albums p-2">

                    @foreach($albums as $key => $album)
                        <a href="{{ route('photos.show',[$album->slug])}}" class="deco-none">
                            <div class="card mt-2">
                                <div class="header-bg" style="background-image: url({{ env('APP_URL') }}/{{ env('GALLERIES_FOLDER') }}/{{ $album->photos[0]->path_image }});"></div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $album->title }}</h5>
                                    <p class="card-text">{!! $album->description !!}</p>
                                </div>
                            </div>
                        </a>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

@endsection
