@extends('layouts.layout')

@section('title', 'Financement')

@section('content')

    <div class="jumbotron paral paralsec_financ mt-5">
        <h1 class="display-3">Pourquoi nous soutenir ?</h1>
    </div>

    <!-- Icons Grid -->
    <section class="features-icons bg-light text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="lead">Ci-dessous la vidéo présentant le raid 4L Trophy :</p>
                    <div class="facebook-responsive">
                        <iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2F4l.trophy.officiel%2Fvideos%2F10156479583703846%2F&show_text=0&width=560"
                            width="560" height="315" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                            allowTransparency="true" allowFullScreen="true"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="jumbotron paral paralsec-medias text-center">
        <section class="features-icons bg-light-transp text-center mt-0 container">
            <div class="row p-4">
                <div class="col-lg-12">
                    <h2 class="graduate_font color_red mb-3">Les retombées médiatiques</h2>
                    <h4 class="color_brown2 mt-4">Télévision, radios, presse, ...</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon d-flex">
                            {!! Html::image('img/media/Turbo_Logo.png', 'Amitié', array('class' => 'm-auto')) !!}
                        </div>
                        <h3>Turbo - M6</h3>
                        <p class="lead mb-0 color_brown2">« Le plus grand Rallye étudiant au Monde »</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon d-flex">
                            {!! Html::image('img/media/Télématin_logo.png', 'Amitié', array('class' => 'm-auto')) !!}
                        </div>
                        <h3>Télématin – France 2</h3>
                        <p class="lead mb-0 color_brown2">« Une aventure exceptionnelle »</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon d-flex">
                            {!! Html::image('img/media/Logo_JT_13H_TF1.png', 'Amitié', array('class' => 'm-auto')) !!}
                        </div>
                        <h3>Journal de 13h – TF1</h3>
                        <p class="lead mb-0 color_brown2">« L’école de la débrouille »</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon d-flex">
                            {!! Html::image('img/media/DKlAS_wW4AEqeVh.png', 'Amitié', array('class' => 'm-auto')) !!}
                        </div>
                        <h3>Auto Moto – TF1</h3>
                        <p class="lead mb-0 color_brown2">« Belle aventure humaine et solidaire »</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon d-flex">
                            {!! Html::image('img/media/MelloPlot-CNews-Matin.png', 'Amitié', array('class' => 'm-auto')) !!}
                        </div>
                        <h3>CNEWS Matin</h3>
                        <p class="lead mb-0 color_brown2">« Le 4L Trophy : un périple sportif et solidaire » </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon d-flex">
                            {!! Html::image('img/media/dauphiné-libéré.png', 'Amitié', array('class' => 'm-auto')) !!}
                        </div>
                        <h3>Le Dauphiné</h3>
                        <p class="lead mb-0 color_brown2">« (…)10 jours d’expédition intense »</p>
                    </div>
                </div>
            </div>
            <div class="float-center color_brown"><i class="fa fa-external-link"></i> {{ HTML::link("img/Retombees media 4L 2017.jpg", "Retombées médiatiques 4L Trophy 2017", array('class'=>'link-unstyled color_brown', 'target'=>'_blank')) }}</div>
        </section>
    </div>

    <div class="jumbotron paral paralsec_financ mt-5">
        <h1 class="display-3">Nous soutenir via <a class="link-unstyled text-white" target="_blank" href="https://www.helloasso.com/associations/les-4tiches/collectes/participation-au-raid-4l-trophy" rel="nofollow">HelloAsso</a></h1>
    </div>

    <!-- Icons Grid -->
    <section class="features-icons bg-light text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <iframe id="haWidget" allowtransparency="true"
                            src="https://www.helloasso.com/associations/les-4tiches/collectes/participation-au-raid-4l-trophy/widget"
                            onload="window.scroll(0, this.offsetTop)"></iframe>
                    <div class="haPropulsedBy">Propulsé par <a class="link-unstyled color_brown"
                                                               href="https://www.helloasso.com/associations/les-4tiches/collectes/participation-au-raid-4l-trophy"
                                                               rel="nofollow">HelloAsso</a></div>
                </div>
            </div>
        </div>
    </section>

    <div class="jumbotron paral paralsec_budget">
        <h1 class="display-3">Comment nous aider ?</h1>
    </div>

    <section class="features-icons bg-light text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div id="graph_container"></div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                                <div class="features-icons-icon d-flex" style="margin-bottom: 60px;">
                                    {!! Html::image('img/cheque.png', 'Par chèque', array('class' => 'm-auto', 'style' => 'width: 100% !important; height: auto;')) !!}
                                </div>
                                <h5>Par chèque</h5>
                                <p class="lead mb-0">Un simple don d'argent</p>
                                <p class="font-weight-normal">Nous contacter</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                                <div class="features-icons-icon d-flex" style="margin-bottom: 60px;">
                                    {!! Html::image('img/helloasso-logo-couleurs-2015.png', 'Via notre financement participatif', array('class' => 'm-auto', 'style' => 'width: 100% !important; height: auto;')) !!}
                                </div>
                                <h5>Via notre financement participatif</h5>
                                <p class="lead mb-0"><a target="_blank"
                                                        href="https://www.helloasso.com/associations/les-4tiches/collectes/participation-au-raid-4l-trophy">Hello
                                        Asso</a></p>
                                <p class="font-weight-normal">Une méthode simple pour tous les budgets</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                                <div class="features-icons-icon d-flex" style="margin-bottom: 60px;">
                                    {!! Html::image('img/donation.png', 'En nature', array('class' => 'm-auto', 'style' => 'width: 100% !important; height: auto;')) !!}
                                </div>
                                <h5>En nature</h5>
                                <p class="lead mb-0">(fournitures scolaires, équipements sportifs, ...)</p>
                                <p class="font-weight-normal">Pour les écoles du sud-est marocain</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('javascript')
    <script>
        Highcharts.chart('graph_container', {
            chart: {
                type: 'pie',
                options3d: {
                    enabled: true,
                    alpha: 45,
                    beta: 0
                },
                backgroundColor: 'rgba(255, 255, 255, 0.0)'
            },
            credits: false,
            title: {
                text: null
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.0f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    depth: 35,
                    dataLabels: {
                        enabled: true,
                        format: '{point.name}'
                    }
                }
            },
            series: [{
                type: 'pie',
                name: "Part du budget",
                data: [
                    ['Inscription', 3200],
                    {
                        name: 'Achat + Préparation 4L',
                        y: 3500,
                        sliced: true,
                        selected: true
                    },
                    ['Essence / Péages', 1000],
                    ['Assurances', 350],
                    ['Fournitures scolaires', 300],
                    ['Divers', 250]
                ]
            }]
        });
    </script>
@endsection