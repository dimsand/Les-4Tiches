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
                        <div class="col-sm-12 col-md-12" id="copie-conforme">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Copie Conforme</h5>

                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-lg-12 text-center">
                                            <div class="text-center">
                                                <img src="img/sponsors/logo-copie-conforme.jpg" class="rounded"
                                                     alt="Copie Conforme" style="width: 100%;">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-lg-12 mt-3 section-box text-justify">
                                            <p>
                                                <strong>Activité : </strong> Réalisation de tout type de travaux
                                                d'impressions, de la carte de visite jusqu'à la personnalisation de
                                                tee-shirts. Nombreuses imprimantes pour photocopies et impressions
                                                disponibles.
                                            </p>
                                            <a href="http://copieconformetoulouse.fr/" target="_blank" class="btn btn-primary mt-2 btn-sm">Site internet <i class="fa fa-external-link"></i></a>
                                            <hr/>
                                            <div class="row rating-desc">
                                                <div class="col-md-5">
                                                        <img src="img/sponsors/enseigne-copie-conforme.jpg" alt="Enseigne Copie Conforme" style="width: 100%;">
                                                </div>
                                                <div class="col-md-7">
                                                    144 Grande rue Saint-Michel<br>
                                                    31400 Toulouse
                                                </div>
                                            </div>
                                            <hr/>
                                            <div class="row rating-desc">
                                                <div class="col-md-12">
                                                    <div class="alert alert-secondary" role="alert">
                                                        <i class="fa fa-money"></i> <strong>Don en nature.</strong> Nous remercions fortement le gérant de  l'enseigne, Hervé Salmon, qui réalisera tous nos travaux d'impressions (autocollants 4L, affiches et prospectus de présentation).
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="text-center mt-3" style="width: 100%;">
                            <hr style="margin: 20px 25%;">
                        </div>

                        <div class="text-center mt-3" style="width: 100%;">
                            Si vous souhaitez participer à l'aventure tout en donnant de la visibilité à votre
                            entreprise durant le Raid,<br>
                            contactez-nous via le formulaire en bas de page, ou via la page de <a
                                    href="{{ route('contact') }}">contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection