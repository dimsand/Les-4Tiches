@extends('layouts.layout')

@section('title', 'Financement')

@section('content')

<div class="jumbotron paral paralsec2 mt-5">
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

<div class="jumbotron paral paralsec3">
    <h1 class="display-3">Budget souhaité</h1>
</div>

<section class="features-icons bg-light text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div id="graph_container"></div>
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
            }
        },
        credits: false,
        title: {
            text: null
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
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
            name: 'Browser share',
            data: [
                ['Firefox', 45.0],
                ['IE', 26.8],
                {
                    name: 'Chrome',
                    y: 12.8,
                    sliced: true,
                    selected: true
                },
                ['Safari', 8.5],
                ['Opera', 6.2],
                ['Others', 0.7]
            ]
        }]
    });
</script>
@endsection