<?php
    session_start();
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>SKI SHOP - matériel de ski</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-link offset-1" href="index.html"><button class="nav-link text-dark fst-italic border-white" id="nav-logo-tab" data-bs-toggle="tab" data-bs-target="#nav-logo" type="button" role="tab"><img src="images/logo.png" alt="logo montagne" height="40">SKI SHOP</button></a>
                <button class="nav-link text-dark offset-1" id="nav-ski-tab" data-bs-toggle="tab" data-bs-target="#nav-ski" type="button" role="tab" aria-controls="nav-ski" aria-selected="false">SKI</button>
                <button class="nav-link text-dark" id="nav-snowboard-tab" data-bs-toggle="tab" data-bs-target="#nav-snowboard" type="button" role="tab" aria-controls="nav-snowboard" aria-selected="false">SNOWBOARD</button>
                <button class="nav-link text-dark" id="nav-fixation-tab" data-bs-toggle="tab" data-bs-target="#nav-fixation" type="button" role="tab" aria-controls="nav-fixation" aria-selected="false">FIXATION</button>
                <button class="nav-link text-dark" id="nav-chaussure-tab" data-bs-toggle="tab" data-bs-target="#nav-chaussure" type="button" role="tab" aria-controls="nav-chaussure" aria-selected="false">CHAUSSURE</button>
                <button class="nav-link text-dark" id="nav-baton-tab" data-bs-toggle="tab" data-bs-target="#nav-baton" type="button" role="tab" aria-controls="nav-baton" aria-selected="false">BATON</button>
                <button class="nav-link text-dark" id="nav-tenue-tab" data-bs-toggle="tab" data-bs-target="#nav-tenue" type="button" role="tab" aria-controls="nav-tenue" aria-selected="false">TENUE</button>
                <button class="nav-link text-dark offset-2" id="nav-compte-tab" data-bs-toggle="tab" data-bs-target="#nav-compte" type="button" role="tab"><svg xmlns="http://www.w3.org/2000/svg" width="" height="30" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16"><path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/></svg><font size="1">compte</font></button>
                <button class="nav-link text-dark" id="nav-panier-tab" data-bs-toggle="tab" data-bs-target="#nav-panier" type="button" role="tab"><svg xmlns="http://www.w3.org/2000/svg" width="" height="30" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16"><path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/></svg><font size="1">panier</font></button>
            </div>
            <div class="tab-content row" id="nav-tabContent">
                <div class="tab-pane fade" id="nav-ski" role="tabpanel" aria-labelledby="nav-ski-tab">
                    <div class="row">
                        <div class="col-2 offset-2 mt-2">
                            <a class="nav-link p-0 text-dark" href=""><h5>SKI ALPIN</h5></a>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">pack ski all mountain-polyvalent</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">pack ski de piste</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">pack ski freeride</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">pack ski freestyle</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">pack ski racing</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">ski all mountain-polyvalent</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">ski de piste</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">ski freeride</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">ski freestyle</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">ski racing</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-2 offset-1 mt-2">
                            <a class="nav-link p-0 text-dark" href=""><h5>SKI DE FOND</h5></a>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">pack ski de fond classique</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">pack ski de fond skating</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">pack ski randonnée nordique</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">ski de fond classique</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">ski de fond skating</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">ski randonnée nordique</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-2 offset-1 mt-2">
                            <a class="nav-link p-0 text-dark" href=""><h5>SKI DE RANDONNE</h5></a>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">pack ski freerando</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">pack ski randonné polyvalent</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">pack ski randonné race</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">ski freerando</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">ski randonné polyvalent</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">ski randonné race</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-snowboard" role="tabpanel" aria-labelledby="nav-snowboard-tab">
                    <div class="row">
                        <div class="col-2 offset-2 mt-2">
                            <a class="nav-link p-0 text-dark" href=""><h5>SNOWBOARD</h5></a>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">pack snowboard polyvalent</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">pack snowboard freeride</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">pack snowboard freestyle</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">snowboard polyvalent</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">snowboard freeride</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">snowboard freestyle</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-2 offset-3 mt-2">
                            <a class="nav-link p-0 text-dark" href=""><h5>SPLITBOARD</h5></a>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">pack splitboard</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">planche splitboard</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">accessoire splitboard</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-fixation" role="tabpanel" aria-labelledby="nav-fixation-tab">
                    <div class="row">
                        <div class="col-2 offset-2 mt-2">
                            <a class="nav-link p-0 text-dark" href=""><h5>FIXATION SKI ALPIN</h5></a>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">fixation ski all mountain - piste</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">fixation ski freeride - freestyle</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">fixation ski compétition</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-2 mt-2">
                            <a class="nav-link p-0 text-dark" href=""><h5>FIXATION SKI DE FOND</h5></a>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">fixation ski de fond classique</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">fixation ski de fond skating</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">fixation ski randonnée nordique</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-2 mt-2">
                            <a class="nav-link p-0 text-dark" href=""><h5>FIXATION SKI RANDO</h5></a>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">fixation ski freerando</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">fixation ski randonnée polyvalent</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">fixation ski randonnée race</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-2 mt-2">
                            <a class="nav-link p-0 text-dark" href=""><h5>FIXATION SNOWBOARD</h5></a>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">fixation snowboard classique</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">fixation snowboard rapide</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-chaussure" role="tabpanel" aria-labelledby="nav-chaussure-tab">
                    <div class="row">
                        <div class="col-2 offset-2 mt-2">
                            <a class="nav-link p-0 text-dark" href=""><h5>CHAUSSURE SKI ALPIN</h5></a>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">chaussure ski all mountain - piste</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">chaussure ski freeride</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">chaussure ski freestyle</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">chaussure ski racing</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-2 mt-2">
                            <a class="nav-link p-0 text-dark" href=""><h5>CHAUSSURE SKI DE FOND</h5></a>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">chaussure ski de fond classique</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">chaussure ski de fond skating</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">chaussure ski randonnée nordique</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-2 mt-2">
                            <a class="nav-link p-0 text-dark" href=""><h5>CHAUSSURE SKI RANDO</h5></a>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">chaussure ski freerando</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">chaussure ski randonnée polyvalent</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">chaussure ski randonnée race</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-2 mt-2">
                            <a class="nav-link p-0 text-dark" href=""><h5>BOOTS SNOWBOARD</h5></a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-baton" role="tabpanel" aria-labelledby="nav-baton-tab">
                    <div class="row">
                        <div class="col-2 offset-2 mt-2">
                            <a class="nav-link p-0 text-dark" href=""><h5>BATON SKI ALPIN</h5></a>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">baton ski alpin monobrin</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">baton ski alpin telescopique</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-2 offset-1 mt-2">
                            <a class="nav-link p-0 text-dark" href=""><h5>BATON SKI DE FOND</h5></a>
                        </div>
                        <div class="col-2 offset-1 mt-2">
                            <a class="nav-link p-0 text-dark" href=""><h5>BATON SKI RANDONNEE</h5></a>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">baton ski rando monobrin</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">baton ski rando telescopique</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-tenue" role="tabpanel" aria-labelledby="nav-tenue-tab">
                    <div class="row">
                        <div class="col-2 offset-2 mt-2">
                            <a class="nav-link p-0 text-dark" href=""><h5>VETEMENT</h5></a>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">veste</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">pantalon</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">combinaison</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">polaire</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-2 mt-2">
                            <a class="nav-link p-0 text-dark" href=""><h5>VETEMENT CHAUFFANT</h5></a>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">veste chauffante</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">gant chauffant</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">chaussette chauffante</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-2 mt-2">
                            <a class="nav-link p-0 text-dark" href=""><h5>ACCESSOIRE TEXTILE</h5></a>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">gant</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">mouffle</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">chaussette</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">cache-cou</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">bonnet</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">cagoule</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">ceinture</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">bretelle</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-2 mt-2">
                            <a class="nav-link p-0 text-dark" href=""><h5>PROTECTION</h5></a>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">casque</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">protection dorsal</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">protège poignet</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">protège tibia</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-0 text-muted">genouillière</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-compte" role="tabpanel" aria-labelledby="nav-compte-tab">
                    <?php
                    if (isset($_SESSION['name'])) {
                    ?>
                        <div class="col-2 offset-10 mt-2">
                            <p class="nav-link p-0 text-dark"><h5><?php echo $_SESSION['name'] ?> <?php echo $_SESSION['firstname'] ?></h5></p>
                        </div>
                        <div class="col-1 offset-10 mt-2">
                            <form action=""></form>
                                <button type="submit" class="nav-link p-0 text-white form-control btn btn-dark border-dark text-center">Se déconnecter</button>
                            </form>
                        </div>
                    <?php
                    }
                    else {
                    ?>
                        <div class="col-2 offset-10 mt-2">
                            <a class="nav-link p-0 text-dark" href="connect-account.php"><h5>Se connecter</h5></a>
                        </div>
                        <div class="col-2 offset-10 mt-2">
                            <a class="nav-link p-0 text-dark" href="create-account.php"><h5>Créer un compte</h5></a>
                        </div>
                    <?php
                    }
                    ?>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div id="carouselExampleIndicators" class="carousel slide col-10 offset-1 mt-4" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/ski-freeride.jpg" class="d-block w-100" alt="" height="600">
                <div class="carousel-caption d-none d-md-block text-dark">
                    <h3>Découvrez notre gamme de ski freeride</h3>
                    <button type="button" class="btn btn-outline-dark">Découvrir la gamme</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/ski-rando.png" class="d-block w-100" alt="" height="600">
                <div class="carousel-caption d-none d-md-block text-dark">
                    <h3>Découvrez notre gamme de ski de rando</h3>
                    <button type="button" class="btn btn-outline-dark">Découvrir la gamme</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/snowboard.jpg" class="d-block w-100" alt="" height="600">
                <div class="carousel-caption d-none d-md-block text-dark">
                    <h3>Découvrez notre gamme de snowboard</h3>
                    <button type="button" class="btn btn-outline-dark">Découvrir la gamme</button>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    
    <h2 class="mt-5 text-center fw-bolder">SKI POUR TOUS</h2>
    <div class="col-10 offset-1 row mt-4">
        <div class="card border-white text-dark col-4">
            <img src="images/femme-ski.jpg" class="card-img" alt="..." height="400">
            <div class="card-img-overlay">
                <h6 class="card-text offset-1">équipement</h6>
                <h4 class="card-title offset-1">FEMME</h4>
                <div class="text-end col-11"><br><br><br><br><br>
                    <button type="button" class="btn btn-primary">ski</button><br>
                    <button type="button" class="btn btn-primary mt-2">snowboard</button><br>
                    <button type="button" class="btn btn-primary mt-2">chaussure</button><br>
                    <button type="button" class="btn btn-primary mt-2">tenue</button>
                </div>
            </div>
        </div>
        <div class="card border-white text-dark col-4">
            <img src="images/enfant-ski.jpg" class="card-img" alt="..." height="400">
            <div class="card-img-overlay">
                <h6 class="card-text offset-1">équipement</h6>
                <h4 class="card-title offset-1">ENFANT</h4>
                <div class="text-end col-11"><br><br><br><br><br>
                    <button type="button" class="btn btn-primary">ski</button><br>
                    <button type="button" class="btn btn-primary mt-2">snowboard</button><br>
                    <button type="button" class="btn btn-primary mt-2">chaussure</button><br>
                    <button type="button" class="btn btn-primary mt-2">tenue</button>
                </div>
            </div>
        </div>
        <div class="card border-white text-dark col-4">
            <img src="images/homme-ski.jpg" class="card-img" alt="..." height="400">
            <div class="card-img-overlay">
                <h6 class="card-text offset-1">équipement</h6>
                <h4 class="card-title offset-1">HOMME</h4>
                <div class="text-end col-11"><br><br><br><br><br>
                    <button type="button" class="btn btn-primary">ski</button><br>
                    <button type="button" class="btn btn-primary mt-2">snowboard</button><br>
                    <button type="button" class="btn btn-primary mt-2">chaussure</button><br>
                    <button type="button" class="btn btn-primary mt-2">tenue</button>
                </div>
            </div>
        </div>
    </div>

    <h2 class="mt-5 text-center fw-bolder">CHACUN SA GLISSE</h2>
    <div class="col-10 offset-1 row mt-4">
        <div class="card border-white text-dark col-3">
            <img src="images/pack-ski-alpin.jpg" class="card-img" alt="..." height="200">
            <div class="card-img-overlay">
                <h6 class="card-text offset-1">pack</h6>
                <h4 class="card-title offset-1">SKI ALPIN</h4>
                <div class="text-end col-11"><br><br><br>
                    <button type="button" class="btn btn-outline-dark">découvrir</button>
                </div>
            </div>
        </div>
        <div class="card border-white text-dark col-3">
            <img src="images/pack-ski-nordique.jpg" class="card-img" alt="..." height="200">
            <div class="card-img-overlay">
                <h6 class="card-text offset-1">pack</h6>
                <h4 class="card-title offset-1">SKI NORDIQUE</h4>
                <div class="text-end col-11"><br><br><br>
                    <button type="button" class="btn btn-outline-dark">découvrir</button>
                </div>
            </div>
        </div>
        <div class="card border-white text-dark col-3">
            <img src="images/pack-ski-rando.jpg" class="card-img" alt="..." height="200">
            <div class="card-img-overlay">
                <h6 class="card-text offset-1">pack</h6>
                <h4 class="card-title offset-1">SKI RANDO</h4>
                <div class="text-end col-11"><br><br><br>
                    <button type="button" class="btn btn-outline-dark">découvrir</button>
                </div>
            </div>
        </div>
        <div class="card border-white text-dark col-3">
            <img src="images/pack-snowboard.jpg" class="card-img" alt="..." height="200">
            <div class="card-img-overlay">
                <h6 class="card-text offset-1">pack</h6>
                <h4 class="card-title offset-1">SNOWBOARD</h4>
                <div class="text-end col-11"><br><br><br>
                    <button type="button" class="btn btn-outline-dark">découvrir</button>
                </div>
            </div>
        </div>
    </div>

    <div class="col-10 offset-1 mt-5">
        <h3>Le ski, c’est quoi ?</h3>
            <p>Si vous lisez ces lignes c’est que vous êtes un skieur ou vous êtes en passe d’en devenir un. Parfait, vous êtes au bon endroit. Passionné de ski, de snowboard, de ski de randonnée et de tout ce qui touche (ou glisse) à la neige, notre équipe de skieurs vous guidera à travers votre sélection de matériel ski alpin et répondra à vos questions sur le ski, des plus basiques aux plus techniques. Vous voulez tout connaître de la fabrication d’un ski ? Savoir à quoi sert un noyau bois, un renfort carbone ou un rocker ? Quelle est la différence entre un ski de piste et un ski freeride ? Faites un tour chez nous et le ski n’aura plus de secret pour vous.</p>
        <h3>D’où vient le ski ?</h3>
            <p>On ne va pas vous refaire toute l’histoire du ski alpin à travers les âges ni vous détailler la constructions des tout premiers skis qui n’étaient, en fin de compte, que des planches de bois. Depuis Emile Allais jusqu’à Candide Thovex ou Marcel Hirscher, le ski a beaucoup évolué, voici quelques points essentiels à retenir. Le ski est un sport qui s’est beaucoup développé au cours du XXe siècle et notamment dans les années 90 avec l’arrivée de nouvelles disciplines comme le freestyle ou le freeride. Si la discipline s’est développée, c’est notamment grâce à l’évolution des technologies des fabricants. On se rappelle de nos vieux skis comme des planches toutes droites avec une spatule et rien d’autre, on se souviendra de l’arrivée des skis paraboliques avec des lignes de côtes arrondies, leur fameuse taille de guêpe, puis des skis bi-spatulés ou twin-tip, et enfin de l’avènement du rocker. Les shapes, les profils, les matériaux, tout a évolué, tout comme le style des skieurs !</p>
        <h3>L’évolution du ski : différents types de matériel</h3>
            <h5>Le ski freestyle</h5>
            <p>Citons ici l'arrivée du ski freestyle, entre autre, avec la démocratisation des snowparks et des compétitions comme les X-Games ou l’arrivée du Superpipe et du Big Air aux J.O. Le ski freestyle, c’est aussi et bien sur Candide Thovex, l’un des meilleurs freeskieurs au monde, qui a fait monter la discipline en créant, entre autres, le Candide Invitational à La Clusaz. Du simple saut de bosse, le ski freestyle a rapidement investi les rails et les boxs du park jusqu’aux sessions de street nocturnes pour devenir plus qu’un sport, un lifestyle.</p>
            <h5>Le ski de rando</h5>
            <p>Les nouveaux shapes de ski ont également aidé les freeriders à explorer le backcountry. Grâce à des skis plus larges avec des rockers et des cambres spécifiques, les skis freeride sont devenus des armes de poudreuse offrant flottaison et maniabilité sur les pentes les plus raides. Il vous suffira de jeter un oeil à une des épreuves du Freeride World Tour (FWT) pour vous rendre compte du niveau actuel des riders. Puis plus récemment, le ski retrouve ses racines avec un retour à la nature. En pleine expansion, le ski de randonnée vous permettra d’atteindre tous les sommets sans plus jamais faire la queue au télésiège. Légers et très maniables, vous les équiperez de fixations randonnée adéquates et de peaux de phoques pour gravir les pentes alentours.</p>
            <h5>Equipement et sécurité</h5>
            <p>Attention tout de même, à partir du moment où vous mettez un ski en dehors du domaine balisé, pensez bien à vous équiper du matériel de sécurité montagne nécessaire. Un ARVA, une pelle et une sonde sont le minimum vital et si vous le pouvez on ne saura que trop vous recommander l’un de nos sacs airbag anti-avalanche ! Et quitte à enfoncer une porte ouverte, on vous rappelle que la meilleure des sécurités reste la prudence !</p>
        <h3>Stations : où aller faire du ski en France et ailleurs dans le monde ?</h3>
            <p>Cocorico, la France fait partie des destinations favorites pour profiter d'un agréable séjour de ski ! Le pays compte pas moins de 350 stations de ski toutes aussi attrayantes les unes que les autres. Certaines combinent même domaine skiable alpin et nordique pour alterner entre ski de piste, ski de fond et même ski de rando. Les plus importantes se trouvent dans les alpes avec des stations comme par exemple Courchevel, Megève, Méribel, Val d'Isère et bien d'autres. Si vous préférez partir à l'étranger, nos voisins alpins comme l'Italie, la Suisse ou l'Autriche ne sont pas en reste en arborant des stations de haute altitude parfois même accessibles l'été. Pour carrément changer, traverser l'Atlantique et direction l'Amérique du Nord pour la maxi station Aspen aux États-Unis ou à Lake Louise au Canada et ses 145 pistes de ski. Côté Japon, on trouve également des domaines magnifiques avec des paysages uniques au monde complètement différents de nos montagnes européennes. Avec cet embarras du choix, plus aucune excuse pour ne pas skier cet hiver !</p>
        <img class="col-12" src="images/ski-text.jfif" alt="">
    </div>

    <footer>
        <div class="mt-5 row border-top">
            <div class="col-2 offset-1 mt-4">
                <h5>COMMANDE</h5>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="#" class="nav-link p-0 text-muted">Votre commande</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link p-0 text-muted">Modes de livraison</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link p-0 text-muted">Moyens de paiement</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link p-0 text-muted">Retours</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link p-0 text-muted">Codes promo</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link p-0 text-muted">Service client</a>
                    </li>
                </ul>
            </div>
            <div class="col-2 mt-4">
                <h5>A PROPOS</h5>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="#" class="nav-link p-0 text-muted">Qui sommes nous ?</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link p-0 text-muted">Mentions légales</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link p-0 text-muted">Recrutement</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link p-0 text-muted">FAQ</a>
                    </li>
                </ul>
            </div>
            <div class="col-2 mt-4">
                <h5>INFOS PRATIQUES</h5>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="#" class="nav-link p-0 text-muted">Une question ?</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link p-0 text-muted">Satisfaction client</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link p-0 text-muted">Conseils techniques</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link p-0 text-muted">Partenaires</a>
                    </li>
                </ul>
            </div>
            <div class="col-4 mt-4">
                <h5>NOUS CONTACTER</h5>
                <input type="text" class="form-control" placeholder="Entrer votre email">
                <textarea  rows="5" class="form-control mt-2" placeholder="Entrer votre message"></textarea>
                <button type="button" class="btn btn-primary mt-2 mb-5">Envoyer</button>
            </div>
        </div>
    </footer>

</body>
</html>