@extends('layouts.layout')

@section('title', 'News')

<style>

    section.news {
        padding: 30px 0;
        /*float: left;*/
        width: 100%
    }

    .card {
        float: left;
        width: 100%
    }

    .title-large {
        font-size: 20px;
        margin: 10px 0 5px;
        line-height: 27px;
        color: #141517;
    }

    .title-small {
        color: #141517;
        font-size: 16px;
        font-weight: 400;
        line-height: 23px;
        margin: 6px 0 0;
    }

    .title-large a, .title-small a, .title-x-small a {
        color: inherit
    }

    .banner-sec.news {
        /*float: left;*/
        width: 100%;
        background: #EBEBEB
    }

    .card-text {
        margin: 0
    }

    .text-time {
        color: #ff0000;
        font-weight: 600;
    }

    .banner-sec.news .card-img-overlay {
        padding: 0;
        top: 3px;
        left: 7px;
        height: 20%
    }

    header {
        float: left;
        width: 100%
    }

    .small-top .social-icon {
        float: right;
    }

    .small-top .social-icon a {
        border-left: 1px solid #2b2b2b;
        color: #ca1b1b;
        float: left;
        padding: 6px 13px;
    }

    .small-top .social-icon a:last-child {
        border-right: 1px solid #2b2b2b;
    }

    .small-top .social-icon a:hover {
        color: #FD3A13;
        text-decoration: none;
    }

    .small-top .date-sec {
        font-size: 13px;
        font-weight: 600;
        float: left;
        margin-top: 4px;
        color: #898989
    }

    .top-head h1 {
        color: #fff;
        font-size: 36px;
        font-weight: 600;
        margin: 18px 0 0;
    }

    .top-head small {
        float: left;
        width: 100%;
        font-size: 14px;
        color: #c0c0c0;
        margin-top: 5px;
        margin-left: 5px;
    }

    .top-head {
        text-align: right;
        margin-top: 22px;
    }

    .top-head .admin-bar a {
        color: #fff;
        line-height: 49px;
        position: relative;
        padding: 0 7px;
    }

    .top-head .admin-bar a:hover {
        color: #ff0000
    }

    .top-head .admin-bar a i {
        margin-right: 6px;
    }

    .top-head .admin-bar .ping {
        background: #ff0000;
        border: 3px solid #141517;
        border-radius: 50%;
        height: 14px;
        position: absolute;
        right: 3px;
        top: 13px;
        width: 14px;
        z-index: 1;
    }

    .top-head .admin-bar img {
        float: right;
        height: 50px;
        width: 50px;
        margin-left: 18px;
    }

    .top-nav .nav-link {
        padding-bottom: 0.7rem;
        padding-top: 0.7rem;
    }

    .top-nav .navbar-nav .nav-item + .nav-item {
        margin-left: 0
    }

    .top-nav li a {
        color: #141517;
        text-transform: uppercase;
        font-size: 14px;
        font-weight: 700;
        padding: 0 10px;
        border-bottom: 2px solid #fff
    }

    .top-nav li a:hover, .top-nav li a:focus, .top-nav li.active a {
        color: #141517;
        border-bottom: 2px solid #FD3A13
    }

    .top-slider .carousel-indicators {
        bottom: -30px;
    }

    .top-slider .carousel-indicators li {
        border: 1px solid #000;
    }

    .top-slider .carousel-indicators .active {
        background: #000;
    }

    .banner-sec.news {
        /*float: left;*/
        width: 100%;
    }

    .banner-sec.news .news-block {
        margin-bottom: 20px
    }

    .banner-sec.news .news-block:last-child {
        margin-bottom: 0px
    }

    .banner-sec.news .news-des {
        margin-bottom: 5px;
    }

    .banner-sec.news .title-large {
        margin: 18px 0 0
    }

    .banner-sec.news .time {
        margin-top: 0px;
        font-size: 13px;
    }

    .banner-sec.news .carousel-control.left, .banner-sec.news .carousel-control.right {
        background: none;
    }

    .banner-sec.news .card {
        margin-bottom: 20px;
    }

</style>

@section('content')

    <div class="jumbotron paral paralsec_news mt-5">
        <h1 class="display-3">Les news</h1>
    </div>

    <section class="banner-sec news">
        <div class="container">
            <div class="row">

                @if(!empty($news[0]))
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-img-top" style="background-image:url('{{ 'uploads/'.$news[0]->image }}');background-repeat:no-repeat;background-position:50%;background-size:cover;height:225px;"><span
                                        class="badge badge-pill badge-danger">{{ $news[0]->category_id }}</span></div>
                            <div class="card-body">
                                <div class="news-title">
                                    <h2 class=" title-small"><a href="#">{{ $news[0]->title }}</a></h2>
                                </div>
                                <p class="card-text">
                                    <small class="text-time"><em>il y a 9
                                            jours {{ $news[0]->created_at->format('d/m/Y') }}</em></small>
                                </p>
                            </div>
                        </div>
                        @if(!empty($news[1]))
                            <div class="card">
                                <div class="card-img-top" style="background-image:url('{{ 'uploads/'.$news[1]->image }}');background-repeat:no-repeat;background-position:50%;background-size:cover;height:225px;"><span
                                            class="badge badge-pill badge-danger">{{ $news[1]->category_id }}</span>
                                </div>
                                <div class="card-body">
                                    <div class="news-title">
                                        <h2 class=" title-small"><a href="#">{{ $news[1]->title }}</a></h2>
                                    </div>
                                    <p class="card-text">
                                        <small class="text-time"><em>il y a 9
                                                jours {{ $news[1]->created_at->format('d/m/Y') }}</em></small>
                                    </p>
                                </div>
                            </div>
                        @endif
                    </div>
                    @if(!empty($news[2]))
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img-top" style="background-image:url('{{ 'uploads/'.$news[2]->image }}');background-repeat:no-repeat;background-position:50%;background-size:cover;height:225px;"><span
                                            class="badge badge-pill badge-danger">{{ $news[2]->category_id }}</span>
                                </div>
                                <div class="card-body">
                                    <div class="news-title">
                                        <h2 class=" title-small"><a href="#">{{ $news[2]->title }}</a></h2>
                                    </div>
                                    <p class="card-text">
                                        <small class="text-time"><em>il y a 9
                                                jours {{ $news[2]->created_at->format('d/m/Y') }}</em></small>
                                    </p>
                                </div>
                            </div>
                            @if(!empty($news[3]))
                                <div class="card">
                                    <div class="card-img-top" style="background-image:url('{{ 'uploads/'.$news[3]->image }}');background-repeat:no-repeat;background-position:50%;background-size:cover;height:225px;"><span
                                                class="badge badge-pill badge-danger">{{ $news[3]->category_id }}</span>
                                    </div>
                                    <div class="card-body">
                                        <div class="news-title">
                                            <h2 class=" title-small"><a href="#">{{ $news[3]->title }}</a></h2>
                                        </div>
                                        <p class="card-text">
                                            <small class="text-time"><em>il y a 9
                                                    jours {{ $news[3]->created_at->format('d/m/Y') }}</em></small>
                                        </p>
                                    </div>
                                </div>
                            @endif
                        </div>
                    @endif
                @else
                    <p>IL n'y a pas encore de news</p>
                @endif

                <div class="col-md-6 top-slider">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            @foreach($news as $key => $n)
                                @if($key <= 2)
                                    <div class="carousel-item @if($key == 0) active @endif">
                                        <div class="news-block">
                                            <div class="news-media" style="background-image:url('{{ 'uploads/'.$n->image }}');background-repeat:no-repeat;background-position:50%;background-size:cover;height:450px;"></div>
                                            <div class="news-title">
                                                <h2 class=" title-large"><a href="#">{{ $n->title }}</a></h2>
                                            </div>
                                            <div class="news-des">{!! $n->content !!}</div>
                                            <div class="time-text"><strong>2h
                                                    ago {{ $n->created_at->format('d/m/Y') }}</strong></div>
                                            <div></div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-01 news">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <h3 class="heading-large">Plus anciennement...</h3>
                    <div class="">
                        @if(!empty($news[4]))
                            @foreach($news as $key => $n)
                                @if($key >= 4)
                                    <div class="col-lg-6 card">
                                        <div class="card">{!! Html::image('img/1280px-4LTrophy928.jpg', 'Association créée', array('class' => 'img-fluid')) !!}
                                            <div class="card-body">
                                                <div class="news-title"><a href="#">
                                                        <h2 class=" title-small">{{ $n->title }}</h2>
                                                    </a></div>
                                                <p class="card-text">{{ $n->content }}</p>
                                                <p class="card-text">
                                                    <small class="text-time"><em>3 mins
                                                            ago {{ $n->created_at->format('d/m/Y H:i') }}</em></small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @else
                            <p>Attendons qu'il y ait un peu plus d'actus de notre part :)</p>
                        @endif
                    </div>
                </div>
                <aside class="col-lg-4 side-bar col-md-12">
                    <h3 class="heading-large">Nos photos</h3>
                    <div class="video-sec">
                        <div class="video-block">
                            <img class="img-fluid mx-auto d-block" src="img/500x300.png">
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>




    {{--<section class="features-icons bg-light text-center">--}}
        {{--<div class="container">--}}

            {{--<div class="row">--}}
                {{--<div class="card mb-3">--}}
                    {{--{!! Html::image('img/1280px-4LTrophy928.jpg', 'Pré-inscription confirmée !', array('class' => 'card-img-top')) !!}--}}
                    {{--<div class="card-body">--}}
                        {{--<h5 class="card-title"><i class="fa fa-thumbs-up"></i> Pré-inscription confirmée !</h5>--}}
                        {{--<p class="card-text">Nous sommes officiellement pré-inscrit pour le 4L Trophy ! A nous--}}
                            {{--maintenant de finir la création de notre site internet et de notre plaquette de présentation--}}
                            {{--pour démarcher nos prochains sponsors ! Nous allons créer également prochainement une page--}}
                            {{--<a href="">Hello Asso</a> afin que chacun puisse participer à son financement simplement.--}}
                        {{--</p>--}}
                        {{--<p class="card-text">--}}
                            {{--<small class="text-muted">Le 03 avril 2018 à 16h52</small>--}}
                        {{--</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="row">--}}
                {{--<div class="card mb-3">--}}
                    {{--{!! Html::image('img/1280px-4LTrophy928.jpg', 'Page Facebook créée', array('class' => 'card-img-top')) !!}--}}
                    {{--<div class="card-body">--}}
                        {{--<h5 class="card-title"><i class="fa fa-thumbs-up"></i> Notre page Facebook a été créée !</h5>--}}
                        {{--<p class="card-text">Pour nous <strong>suivre</strong> plus facilement dans votre fil--}}
                            {{--d'actualités, n'hésitez pas à <strong>aimer</strong> notre <a--}}
                                    {{--href="https://www.facebook.com/Les4Tiches/">notre Page Facebook</a>. Nous y--}}
                            {{--posterons les dernières nouveautés de l'application, ainsi que le suivi de la préparation du--}}
                            {{--<strong>projet</strong> (association, achat de la 4L, nouveaux sponsors, ...)</p>--}}
                        {{--<p class="card-text">--}}
                            {{--<small class="text-muted">Le 01 avril 2018</small>--}}
                        {{--</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="row">--}}
                {{--<div class="card mb-3">--}}
                    {{--{!! Html::image('img/1280px-4LTrophy928.jpg', 'Pré-inscription envoyée !', array('class' => 'card-img-top')) !!}--}}
                    {{--<div class="card-body">--}}
                        {{--<h5 class="card-title"><i class="fa fa-thumbs-up"></i> Pré-inscription envoyée !</h5>--}}
                        {{--<p class="card-text">Notre dossier de pré-inscription a été transmis au 4L Trophy sous le nom de--}}
                            {{--notre association : Les 4Tiches. Ce dernier sera aussi notre nom d'équipage. Attendons la--}}
                            {{--fin de ce week-end de 3 jours, pour avoir plus de nouvelles.</p>--}}
                        {{--<p class="card-text">--}}
                            {{--<small class="text-muted">Le 01 avril 2018</small>--}}
                        {{--</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="row">--}}
                {{--<div class="card mb-3">--}}
                    {{--{!! Html::image('img/1280px-4LTrophy928.jpg', 'Association créée', array('class' => 'card-img-top')) !!}--}}
                    {{--<div class="card-body">--}}
                        {{--<h5 class="card-title"><i class="fa fa-building"></i></h5>--}}
                        {{--<p class="card-text">Ca y'est, la demande de création de l'association <strong>Les--}}
                                {{--4Tiches</strong> a été faite ! Plus qu'à attendre une confirmation de l'enresgitrement--}}
                            {{--dans le <strong>JOAFE</strong> (JOURNAL OFFICIEL DES ASSOCIATIONS ET FONDATIONS--}}
                            {{--D'ENTREPRISE) pour une inscription officiellement définitive.</p>--}}
                        {{--<p class="card-text">--}}
                            {{--<small class="text-muted">Le 01 avril 2018</small>--}}
                        {{--</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}

@endsection

@section('javascript')
    <script>
        $(window).load(function () {
            var boxheight = $('#myCarousel .carousel-inner').innerHeight();
            var itemlength = $('#myCarousel .item').length;
            var triggerheight = Math.round(boxheight / itemlength + 1);
            $('#myCarousel .list-group-item').outerHeight(triggerheight);
        });

        var monthNames = ["January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"];
        var dayNames = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"]

        var newDate = new Date();
        newDate.setDate(newDate.getDate() + 1);
        $('#Date').html(dayNames[newDate.getDay()] + ", " + newDate.getDate() + ' ' + monthNames[newDate.getMonth()] + ' ' + newDate.getFullYear());
    </script>
@endsection