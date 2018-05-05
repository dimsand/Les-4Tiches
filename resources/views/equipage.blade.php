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
                <p>A venir...</p>
            </div>
        </div>
    </div>
</section>
@endsection