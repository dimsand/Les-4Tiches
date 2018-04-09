@extends('layouts.layout')

@section('title', 'News')

    <style>
        body {
            color: #5a5a5a;
            font-family: 'Open Sans',Arial,sans-serif;
            font-size: 15px;
        }
        h1,h2,h3,h4,h5{
            font-family: 'Montserrat', sans-serif;
        }
        a, a:hover, .btn{outline:none!important;}
        .btn-search{background: #FD3A13; border-color: #FD3A13; color: #fff; padding: 7px 10px}
        .btn-search:hover{background: #ca1b1b; border-color: #ca1b1b}
        section{padding: 30px 0; float: left; width: 100%}
        .card{float: left; width:100%}
        .navbar {border: medium none; float: left; margin-bottom: 0px; width: 100%;  border-radius: 0}
        .title-large {font-size: 20px; margin: 10px 0 5px; line-height: 27px; color: #141517;}
        .title-small { color: #141517; font-size: 16px; font-weight: 400; line-height: 23px; margin: 6px 0 0;}
        .title-x-small {font-size: 18px; margin: 0px;}
        .title-large a, .title-small a, .title-x-small a{color: inherit}
        .banner-sec{float: left; width: 100%; background: #EBEBEB}
        .card-block{padding:0 10px 10px;}
        .card-text{margin: 0}
        .text-time{color: #ff0000; font-weight: 600;}
        .banner-sec .card-img-overlay{padding: 0; top: 3px; left: 7px; height: 20%}

        header{float: left; width:100%}
        .small-top{ border-bottom: 1px solid #2b2b2b;float: left; width: 100%; background: #000}
        .small-top .social-icon{float: right;}
        .small-top .social-icon a {border-left: 1px solid #2b2b2b; color: #ca1b1b; float: left; padding: 6px 13px;}
        .small-top .social-icon a:last-child {border-right: 1px solid #2b2b2b;}
        .small-top .social-icon a:hover {color:#FD3A13; text-decoration: none;}
        .small-top .date-sec {font-size: 13px; font-weight: 600; float: left; margin-top: 4px; color: #898989}
        .top-head{background: #141517; width: 100%; float: left; height: 100px;}
        .top-head h1 {color: #fff; font-size: 36px; font-weight: 600; margin: 18px 0 0;}
        .top-head small{float: left; width: 100%; font-size: 14px; color: #c0c0c0; margin-top: 5px; margin-left: 5px;}
        .top-head .admin-bar {text-align: right; margin-top: 22px;}
        .top-head .admin-bar a {color: #fff; line-height: 49px; position: relative; padding:0 7px;}
        .top-head .admin-bar a:hover{color: #ff0000}
        .top-head .admin-bar a i{margin-right: 6px;}
        .top-head .admin-bar .ping {background: #ff0000; border: 3px solid #141517; border-radius: 50%; height: 14px; position: absolute; right: 3px;    top: 13px; width: 14px; z-index: 1;}
        .top-head .admin-bar img {float: right; height: 50px; width: 50px; margin-left: 18px;}
        .top-nav{background: #fff; padding: 0; border-bottom: 1px solid #dbdbdb}
        .top-nav .nav-link {padding-bottom: 0.7rem; padding-top: 0.7rem;}
        .top-nav .navbar-nav .nav-item + .nav-item{margin-left:0}
        .top-nav li a{color: #141517; text-transform: uppercase; font-size: 14px; font-weight: 700; padding: 0 10px; border-bottom: 2px solid #fff}
        .top-nav li a:hover, .top-nav li a:focus, .top-nav li.active a{color: #141517; border-bottom: 2px solid #FD3A13 }
        .top-nav .form-control{border-color: #fff}
        .navbar-toggle{background: #fff;}
        .navbar-toggle .icon-bar{background:#0A2E61; }
        .navbar-brand{display: none;}

        .top-slider .carousel-indicators{bottom: 0}
        .top-slider .carousel-indicators li{border:1px solid #000;}
        .top-slider .carousel-indicators .active{background:#000;}


        .side-bar .nav-tabs{border-bottom:none;}
        .side-bar .nav-tabs .nav-link {color: #aeaeae; text-transform: uppercase; border: none;}
        .side-bar .nav-tabs .nav-link.active, .side-bar .nav-tabs .nav-link:hover{border-bottom:2px solid #ff0000;  text-transform: uppercase; color: #222}
        .sidebar-tabing .media{margin-top: 20px}
        .sidebar-tabing img{width: 120px;height: 100px;}
        .sidebar-tabing .title-small {line-height: 23px; margin-top: 5px; font-size: 18px}

        #search {float: right; margin-top: 9px; width: 250px;}
        .search {padding: 5px 0; width: 230px; height: 30px; position: relative; left: 10px; float: left; line-height: 22px;}
        .search input {background: #d0d0d0; border: medium none; border-radius: 3px 0 0 3px; float: left; height: 36px; line-height: 18px; margin-left: 210px; padding: 0 9px; position: absolute; top: -3px; width: 0; -webkit-transition: all 0.7s ease-in-out; -moz-transition: all 0.7s ease-in-out;
            -o-transition: all 0.7s ease-in-out; transition: all 0.7s ease-in-out;}
        .search:hover input, .search input:focus { width: 200px; margin-left: 0px; background: #d0d0d0;}
        .top-nav .btn {position: absolute;right: 0;top: -3px;border-radius:3px;}

        .banner-sec{float: left; width:100%;}
        .banner-sec .news-block{margin-bottom: 20px}
        .banner-sec .news-block:last-child{margin-bottom: 0px}
        .banner-sec .news-des {margin-bottom: 5px;}
        .banner-sec .title-large{margin: 18px 0 0}
        .banner-sec .time{margin-top: 0px; font-size: 13px;}
        .banner-sec .carousel-control.left, .banner-sec .carousel-control.right{background: none;}
        .banner-sec .card{margin-bottom:20px;}

        .section-01{float: left; width: 100%;  border-top: 1px solid #d5d5d5; border-bottom: 1px solid #d5d5d5; background-color: #f8f9fa;}
        .section-01 .heading-large {border-bottom: 2px solid #222; color: #222; float: left; width: 100%; padding:0 0 6px; margin:0 0 18px; text-align: left;}
        .section-01 .heading-large::before, .section-01 .heading-large::after{background: transparent;}
        .section-01 .heading-small {border-bottom: 2px solid #222; color: #222; float: left; margin: 7px 0 0; width: 100%; padding-bottom: 10px; font-size: 18px }
        .section-01 .title-small {margin-bottom: 5px; font-size:17px }
        .section-01 .news-block{border-bottom: 1px dashed #000; padding-bottom: 30px; border: none;}
        .section-01 aside > .news-block{border-bottom: 1px dashed #000; padding-bottom: 19px;}
        .section-01 aside > .news-block:last-child{border-bottom: none; margin-bottom: 20px}
        .section-01 .card{border: none;}
        .section-01 .card-block{padding: 10px 0;}
        .section-01 .video-sec {float: left; margin-top: 30px; width: 100%;}
        .section-01 .video-block {float: left; margin-top: 20px; width: 100%;}

        .action-sec{width:100%; float:left; background:#222}
        .action-box{float:left; width:100%; text-align:center;}
        .action-box h2{color:#fff; font-size:20px;}
    </style>

@section('content')
<!-- First Parallax Section -->
<div class="jumbotron paral paralsec_news mt-5">
    <h1 class="display-3">Les news</h1>
</div>

<section class="banner-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card"> <img class="img-fluid" src="http://grafreez.com/wp-content/temp_demos/river/img/politics.jpg" alt="">
                    <div class="card-img-overlay"> <span class="badge badge-pill badge-danger">News</span> </div>
                    <div class="card-body">
                        <div class="news-title">
                            <h2 class=" title-small"><a href="#">Syria war: Why the battle for Aleppo matters</a></h2>
                        </div>
                        <p class="card-text"><small class="text-time"><em>3 mins ago</em></small></p>
                    </div>
                </div>
                <div class="card"> <img class="img-fluid" src="http://grafreez.com/wp-content/temp_demos/river/img/travel.jpg" alt="">
                    <div class="card-img-overlay"> <span class="badge badge-pill badge-danger">Politics</span> </div>
                    <div class="card-body">
                        <div class="news-title">
                            <h2 class=" title-small"><a href="#">Key Republicans sign letter warning against</a></h2>
                        </div>
                        <p class="card-text"><small class="text-time"><em>3 mins ago</em></small></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card"> <img class="img-fluid" src="http://grafreez.com/wp-content/temp_demos/river/img/business1.jpg" alt="">
                    <div class="card-img-overlay"> <span class="badge badge-pill badge-danger">Travel</span> </div>
                    <div class="card-body">
                        <div class="news-title">
                            <h2 class=" title-small"><a href="#">Obamacare Appears to Be Making People Healthier</a></h2>
                        </div>
                        <p class="card-text"><small class="text-time"><em>3 mins ago</em></small></p>
                    </div>
                </div>
                <div class="card"> <img class="img-fluid" src="http://grafreez.com/wp-content/temp_demos/river/img/food.jpg" alt="">
                    <div class="card-img-overlay"> <span class="badge badge-pill badge-danger">News</span> </div>
                    <div class="card-body">
                        <div class="news-title">
                            <h2 class=" title-small"><a href="#">‘S.N.L.’ to Lose Two Longtime Cast Members</a></h2>
                        </div>
                        <p class="card-text"><small class="text-time"><em>3 mins ago</em></small></p>
                    </div>
                </div>
            </div>
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
                        <div class="carousel-item active">
                            <div class="news-block">
                                <div class="news-media"><img class="img-fluid" src="http://grafreez.com/wp-content/temp_demos/river/img/politics1.jpg" alt=""></div>
                                <div class="news-title">
                                    <h2 class=" title-large"><a href="#">Ray madison may struggle to get best from Paul in a 4-2-3-1 formation</a></h2>
                                </div>
                                <div class="news-des">Condimentum ultrices mi est a arcu at cum a elementum per cum turpis dui vulputate vestibulum in vehicula montes vel. Mauris nam suspendisse consectetur mus...</div>
                                <div class="time-text"><strong>2h ago</strong></div>
                                <div></div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="news-block">
                                <div class="news-media"><img class="img-fluid" src="http://grafreez.com/wp-content/temp_demos/river/img/sport1.jpg" alt=""></div>
                                <div class="news-title">
                                    <h2 class=" title-large"><a href="#">An Alternative Form of Mental Health Care Gains a Foothold</a></h2>
                                </div>
                                <div class="news-des">Condimentum ultrices mi est a arcu at cum a elementum per cum turpis dui vulputate vestibulum in vehicula montes vel. Mauris nam suspendisse consectetur mus...</div>
                                <div class="time-text"><strong>2h ago</strong></div>
                                <div></div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="news-block">
                                <div class="news-media"><img class="img-fluid" src="http://grafreez.com/wp-content/temp_demos/river/img/health.jpg" alt=""></div>
                                <div class="news-title">
                                    <h2 class=" title-large"><a href="#">Key Republican Senator Says She Will Not Vote for former president!</a></h2>
                                </div>
                                <div class="news-des">Condimentum ultrices mi est a arcu at cum a elementum per cum turpis dui vulputate vestibulum in vehicula montes vel. Mauris nam suspendisse consectetur mus...</div>
                                <div class="time-text"><strong>2h ago</strong></div>
                                <div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-01">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <h3 class="heading-large">Plus anciennement...</h3>
                <div class="">
                    <div class="col-lg-6 card">
                        <div class="card"> <img class="img-fluid" src="http://grafreez.com/wp-content/temp_demos/river/img/war.jpg" alt="">
                            <div class="card-body">
                                <div class="news-title"><a href="#">
                                        <h2 class=" title-small">Minorities Suffer From Unequal Pain Treatment</h2>
                                    </a></div>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <p class="card-text"><small class="text-time"><em>3 mins ago</em></small></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 card">
                        <div class="card"> <img class="img-fluid" src="http://grafreez.com/wp-content/temp_demos/river/img/politics.jpg" alt="">
                            <div class="card-body">
                                <div class="news-title"><a href="#">
                                        <h2 class=" title-small">Minorities Suffer From Unequal Pain Treatment</h2>
                                    </a></div>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <p class="card-text"><small class="text-time"><em>3 mins ago</em></small></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 card">
                        <div class="card"> <img class="img-fluid" src="http://grafreez.com/wp-content/temp_demos/river/img/movie.jpg" alt="">
                            <div class="card-body">
                                <div class="news-title"><a href="#">
                                        <h2 class=" title-small">Minorities Suffer From Unequal Pain Treatment</h2>
                                    </a></div>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <p class="card-text"><small class="text-time"><em>3 mins ago</em></small></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 card">
                        <div class="card"> <img class="img-fluid" src="http://grafreez.com/wp-content/temp_demos/river/img/travel1.jpg" alt="">
                            <div class="card-body">
                                <div class="news-title"><a href="#">
                                        <h2 class=" title-small">Minorities Suffer From Unequal Pain Treatment</h2>
                                    </a></div>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <p class="card-text"><small class="text-time"><em>3 mins ago</em></small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <aside class="col-lg-4 side-bar col-md-12">
                <h3 class="heading-large">Notre facebook</h3>

                <!-- Tab panes -->
                <div class="tab-content sidebar-tabing" id="nav-tabContent">

                </div>
                <div class="video-sec">
                    <h4 class="heading-small">Nos photos</h4>
                    <div class="video-block">
                        <img class="img-fluid mx-auto d-block" src="img/500x300.png">
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>




<!-- Icons Grid -->
<section class="features-icons bg-light text-center">
    <div class="container">

        <div class="row">
            <div class="card mb-3">
                {!! Html::image('img/1280px-4LTrophy928.jpg', 'Pré-inscription confirmée !', array('class' => 'card-img-top')) !!}
                <div class="card-body">
                    <h5 class="card-title"><i class="fa fa-thumbs-up"></i> Pré-inscription confirmée !</h5>
                    <p class="card-text">Nous sommes officiellement pré-inscrit pour le 4L Trophy ! A nous maintenant de finir la création de notre site internet et de notre plaquette de présentation pour démarcher nos prochains sponsors ! Nous allons créer également prochainement une page <a href="">Hello Asso</a> afin que chacun puisse participer à son financement simplement.</p>
                    <p class="card-text"><small class="text-muted">Le 03 avril 2018 à 16h52</small></p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="card mb-3">
                {!! Html::image('img/1280px-4LTrophy928.jpg', 'Page Facebook créée', array('class' => 'card-img-top')) !!}
                <div class="card-body">
                    <h5 class="card-title"><i class="fa fa-thumbs-up"></i> Notre page Facebook a été créée !</h5>
                    <p class="card-text">Pour nous <strong>suivre</strong> plus facilement dans votre fil d'actualités, n'hésitez pas à <strong>aimer</strong> notre <a href="https://www.facebook.com/Les4Tiches/">notre Page Facebook</a>. Nous y posterons les dernières nouveautés de l'application, ainsi que le suivi de la préparation du <strong>projet</strong> (association, achat de la 4L, nouveaux sponsors, ...)</p>
                    <p class="card-text"><small class="text-muted">Le 01 avril 2018</small></p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="card mb-3">
                {!! Html::image('img/1280px-4LTrophy928.jpg', 'Pré-inscription envoyée !', array('class' => 'card-img-top')) !!}
                <div class="card-body">
                    <h5 class="card-title"><i class="fa fa-thumbs-up"></i> Pré-inscription envoyée !</h5>
                    <p class="card-text">Notre dossier de pré-inscription a été transmis au 4L Trophy sous le nom de notre association : Les 4Tiches. Ce dernier sera aussi notre nom d'équipage. Attendons la fin de ce week-end de 3 jours, pour avoir plus de nouvelles.</p>
                    <p class="card-text"><small class="text-muted">Le 01 avril 2018</small></p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="card mb-3">
                {!! Html::image('img/1280px-4LTrophy928.jpg', 'Association créée', array('class' => 'card-img-top')) !!}
                <div class="card-body">
                    <h5 class="card-title"><i class="fa fa-building"></i> Création de l'association !</h5>
                    <p class="card-text">Ca y'est, la demande de création de l'association <strong>Les 4Tiches</strong> a été faite ! Plus qu'à attendre une confirmation de l'enresgitrement dans le <strong>JOAFE</strong> (JOURNAL OFFICIEL DES ASSOCIATIONS ET FONDATIONS D'ENTREPRISE) pour une inscription officiellement définitive.</p>
                    <p class="card-text"><small class="text-muted">Le 01 avril 2018</small></p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('javascript')
<script>
    $(window).load(function() {
        var boxheight = $('#myCarousel .carousel-inner').innerHeight();
        var itemlength = $('#myCarousel .item').length;
        var triggerheight = Math.round(boxheight/itemlength+1);
        $('#myCarousel .list-group-item').outerHeight(triggerheight);
    });

    var monthNames = [ "January", "February", "March", "April", "May", "June",
        "July", "August", "September", "October", "November", "December" ];
    var dayNames= ["Sun","Mon","Tue","Wed","Thu","Fri","Sat"]

    var newDate = new Date();
    newDate.setDate(newDate.getDate() + 1);
    $('#Date').html(dayNames[newDate.getDay()] + ", " + newDate.getDate() + ' ' + monthNames[newDate.getMonth()] + ' ' + newDate.getFullYear());
</script>
@endsection