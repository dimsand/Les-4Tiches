@extends('layouts.layout')

@section('title', '4L Trophy 2019')

@section('stylesheet')
    <link href="{{ asset('css/caroussel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/write_text.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class="jumbotron paral paralsec mt-5">
    <h1 id="title_brand" class="display-3 brand">Les 4Tiches</h1>
    <p>4L Trophy 2019</p>
    <div class="col-md-10 col-lg-8 col-xl-7 mx-auto mt-5 mb-5">
        <p id="dialog1" class="text-left">« Dis, tu voudrais faire le 4L Trophy avec moi ? »</p>
        <p id="dialog2" class="text-right">« Mais oui ! Carrément ! »</p>
    </div>
    <div class="lead mt-5 text-center">
        <div id="chevron_voir_plus" class="scroll-indicator fa fa-chevron-down"></div>
    </div>
</div>

<section class="showcase" id="debut_pres_home">
    <div class="container-fluid p-0">
        <div class="row no-gutters bg_color_yellow2">
            <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/photos_nous/IMG_20180401_191738.jpg');"></div>
            <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                <h2>L'équipage</h2>
                <p class="lead mb-2"><span class="color_red">Rémi Sany</span> et <span class="color_red">Dimitri Sandron</span>, 22 ans, originaires de Lyon.</p>
                <p class="lead mb-2"><span class="font-weight-bold">Numéro d'équipage :</span> <span class="color_brown">
                        {!! Html::image('img/zero.png', '0', array('class' => 'm-auto num_equipage')) !!}
                        {!! Html::image('img/five.png', '5', array('class' => 'm-auto num_equipage')) !!}
                        {!! Html::image('img/nine.png', '9', array('class' => 'm-auto num_equipage')) !!}
                        {!! Html::image('img/four.png', '4', array('class' => 'm-auto num_equipage')) !!}
                    </span></p>
                <p class="lead mb-2"><span class="font-weight-bold">Nom d'équipage :</span> <span class="nom_equipage">Les 4Tiches</span></p>
                <p class="lead mt-5">
                    <a class="btn btn-dark btn-lg btn-md" href="{{ route('equipage') }}">Plus d'infos sur nous</a>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="features-icons bg-light text-center bg_color_yellow">
    <div class="container">
        <h2 class="mb-5">Notre projet en 3 points A</h2>
        <div class="row">
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        {!! Html::image('img/volunteer.png', 'Amitié', array('class' => 'm-auto')) !!}
                    </div>
                    <h3>Amitié</h3>
                    <p class="lead mb-0">Un défi entre amis</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        {!! Html::image('img/hands.png', 'Un défi humanitaire', array('class' => 'm-auto')) !!}
                    </div>
                    <h3>Aide</h3>
                    <p class="lead mb-0">Une aventure humanitaire</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        {!! Html::image('img/trophy.png', 'Un raid sportif', array('class' => 'm-auto')) !!}
                    </div>
                    <h3>Aventure</h3>
                    <p class="lead mb-0">Un raid sportif</p>
                </div>
            </div>
        </div>
        <p class="lead mt-5">
            <a class="btn btn-warning btn-lg btn-md" href="{{ route('projet') }}">En savoir plus sur le projet</a>
        </p>
    </div>
</section>

<section class="showcase">
    <div class="container-fluid p-0">
        <div class="row no-gutters bg_color_yellow2">
            <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/soyez_de_ceux.jpg');"></div>
            <div class="col-lg-6 my-auto showcase-text">
                <h2>Participez au financement</h2>
                <p class="lead mb-0">Nous n’avons pas la <span class="font-weight-bold color_red">prétention</span> de bouleverser l’ordre des choses. Mais, malgré notre jeune âge et
                    notre statut d’étudiants, nous désirons apporter notre <span class="font-weight-bold color_red">pierre à l’édifice</span>.
                    Nous voulons aider ceux qui en ont <span class="font-weight-bold color_red">besoin</span>, mais nous n’y arriverons pas sans votre <span class="font-weight-bold color_red">support</span>. </p>
                <p class="lead mt-5">
                    <a class="btn btn-danger btn-lg btn-md" href="{{ route('financement') }}">Comment nous aider</a>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="testimonials text-center bg-light bg_color_yellow">
    <div class="container">
        <h2 class="mb-5">Nos derniers sponsors</h2>
        <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="3000" data-pause="false">
            <div class="carousel-inner row w-100 mx-auto" role="listbox">
                <div class="carousel-item col-md-4 active">
                    <a href="{{ route('sponsors') }}#copie-conforme"><div class="card-img-top" style="background-image:url('img/sponsors/logo-copie-conforme.jpg');background-repeat:no-repeat;background-position:50%;background-size:cover;height:100%;"></div></a>
                    {{--<img class="img-fluid mx-auto d-block" src="img/sponsors/logo-copie-conforme.jpg" alt="Logo Copie Conforme">--}}
                </div>
                <div class="carousel-item col-md-4">
                    {{--<img class="img-fluid mx-auto d-block" src="img/500x300.png" alt="slide 2">--}}
                    <a href="{{ route('sponsors') }}#formulr"><div class="card-img-top" style="background-image:url('img/sponsors/LOGO-HD-FORMUL-R.png');background-repeat:no-repeat;background-position:50%;background-size:cover;height:100%;"></div></a>
                </div>
                <div class="carousel-item col-md-4">
                    {{--<img class="img-fluid mx-auto d-block" src="img/500x300.png" alt="slide 3">--}}
                    <a href="{{ route('sponsors') }}#parquet-sol"><div class="card-img-top" style="background-image:url('img/sponsors/LOGO PARQUETSOL JPG.jpg');background-repeat:no-repeat;background-position:50%;background-size:cover;height:100%;"></div></a>
                </div>
                <div class="carousel-item col-md-4">
                    <img class="img-fluid mx-auto d-block" src="img/500x300.png" alt="slide 4">
                </div>
                <div class="carousel-item col-md-4">
                    <img class="img-fluid mx-auto d-block" src="img/500x300.png" alt="slide 5">
                </div>
                <div class="carousel-item col-md-4">
                    <img class="img-fluid mx-auto d-block" src="img/500x300.png" alt="slide 6">
                </div>
                <div class="carousel-item col-md-4">
                    <img class="img-fluid mx-auto d-block" src="img/500x300.png" alt="slide 7">
                </div>
                <div class="carousel-item col-md-4">
                    <img class="img-fluid mx-auto d-block" src="img/500x300.png" alt="slide 7">
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
        <div class="text-right mt-3 mr-3">
            <a href="{{ route('sponsors') }}" class="color_brown">Voir tous les sponsors</a>
        </div>
    </div>
</section>

@endsection

@section('javascript')
    <script src="{{ asset('js/caroussel.js') }}"></script>
    <script>
        $('#title_brand').animateCss('flipInX', function() {
            $('#dialog1').show();
            $('#dialog1').animateCss('bounceInLeft', function() {
                $('#dialog2').show();
                $('#dialog2').animateCss('bounceInRight', function() {
                    $("#chevron_voir_plus").css({ 'margin-top': ($("#dialog2").offset().top) + 'px' });
                    $('#chevron_voir_plus').fadeIn();
                });
            });
        });

        $(document).on('click', "#chevron_voir_plus", function(){
            $('html, body').animate({
                scrollTop: ($("#debut_pres_home").offset().top) - 55
            }, 1000);
        });
    </script>

@endsection