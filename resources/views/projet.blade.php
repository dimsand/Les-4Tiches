@extends('layouts.layout')

@section('title', 'Le projet')

@section('content')
<!-- First Parallax Section -->
{{--<div class="jumbotron paral paralsec2 mt-5">--}}
    {{--<h1 class="display-3">Défi d’un soir pour une aventure unique</h1>--}}
{{--</div>--}}

<!-- Icons Grid -->
<div class="jumbotron paral paralsec-projet text-white text-center">
    <section class="features-icons bg-light-transp text-center mt-5 container">
        <div class="row p-5">
            <div class="col-lg-12">
                <h2 class="graduate_font color_red">Défi d’un soir pour une aventure unique</h2>
            </div>
        </div>
        <div class="row p-5">
            <div class="col-lg-3">
                {!! Html::image('img/volunteer.png', 'Amitié', array('class' => 'm-auto')) !!}
            </div>
            <div class="col-lg-9 mt-1">
                <p class="text-justify color_brown fs-18">Si nous devions conter notre histoire, elle débuterait en <span class="font-weight-bold color_red">septembre 2007</span>. Voilà maintenant <span class="font-weight-bold color_red">11 ans</span> que nous avançons ensemble. Et ce, même quand les études nous ont divisées. En effet, depuis septembre 2017, près de 600 km séparent nos domiciles. Le <span class="font-weight-bold color_red">4L Trophy</span> sera une excellente façon de nous retrouver. Cette longue fraternité constituera une force pour les épreuves du raid. </p>
            </div>
        </div>

        <div class="row p-5">
            <div class="col-lg-3 d-lg-none">
                {!! Html::image('img/hands.png', 'Aide', array('class' => 'm-auto')) !!}
            </div>
            <div class="col-lg-9 mt-1">
                <p class="text-justify color_brown2 fs-18">A ce jour, <span class="font-weight-bold color_red">60 millions d’enfants</span> ne sont pas scolarisés. Au lieu de ça, pour aider leurs familles, ils travaillent : une situation impensable pour leurs âges. En participant au <span class="font-weight-bold color_red">4L Trophy</span>, nous contribuons, en collaboration avec l’association <a href="https://enfantsdudesert.org/"><span class="font-weight-bold color_red">Enfants du Désert</span></a>, à l’amélioration de l’enseignement des enfants du Sud-Est marocain. </p>
            </div>
            <div class="col-lg-3 d-none d-lg-block">
                {!! Html::image('img/hands.png', 'Aide', array('class' => 'm-auto')) !!}
            </div>
        </div>

        <div class="row p-5">
            <div class="col-lg-3">
                {!! Html::image('img/trophy.png', 'Un raid sportif', array('class' => 'm-auto')) !!}
            </div>
            <div class="col-lg-9 mt-1">
                <p class="text-justify color_brown fs-18">L’aventure à laquelle nous voulons participer, nous ne voulons pas que nous nous la racontions. Nous voulons la <span class="font-weight-bold color_red">vivre</span> ! Quitter notre vie pendant <span class="font-weight-bold color_red">10 jours</span>, traverser <span class="font-weight-bold color_red">3 pays</span> et parcourir plus de <span class="font-weight-bold color_red">7000 km</span>. C’est ce que nous nous apprêtons à expérimenter. Une aventure agrémentée de ses péripéties mais surtout de <span class="font-weight-bold color_red">rencontres</span> et d’<span class="font-weight-bold color_red">échanges</span>. Et c’est ce que nous retiendrons !</p>
            </div>
        </div>
    </section>
</div>

@endsection