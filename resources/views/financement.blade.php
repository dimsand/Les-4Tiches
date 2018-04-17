@extends('layouts.layout')

@section('title', 'Financement')

@section('content')

<div class="jumbotron paral paralsec_financ mt-5">
    <h1 class="display-3">Nous soutenir</h1>
</div>

<!-- Icons Grid -->
<section class="features-icons bg-light text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <iframe id="haWidget" allowtransparency="true" src="https://www.helloasso.com/associations/les-4tiches/collectes/participation-au-raid-4l-trophy/widget" onload="window.scroll(0, this.offsetTop)"></iframe><div class="haPropulsedBy">Propulsé par <a href="https://www.helloasso.com" rel="nofollow">HelloAsso</a></div>
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
                            <h3>Par chèque</h3>
                            <p class="lead mb-0">Un simple don d'argent</p>
                            <p class="font-weight-normal">Qui sera utilisé correctement.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="features-icons-icon d-flex" style="margin-bottom: 60px;">
                                {!! Html::image('img/helloasso-logo-couleurs-2015.png', 'Via notre financement participatif', array('class' => 'm-auto', 'style' => 'width: 100% !important; height: auto;')) !!}
                            </div>
                            <h3>Via notre financement participatif</h3>
                            <p class="lead mb-0">Hello Asso</p>
                            <p class="font-weight-normal">Une méthode simple pour tous les budgets</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                            <div class="features-icons-icon d-flex" style="margin-bottom: 60px;">
                                {!! Html::image('img/donation.png', 'En nature', array('class' => 'm-auto', 'style' => 'width: 100% !important; height: auto;')) !!}
                            </div>
                            <h3>En nature</h3>
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
            backgroundColor:'rgba(255, 255, 255, 0.0)'
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