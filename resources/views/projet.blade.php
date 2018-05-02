@extends('layouts.layout')

@section('title', 'Le projet')

@section('stylesheet')
<style>
    .google-wrapper {
        position: relative;
    }
    #map{
        width: 100%;
        height: 55vh;
    }
    #google-map-overlay {
        width  : 100%;
        height : 55vh;
        background: #ababab;
        position: absolute;
        opacity: 0.3;
        top: 0px;
        left: 0px;
        z-index: 99;
        -webkit-transition: opacity 1s linear;
        -moz-transition: opacity 1s linear;
        -ms-transition: opacity 1s linear;
        -o-transition: opacity 1s linear;
        transition: opacity 1s linear;
    }
    #google-map-overlay:hover {
        opacity: 0.05;
    }
</style>
@endsection

@section('content')

<div class="jumbotron paral paralsec-projet text-white text-center">
    <section class="features-icons bg-light-transp text-center mt-5 container">
        <div class="row p-5">
            <div class="col-lg-12">
                <h2 class="graduate_font color_red mb-3">Défi d’un soir pour une aventure unique</h2>
                <h4 class="color_brown2 mt-4">Nos 3 mots d'ordre</h4>
            </div>
        </div>
        <div class="row p-5 arimo_font">
            <div class="col-lg-3">
                <div class="features-icons-icon d-flex">
                    {!! Html::image('img/volunteer.png', 'Amitié', array('class' => 'm-auto')) !!}
                </div>
                <p class="color_brown">Amitié</p>
            </div>
            <div class="col-lg-9 mt-1">
                <p class="text-justify color_brown fs-18">Si nous devions conter notre histoire, elle débuterait en <span class="font-weight-bold color_red">septembre 2007</span>. Voilà maintenant <span class="font-weight-bold color_red">11 ans</span> que nous avançons ensemble. Et ce, même quand les études nous ont divisées. En effet, depuis septembre 2017, près de 600 km séparent nos domiciles. Le <span class="font-weight-bold color_red">4L Trophy</span> sera une excellente façon de nous retrouver. Cette longue fraternité constituera une force pour les épreuves du raid. </p>
            </div>
        </div>

        <div class="row p-5 arimo_font">
            <div class="col-lg-3 d-lg-none features-icons-item">
                <div class="features-icons-icon d-flex">
                    {!! Html::image('img/hands.png', 'Aide', array('class' => 'm-auto')) !!}
                </div>
                <p class="color_brown">Aide</p>
            </div>
            <div class="col-lg-9 mt-1">
                <p class="text-justify color_brown2 fs-18">A ce jour, <span class="font-weight-bold color_red">60 millions d’enfants</span> ne sont pas scolarisés. Au lieu de ça, pour aider leurs familles, ils travaillent : une situation impensable pour leurs âges. En participant au <span class="font-weight-bold color_red">4L Trophy</span>, nous contribuons, en collaboration avec l’association <a href="https://enfantsdudesert.org/"><span class="font-weight-bold color_red">Enfants du Désert</span></a>, à l’amélioration de l’enseignement des enfants du Sud-Est marocain. </p>
            </div>
            <div class="col-lg-3 d-none d-lg-block features-icons-item">
                <div class="features-icons-icon d-flex">
                    {!! Html::image('img/hands.png', 'Aide', array('class' => 'm-auto')) !!}
                </div>
                <p class="color_brown">Aide</p>
            </div>
        </div>

        <div class="row p-5 arimo_font">
            <div class="col-lg-3">
                <div class="features-icons-icon d-flex">
                    {!! Html::image('img/trophy.png', 'Aventure', array('class' => 'm-auto')) !!}
                </div>
                <p class="color_brown">Aventure</p>
            </div>
            <div class="col-lg-9 mt-1">
                <p class="text-justify color_brown fs-18">L’aventure à laquelle nous voulons participer, nous ne voulons pas que nous nous la racontions. Nous voulons la <span class="font-weight-bold color_red">vivre</span> ! Quitter notre vie pendant <span class="font-weight-bold color_red">10 jours</span>, traverser <span class="font-weight-bold color_red">3 pays</span> et parcourir plus de <span class="font-weight-bold color_red">7000 km</span>. C’est ce que nous nous apprêtons à expérimenter. Une aventure agrémentée de ses péripéties mais surtout de <span class="font-weight-bold color_red">rencontres</span> et d’<span class="font-weight-bold color_red">échanges</span>. Et c’est ce que nous retiendrons !</p>
            </div>
        </div>
    </section>
</div>

<!-- Icons Grid -->
<section class="features-icons text-center bg-yellow-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p class="lead">Présentation officielle 4L Trophy 2019</p>
                <div class="facebook-responsive">
                    <iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2F4l.trophy.officiel%2Fvideos%2F10156521420758846%2F&show_text=0&width=560" width="560" height="315" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="google-wrapper">
    <div id="map"></div>
    <div id="google-map-overlay">
</div>

@endsection

@section('javascript')
<script>
    function initMap() {
        const map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 38.90230847621309, lng: -0.393521881103549},
            zoom: 5,
            styles: [
                {
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#ebe3cd"
                        }
                    ]
                },
                {
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#523735"
                        }
                    ]
                },
                {
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "color": "#f5f1e6"
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#c9b2a6"
                        }
                    ]
                },
                {
                    "featureType": "administrative.land_parcel",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#dcd2be"
                        }
                    ]
                },
                {
                    "featureType": "administrative.land_parcel",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#ae9e90"
                        }
                    ]
                },
                {
                    "featureType": "landscape.natural",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#dfd2ae"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#dfd2ae"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#93817c"
                        }
                    ]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#a5b076"
                        }
                    ]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#447530"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#f5f1e6"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#fdfcf8"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#f8c967"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#e9bc62"
                        }
                    ]
                },
                {
                    "featureType": "road.highway.controlled_access",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#e98d58"
                        }
                    ]
                },
                {
                    "featureType": "road.highway.controlled_access",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#db8555"
                        }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#806b63"
                        }
                    ]
                },
                {
                    "featureType": "transit.line",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#dfd2ae"
                        }
                    ]
                },
                {
                    "featureType": "transit.line",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#8f7d77"
                        }
                    ]
                },
                {
                    "featureType": "transit.line",
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "color": "#ebe3cd"
                        }
                    ]
                },
                {
                    "featureType": "transit.station",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#dfd2ae"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#b9d3c2"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#92998d"
                        }
                    ]
                }
            ]
        });
        const directionsService = new google.maps.DirectionsService;
        const directionsDisplay = new google.maps.DirectionsRenderer({
            polylineOptions: {
                strokeColor: "#ff5c5c",
            },
            suppressMarkers: true
        });
        const pointLyon = new google.maps.LatLng(45.764043, 4.835658999999964),
            pointMarrakech = new google.maps.LatLng(31.6294723, -7.981084499999952);
        const markerLyon = new google.maps.Marker({
                position: pointLyon,
                title: "Départ",
                label: "Départ",
                map: map,
                icon: null
            }),
            markerMarakech = new google.maps.Marker({
                position: pointMarrakech,
                title: "Arrivée",
                label: "Arrivée",
                map: map,
                icon: "https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png"
            });
        // get route from A to B
        calculateAndDisplayRoute(directionsService, directionsDisplay, pointLyon, pointMarrakech);
        directionsDisplay.setMap(map);
    }

    function calculateAndDisplayRoute(directionsService, directionsDisplay, pointA, pointB) {
        directionsService.route({
            origin: pointA,
            destination: pointB,
            travelMode: google.maps.TravelMode.DRIVING
        }, function (response, status) {
            if (status == google.maps.DirectionsStatus.OK) {
                console.log(response);
                directionsDisplay.setDirections(response);
            } else {
                window.alert('Directions request failed due to ' + status);
            }
        });
    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDvP14jqA8gnxJmnTINe_VQKciUGW8gOkk&callback=initMap"></script>
@endsection