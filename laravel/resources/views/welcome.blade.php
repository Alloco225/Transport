@extends('layouts.app')

@section('content')
    <div class="mx-auto">
        <section id="showcase">
            <div id="carousel-slider" class="carousel slide" data-ride="carousel" data-pause="hover">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-slider" data-slide-to="1"></li>
                    <li data-target="#carousel-slider" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="img/slide1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/slide2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/slide3.jpg" alt="Third slide">
                    </div>
                </div>
            </div><!-- /Carousel -->
            <!-- Show case text -->
            <div id="showcase-overlay" class="container d-flex justify-content-between">
                <div class="col-md-5 py-1 bg-light_orange">
                    <!-- Header -->
                    <div class="row my-2">
                        <div class="col-md-6">
                            <h4>Acheter un billet</h4>
                        </div>
                        <!-- Aller-Retour | Aller-Simple -->
                        <div class="col-md-6">
                            <div class="btn-group btn-group-sm">
                                <!-- <button type="button" class="btn bg-orange">Aller-Retour</button> -->
                                <button type="button" class="btn bg-orange">Aller Simple</button>
                            </div>
                        </div>
                    </div>

                    <!-- Formulaire -->
                    <form action="" role="form" class="form">

                        <!-- Depart | Arrivée -->
                        <div class="row form-group">
                            <!-- Depart -->
                            <div class="col-sm-6 input-group">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="fa fa-map-marker"></i>
                                    </span>
                                </div>
                                <input type="text" id="departure" class="form-control" placeholder="Départ de">
                            </div>
                            <!-- Arrivee -->
                            <div class="col-sm-6 input-group">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="fa fa-flag"></i>
                                    </span>
                                </div>
                                <input type="text" id="arrival" class="form-control" placeholder="Arrivée à">
                            </div>
                        </div> <!--  -->
                        <!-- Date Range -->
                        <div class="row form-group">
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                    </div>
                                    <input type="date" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                    </div>
                                    <input type="date" class="form-control" placeholder="">
                                </div>
                            </div>
                        </div>
                        <input type="submit" class="btn bg-orange w-100" value="Rechercher">
                    </form>
                </div> <!-- col-md-5 -->
                <div class="col-md-5 bg-light py-2 bg-light_orange">
                    <h5>Un peu de texte en fonction de l'image du slide</h5>
                    <p>Ca peut parler de la rapidité du service de libraison, du suivi en temps réel de la position du car,
                        de la sécurité du transport, du professionalisme des employés, des services à bord, bref
                    </p>
                    <a href="" class="btn bg-orange w-100 text-light">Découvrir</a>
                </div> <!-- col-md-5 -->
            </div> <!-- Row -->
        </section><!-- /#Showcase -->
        <!-- Promotions -->
        <section id="promotions">
            <div class="container col-md-10 mx-auto">
                <h3 class="display-4 text-uppercase text-center orange">Promotions</h3>
                <div class="row">
                    <div class="col-9">
                        <h4 class="display-4">Nom de la promotion</h4>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-4 font-weight-bold display-2">
                                    -90%
                                </div>
                                <div class="col">
                                    <h2 class="">Sur <span>$destination</span></h2>
                                    <div class="row">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero alias molestias
                                            a repellendus qui quaerat totam tempore nam, quia ab dicta maiores in dolore
                                            veritatis?
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <img src="img/bouake.jpg" alt="">
                    </div>
                </div>
            </div><!--  -->
        </section><!-- /#Promotions -->
        <!-- Promo Destinations -->
        <section id="destinations-promo" class="container-fluid pt-2 my-2 bg-corail text-dark">
            <div class="row d-flex justify-content-around">
                @foreach ($cities_to_show as $city)
                <div class="col-3 bg-light">
                    <h5 class="display-4 orange">{{$city->name}}</h5>
                    <div class="row">
                        <div class="display-2">-50%</div>
                    </div>
                    <div class="row">
                        <p class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, incidunt voluptatem!
                            Fugiat eum temporibus esse debitis, iure inventore asperiores eos tempora! Corporis, est velit
                            suscipit sequi perspiciatis rem repudiandae ipsum?</p>
                    </div>
                    <div class="row justify-content-center my-1">
                        <a href="" class="btn bg-orange text-light w-80">J'en profite</a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row justify-content-center my-2 bg-light">
                <a href="" class="orange h4">Voir toutes les promotions</a>
            </div>
        </section>
        <!-- Meilleures Destinations -->
        <section id="destinations" class="container-fluid pt-2 my-2 bg-light">
            <div class="row d-flex justify-content-around">
                @foreach ($cities_to_show as $city_to_show)
                <div class="col-md-3">
                    <div class="card">
                        <img src="img/city-day.jpeg" alt="" class="card-img-top">
                        <div class="card-footer">
                            <p>A partir de 6000F</p>
                            <p>{{$city_to_show->name}}, Cote d'Ivoire</p>
                        </div>
                    </div>
                </div>
                @endforeach
                {{-- <div class="col-md-3">
                    <div class="card">
                        <img src="img/city-dark-lights-8047.jpg" alt="" class="card-img-top">
                        <div class="card-footer">
                            <p>A partir de 6000F</p>
                            <p>Daloa, Cote d'Ivoire</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="img/city-buildings.jpeg" alt="" class="card-img-top">
                        <div class="card-footer">
                            <p>A partir de 6000F</p>
                            <p>Daloa, Cote d'Ivoire</p>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="row justify-content-center my-2 bg-light">
                <a href="" class="orange h4" id="hover-link-destinations">Voir toutes les destinations</a>

                <script>
                    $(document).ready(function () {
                        $('#hover-link-destinations').hover(function () {
                            $('#hidden-destinations').toggle();
                        });
                    });
                </script>
            </div>
            <div class="destinations" id="hidden-destinations" style="display:none;">
                <div class="row d-flex justify-content-around">
                        <div class="col-md-3">
                            <div class="card">
                                <img src="img/city-day.jpeg" alt="" class="card-img-top">
                                <div class="card-footer">
                                    <p>A partir de 6000F</p>
                                    <p>Daloa, Cote d'Ivoire</p>
                                </div>
                            </div>
                        </div>
                    {{-- <div class="col-md-3">
                        <div class="card">
                            <img src="img/city-dark-lights-8047.jpg" alt="" class="card-img-top">
                            <div class="card-footer">
                                <p>A partir de 6000F</p>
                                <p>Daloa, Cote d'Ivoire</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img src="img/city-buildings.jpeg" alt="" class="card-img-top">
                            <div class="card-footer">
                                <p>A partir de 6000F</p>
                                <p>Daloa, Cote d'Ivoire</p>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
        <!-- Newsletter -->
        <section id="newsletter" class="container-fluid bg-corail px-5 justify-content-center">
            <div class="row container-fluid align-items-center">
                <div class="col-8">
                    <h4>Souscrivez à notre boite aux lettre</h4>
                    <p>Et restez au parfum de nos toutes dernières promotions !</p>
                </div>
                <div class="col">
                    <form action="">
                        <div class="input-group">
                            <input class="form-control" type="text" name="email" placeholder="Adresse Email">
                            <div class="input-group-append">
                                <button class="btn bg-orange" type="button">Souscrire !</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <footer class="pt-md-2 bg-orange">
            <!-- Footer info -->
            <section id="footer-info" class="container-fluid bg-orange text-blanc">
                <div class="row justify-content-around">
                    <div class="col-md-3">
                        <!-- <div class="row">
                            <img src="img/logo2.png" alt="" class="img-fluid" style="width:200px;">
                        </div> -->
                        <div class="row">
                            <h5>Reserver-un-car.ci</h5>
                            <p>Société de reservation et de gestion des transports. Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Nobis dolor minus inventore necessitatibus, eos autem. Lorem ipsum dolor
                                sit amet consectetur adipisicing elit. Assumenda saepe sed nemo non commodi ex, quae tenetur
                                adipisci eum nobis?</p>
                        </div>
                        <div class="row">
                            <div class="col">
                                <span class="row">
                                    <i class="fa fa-map-marker"></i>
                                    Siège social Koumassi
                                </span>
                                <span class="row">
                                    <i class="fa fa-phone" style="transform:rotateY(180deg);"></i>
                                    +225 7 77 777 77
                                </span>
                                <span class="row">
                                    <i class="fa fa-at"></i>
                                    info@voyager.ci
                                </span>
                            </div>
                            <div class="col d-flex flex-column justify-content-around">
                                <span class="row">
                                    <i class="fa fa-facebook"></i>
                                </span>
                                <span class="row">
                                    <i class="fa fa-twitter"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="row d-flex flex-column">
                            <h5>Service Client</h5>
                            <ul>
                                <li><a href="" class="text-blanc">Réclammations</a></li>
                                <li><a href="" class="text-blanc">Service Baggage et objets perdus</a></li>
                            </ul>
                        </div>
                        <div class="row d-flex flex-column">
                            <h5>Achat en ligne</h5>
                            <ul>
                                <li><a href="" class="text-blanc">Modalités et frais de réservation en ligne</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="row d-flex flex-column">
                            <h5>Nos Compagnies</h5>
                            <ul class="mentions">
                                @foreach ($companies as $company)
                                    <li><a href="" class="text-blanc">{{$company->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <section id="footer-bottom" class="container-fluid bg-dark_orange">
                <!-- <ul class="row mentions justify-content-center">
                    <li><a href="" class="text-blanc">Mentions légales</a></li>
                    <li><a href="" class="text-blanc">Produits et services</a></li>
                    <li><a href="" class="text-blanc">La compagnie</a></li>
                    <li><a href="" class="text-blanc">Signaler une anomalie</a></li>
                </ul> -->
                <div class="row justify-content-center">
                    <p class="">Copyright <a href="sotli.ci">SOTLI</a> &copy; 2019. Tous droits réservés</p>
                </div>
            </section>
        </footer>
    </div>
@endsection