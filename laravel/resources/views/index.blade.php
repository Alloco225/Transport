<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transport</title>

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="container-fluid border border-secondary">
        <div class="row justify-content-between">
            <div class="col col-sm-2">
                <img src="img/flying.jpg" alt="" class="img-fluid">
            </div>
            <div class="col col-sm-6 pull-right">
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link border-right border-dark" href="#">
                            <i class="fa fa-phone" style="transform:rotateY(180deg);"></i>
                            Nous contacter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link border-right border-dark" href="#">
                            <i class="fa fa-user-plus"></i>
                            Inscription</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fa fa-user"></i>
                            Connexion</a>
                    </li>
                </ul>
                <nav aria-label="breadcrumb" class="">
                    <ol class="breadcrumb">
                        <span class="text-mutted mr-2">Vous êtes ici :</span>
                        <li class="breadcrumb-item active" aria-current="page">Home</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div id="navigation" class="container col-md-10 border border-dark my-n2 bg-light">
            <nav class="navbar navbar-expand-md justify-content-between">
                <ul class="navbar-nav text-uppercase font-weight-bold">
                    <li class="nav-item"><a href="#" class="nav-link">Accueil</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Acheter un billet</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Reserver</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Services</a></li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn my-2 my-sm-0" type="submit">Search</button>
                </form>
            </nav>
        </div>
    </header>
    <main class="col-md-11 mx-auto">
        <section id="showcase">
            <div id="carousel-slider" class="carousel slide" data-ride="carousel" data-pause="hover">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-slider" data-slide-to="1"></li>
                    <li data-target="#carousel-slider" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="img/senaka-cool.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/couple-cute.jpeg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/couple-night.jpeg" alt="Third slide">
                    </div>
                </div>
                <!-- <a class="carousel-control-prev" href="#carousel-slider" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-slider" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a> -->
            </div><!-- /Carousel -->
            <!-- Show case text -->
            <div id="showcase-overlay" class="container d-flex justify-content-between">
                <div class="col-md-5 py-1 bg-light">
                    <!-- Header -->
                    <div class="row my-2">
                        <div class="col-md-6">
                            <h4>Acheter un billet</h4>
                        </div>
                        <!-- Aller-Retour | Aller-Simple -->
                        <div class="col-md-6">
                            <div class="btn-group btn-group-sm">
                                <button type="button" class="btn btn-primary">Aller-Retour</button>
                                <button type="button" class="btn btn-default">Aller Simple</button>
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
                        <input type="submit" class="btn btn-primary w-100" value="Rechercher">
                    </form>
                </div> <!-- col-md-5 -->
                <div class="col-md-5 bg-light py-2">
                    <h5>Un peu de texte en fonction de l'image du slide</h5>
                    <p>Ca peut parler de la rapidité du service de libraison, du suivi en temps réel de la position du car,
                        de la sécurité du transport, du professionalisme des employés, des services à bord, bref
                    </p>
                    <a href="" class="btn btn-secondary w-100">Découvrir</a>
                </div> <!-- col-md-5 -->
            </div> <!-- Row -->
        </section><!-- /#Showcase -->
        <!-- Promotions -->
        <section id="promotions">
            <div class="container col-md-10 mx-auto">
                <h3 class="display-4 text-uppercase text-center">Promotions</h3>
                <div class="row">
                    <div class="col-9">
                        <h4 class="display-4">Nom de la promotion</h4>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-4 font-weight-bold display-2">
                                    -90%
                                </div>
                                <div class="col">
                                    <h5 class="display-4">Sur <span>$destination</span></h5>
                                </div>
                            </div>
                            <div class="row">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero alias molestias a repellendus
                                    qui quaerat totam tempore nam, quia ab dicta maiores in dolore veritatis?</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 bg-secondary">
                        &nbsp;
                    </div>
                </div>
            </div><!--  -->
        </section><!-- /#Promotions -->
        <!-- Promo Destinations -->
        <section id="destinations-promo" class="container-fluid pt-2 my-2 bg-secondary">
            <div class="row d-flex justify-content-around">
                <div class="col-3 bg-light">
                    <h5 class="display-4">Destination</h5>
                    <div class="row">
                        <div class="display-2">-50%</div>
                    </div>
                    <div class="row">
                        <p class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, incidunt voluptatem!
                            Fugiat eum temporibus esse debitis, iure inventore asperiores eos tempora! Corporis, est velit
                            suscipit sequi perspiciatis rem repudiandae ipsum?</p>
                    </div>
                    <div class="row justify-content-center">
                        <a href="" class="text-center">J'en profite</a>
                    </div>
                </div>
                <div class="col-3 bg-light">
                    <h5 class="display-4">Destination</h5>
                    <div class="row">
                        <div class="display-2">-50%</div>
                    </div>
                    <div class="row">
                        <p class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, incidunt voluptatem!
                            Fugiat eum temporibus esse debitis, iure inventore asperiores eos tempora! Corporis, est velit
                            suscipit sequi perspiciatis rem repudiandae ipsum?</p>
                    </div>
                    <div class="row justify-content-center">
                        <a href="" class="text-center">J'en profite</a>
                    </div>
                </div>
                <div class="col-3 bg-light">
                    <h5 class="display-4">Destination</h5>
                    <div class="row">
                        <div class="display-2">-50%</div>
                    </div>
                    <div class="row">
                        <p class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, incidunt voluptatem!
                            Fugiat eum temporibus esse debitis, iure inventore asperiores eos tempora! Corporis, est velit
                            suscipit sequi perspiciatis rem repudiandae ipsum?</p>
                    </div>
                    <div class="row justify-content-center">
                        <a href="" class="text-center">J'en profite</a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center my-2 bg-light">
                <a href="" class="text-primary h4">Voir toutes les promotions</a>
            </div>
        </section>
        <!-- Meilleures Destinations -->
        <section id="destinations" class="container-fluid pt-2 my-2 bg-light">
            <div class="row d-flex justify-content-around">
                <div class="col-md-3">
                    <div class="card">
                        <img src="img/bus-mini.jpeg" alt="" class="card-img-top">
                        <div class="card-footer">
                            <p>A partir de 6000F</p>
                            <p>Daloa, Cote d'Ivoire</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="img/bus-mini.jpeg" alt="" class="card-img-top">
                        <div class="card-footer">
                            <p>A partir de 6000F</p>
                            <p>Daloa, Cote d'Ivoire</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="img/bus-mini.jpeg" alt="" class="card-img-top">
                        <div class="card-footer">
                            <p>A partir de 6000F</p>
                            <p>Daloa, Cote d'Ivoire</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center my-2 bg-light">
                <a href="" class="text-primary h4">Voir toutes les destinations</a>
            </div>
        </section>
        <!-- Newsletter -->
        <section id="newsletter" class="container bg-secondary">
            <div class="row align-items-center">
                <div class="col-8">
                    <h4>Souscrivez à notre boite aux lettre</h4>
                    <p>Et restez au parfum de nos toutes dernières promotions !</p>
                </div>
                <div class="col">
                    <form action="">
                        <div class="input-group">
                            <input type="text" name="email" placeholder="Adresse Email">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">Souscrire !</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- Footer info -->
        <section id="footer-info" class="container-fluid mt-2">
            <div class="row">
                <div class="col-md">
                    <div class="row">
                        <img src="img/bus-road.jpeg" alt="" class="img-fluid" style="height:200px;">
                    </div>
                    <div class="row">
                        <h5>Reserver-un-car.ci</h5>
                        <p>Société de reservation et de gestion des transports. Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Nobis dolor minus inventore necessitatibus, eos autem. Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Assumenda saepe sed nemo non commodi ex, quae tenetur adipisci eum nobis?</p>
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
                <div class="col-md">
                    <div class="row">
                        <h5>Service Client</h5>
                        <ul>
                            <li><a href="">Réclammations</a></li>
                            <li><a href="">Service Baggage et objets perdus</a></li>
                        </ul>
                    </div>
                    <div class="row">
                        <h5>Achat en ligne</h5>
                        <ul>
                            <li><a href="">Modalités et frais de réservation en ligne</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="row">
                        <h5>Nos Compagnies</h5>
                        <ul>
                            <li><a href="">UTB</a></li>
                            <li><a href="">UTB</a></li>
                            <li><a href="">UTB</a></li>
                            <li><a href="">UTB</a></li>
                            <li><a href="">UTB</a></li>
                            <li><a href="">UTB</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <ul>
            <li><a href="">Mentions légales</a></li>
            <li><a href="">Produits et services</a></li>
            <li><a href="">La compagnie</a></li>
            <li><a href="">Signaler une anomalie</a></li>
        </ul>
        <div class="row">
            <p>Copyright &copy; 2019. Tous droits réservés</p>
        </div>
    </footer>
</body>

</html>