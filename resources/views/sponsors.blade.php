@extends('layouts.layout')

@section('title', 'Nos sponsors')

@section('content')

    <div class="jumbotron paral paralsec2 mt-5">
        <h1 class="display-3">Ils nous ont fait confiance</h1>
    </div>

    <section class="features-icons bg-light text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="text-center" style="width: 100%;">
                            Qui ne se lasse point vient à bout de tout. <br><em>Proverbe espagnol - Maximes et sentences espagnoles (1859)</em>
                        </div>

                        <div class="text-center mt-3" style="width: 100%;">
                            <hr style="margin: 20px 25%;">
                        </div>

                        <div class="text-center mt-3" style="width: 100%;">
                            Si vous souhaitez participez à l'aventure tout en donnant de la visibilité à votre entreprise durant le Raid,<br>
                            contactez-nous via le formulaire en bas de page, ou via la page de <a href="{{ route('contact') }}">contact</a>
                        </div>

                        <div class="col-sm-12 col-md-6">
                            {{--<div class="card">--}}
                                {{--<div class="card-body">--}}
                                    {{--<h5 class="card-title">Nom du sponsor</h5>--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-xs-3 col-sm-12 col-lg-3 text-center">--}}
                                            {{--<div class="text-center">--}}
                                                {{--<img src="http://bootsnipp.com/apple-touch-icon-114x114-precomposed.png" class="rounded" alt="Nom sponsor">--}}
                                            {{--</div>--}}
                                            {{--<a href="#" class="btn btn-primary mt-2 btn-sm">Site internet <i class="fa fa-external-link"></i></a>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-xs-9 col-sm-12 col-lg-8 d-sm-none d-lg-block ml-3 section-box text-justify">--}}
                                            {{--<p>--}}
                                                {{--Présentation de l'activité du sponsor. Présentation de l'activité du sponsor. Présentation de l'activité du sponsor. Présentation de l'activité du sponsor. Présentation de l'activité du sponsor.--}}
                                            {{--</p>--}}
                                            {{--<hr/>--}}
                                            {{--<div class="row rating-desc">--}}
                                                {{--<div class="col-md-12">--}}
                                                    {{--5 chemin de la ville--}}
                                                    {{--XXXXX VILLE--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<hr/>--}}
                                            {{--<div class="row rating-desc">--}}
                                                {{--<div class="col-md-12">--}}
                                                    {{--<div class="alert alert-secondary" role="alert">--}}
                                                        {{--<i class="fa fa-money"></i> <strong>Don :</strong> 150 €--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-xs-9 col-sm-12 col-lg-8 d-none d-sm-block d-lg-none mt-2 section-box text-justify">--}}
                                            {{--<p>--}}
                                                {{--Présentation de l'activité du sponsor. Présentation de l'activité du sponsor. Présentation de l'activité du sponsor. Présentation de l'activité du sponsor. Présentation de l'activité du sponsor.--}}
                                            {{--</p>--}}
                                            {{--<hr/>--}}
                                            {{--<div class="row rating-desc">--}}
                                                {{--<div class="col-md-12">--}}
                                                    {{--5 chemin de la ville--}}
                                                    {{--XXXXX VILLE--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<hr/>--}}
                                            {{--<div class="row rating-desc">--}}
                                                {{--<div class="col-md-12">--}}
                                                    {{--<div class="alert alert-secondary" role="alert">--}}
                                                        {{--<i class="fa fa-money"></i> <strong>Don :</strong> 150 €--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection