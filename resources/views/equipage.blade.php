@extends('layouts.layout')

@section('title', 'L\'équipage')

@section('content')

<div class="jumbotron paral paralsec_equipage mt-5">
    <h1 class="display-3">L'équipage</h1>
</div>

<section class="features-icons bg-light text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <a href="{{ "/docs/Frise Chrono Les 4Tiches - v3.pdf" }}" target="_blank"><img src="img/Frise Chrono Les 4Tiches - v3.png" style="border-radius: 10px; width: 100%; height: auto;"></a>
            </div>
        </div>
    </div>
</section>

<div class="jumbotron paral paralsec_notre_4l">
    <h1 class="display-3">Notre 4L</h1>
</div>

<section class="features-icons bg-light text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <img src="img/image_4l.jpg" alt="Notre 4L" class="img-thumbnail">
                <p class="mt-3 pl-5 pr-5">La voici, la voilà, notre troisième coéquipière avec qui nous allons traverser le désert marocain pour acheminer fournitures scolaires et équipements sportifs aux enfants les plus défavorisés. 🚗<p>
                <p>
                    <span class="badge badge-pill badge-warning">Renault R4</span>
                    <span class="badge badge-pill badge-danger">34CV</span>
                    <span class="badge badge-pill badge-warning">1108cm3</span>
                    <span class="badge badge-pill badge-danger">Année 1982</span>
                </p>
            </div>
        </div>
    </div>
</section>
@endsection