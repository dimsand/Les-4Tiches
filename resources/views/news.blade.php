@extends('layouts.layout')

@section('title', 'News')

@section('stylesheet')
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
            font-size: 19px;
            font-weight: bold;
            line-height: 23px;
            margin: 6px 0px 0px;
            padding-bottom: 10px;
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
@endsection

@section('content')

    <div class="jumbotron paral paralsec_news mt-5">
        <h1 class="display-3">Les news</h1>
    </div>

    <section class="banner-sec news">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">

                    @if($news->count())
                        @foreach($news as $key => $n)
                            <div class="card mb-3">
                                <div class="card-img-top"
                                     style="background-image:url('{{ 'uploads/'.$n->image }}');background-repeat:no-repeat;background-position:50%;background-size:cover;height:225px;">
                                    <span class="badge badge-pill badge-danger">{{ $n->category->libelle }}</span></div>
                                <div class="card-body">
                                    <div class="news-title">
                                        <h2 class=" title-small">{{ $n->title }}</h2>
                                    </div>
                                    <p class="card-text">{!! $n->content !!}</p>
                                    <p class="card-text">
                                        <?php
                                        $date1 = $n->created_at;
                                        $date2 = date(('Y-m-d H:i:s'));
                                        $diff = abs(strtotime($date2) - strtotime($date1));
                                        $years = floor($diff / (365 * 60 * 60 * 24));
                                        $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
                                        $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));
                                        $hours = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24 - $days * 60 * 60 * 24) / (60 * 60));
                                        $minuts = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24 - $days * 60 * 60 * 24 - $hours * 60 * 60) / 60);
                                        $seconds = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24 - $days * 60 * 60 * 24 - $hours * 60 * 60 - $minuts * 60));
                                        ?>
                                        <small class="text-time"><em>
                                                il y a
                                                @if(!empty($years))
                                                    {{ $years }} année{{$years>1?"s":""}}
                                                @elseif(!empty($months))
                                                    {{ $months }} mois
                                                @elseif(!empty($days))
                                                    {{ $days }} jour{{$days>1?"s":""}}
                                                @elseif(!empty($hours))
                                                    {{ $hours }} heure{{$hours>1?"s":""}}
                                                @elseif(!empty($seconds))
                                                    {{ $seconds }} seconde{{$seconds>1?"s":""}}
                                                @endif
                                            </em></small>
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p>Attendons qu'il y ait un peu plus d'actus de notre part :)</p>
                    @endif
                </div>
                <aside class="col-lg-4 side-bar col-md-12">
                    {{--<h3 class="heading-large">Nos photos</h3>--}}
                    {{--<div class="video-sec">--}}
                    {{--<div class="video-block">--}}
                    {{--<img class="img-fluid mx-auto d-block" src="img/images_a_venir.png">--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    <div class="facebook-responsive2">
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FLes4Tiches%2F&tabs=timeline&width=340&height=700&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                                width="340" height="700" style="border:none;overflow:hidden" scrolling="no"
                                frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                    </div>
                </aside>
            </div>
        </div>
    </section>

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