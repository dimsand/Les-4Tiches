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
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Nom du sponsor</h5>
                                    <div class="row">
                                        <div class="col-xs-3 col-md-3 text-center">
                                            <div class="text-center">
                                                <img src="http://bootsnipp.com/apple-touch-icon-114x114-precomposed.png" class="rounded" alt="Nom sponsor">
                                            </div>
                                            <a href="#" class="btn btn-primary mt-2">Site internet</a>
                                        </div>
                                        <div class="col-xs-9 col-md-9 section-box text-justify">
                                            <p>
                                                Présentation de l'activité du sponsor. Présentation de l'activité du sponsor. Présentation de l'activité du sponsor. Présentation de l'activité du sponsor. Présentation de l'activité du sponsor.
                                            </p>
                                            <hr/>
                                            <div class="row rating-desc">
                                                <div class="col-md-12">
                                                    5 chemin de la ville
                                                    XXXXX VILLE
                                                </div>
                                            </div>
                                            <hr/>
                                            <div class="row rating-desc">
                                                <div class="col-md-12">
                                                    <span class="glyphicon glyphicon-heart"></span><span
                                                            class="glyphicon glyphicon-heart">
                                </span><span class="glyphicon glyphicon-heart"></span><span
                                                            class="glyphicon glyphicon-heart">
                                </span><span class="glyphicon glyphicon-heart"></span>(36)<span
                                                            class="separator">|</span>
                                                    <span class="glyphicon glyphicon-comment"></span>(100 Comments)
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection