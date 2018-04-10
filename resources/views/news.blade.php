@extends('layouts.layout')

@section('title', 'News')

@section('content')

<div class="jumbotron paral paralsec_news mt-5">
    <h1 class="display-3">Les news</h1>
</div>

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