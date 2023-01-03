<?php
include("config/bdd.php");
include("config/actions.php");
session_start();
?>

<!doctype html>
<html lang="fr">

    <head>
        <!------------------- ENCODAGE ------------------->
        <meta charset="utf-8" />
        <!------------------- VIEWPORT ------------------->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <!------------------- CSS ------------------->
        <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="./assets/css/animate.min.css" rel="stylesheet">
        <link href="./assets/css/style.css" rel="stylesheet">
        <!------------------- FONT AWESOME ------------------->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
        <!------------------- GOOGLE FONT ------------------->
        <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
        <!------------------- META TAGS ------------------->
        <title>DesignFolio</title>
        <meta name="author" content="Sarah Mauriaucourt">
        <!------------------- FAVICON ------------------->
    </head>

    <body>
        <!------------------- TOASTER ------------------->
        <?php if (isset($_SESSION['info'])) { ?>
        <div class="toast-container position-fixed top-0 end-0 p-5" id="myToast">
            <div class="toast fade show" >
                <div class="toast-header">
                    <strong class="me-auto">Information</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    <?php echo $_SESSION['info']; ?>
                </div>
            </div>
        </div>
        <?php unset($_SESSION['info']); } ?>

        <!------------------- CONTENT ------------------->
        <main>
            <?php
            // Quelle est l'action à faire ?
            if (isset($_GET["action"])) {
                $action = $_GET["action"];
            } else {
                $action = "accueil";
            }
            // Est ce que cette action existe dans la liste des actions
            if (array_key_exists($action, $listeDesActions) == false) {
                include("views/errors/404.php"); // NON : page 404
            } else {
                include($listeDesActions[$action]); // Oui, on la charge
            }
            // Quelle est l'action à faire ?
            if (isset($_GET["action"])) 
        ?>
        </main>

        <!------------------- HEADER ------------------->
        <nav id="ma_navbar" class="navbar fixed-top navbar-expand-md navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="index.php?action=accueil">DesignFolio</a>
                <!-- Menu burger -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Menu PC -->
                <!-- Collapse = elemet qui disparait -->
                <div class="collapse navbar-collapse pt-3 pt-md-0" id="navbarSupportedContent">
                    <!-- Recherche -->
                    <?php if (isset($_SESSION['id'])) { ?>
                    <form action='index.php?action=recherche' method='POST' class="col-sm-7 ms-auto">
                        <div class="input-group">
                            <input type='search' class="form-control" placeholder='Rechercher des designers'
                                name='recherche' aria-label="Recherche" aria-describedby="basic-addon1">
                            <button type="submit" class="btn btn-primary" action="index.php?action=accueil">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </div>
                    </form>
                    <?php } ?>
                    <!-- /.Recherche -->
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php?action=accueil">Accueil</a>
                        </li>
                        <!-- ----------  Connexion -->
                        <?php if (!isset($_SESSION['id'])) { ?>
                        <li class="nav-item">
                            <a href='index.php?action=login' class="nav-link">Connexion</a>
                        </li>
                        <?php } ?>
                        <!-- ----------  /.Connexion -->
                        <!-- ---------- Profil -->
                        <?php if (isset($_SESSION['id'])) { ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img src="<?php echo  $_SESSION['avatar']; ?>" alt="<?php echo $_SESSION['login']?>"
                                    class="rounded avatar">
                            </a>
                            <ul class="dropdown-menu">
                                <!-- Mon compte -->
                                <li>
                                    <a href="index.php?action=mur&id=<?php echo $_SESSION['id']; ?>"
                                        class="dropdown-item">
                                        Mon profil
                                    </a>
                                </li>
                                <!-- /. Mon compte -->
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <!-- Déconnexion -->
                                    <a href='index.php?action=deconnexion' class="dropdown-item">Déconnexion</a>

                                    <!-- /.Déconnexion -->
                                </li>
                            </ul>
                        </li>
                        <?php } ?>
                    </ul>
                    <!-- ----------  /.Profil -->
                </div>
            </div>
        </nav>
        <!------------------- FOOTER ------------------->
        <footer>
            <div class="container">
                <div class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                    <div class="col-md-4 d-flex align-items-center">
                        <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                            <svg class="bi" width="30" height="24">
                                <use xlink:href="#bootstrap"></use>
                            </svg>
                        </a>
                        <span class="mb-3 mb-md-0 text-muted">© Sarah Mauriaucourt</span>
                    </div>
                    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                        <li class="ms-3">
                            <a class="text-muted" href="#">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                        </li>
                        <li class="ms-3">
                            <a class="text-muted" href="#">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </li>
                        <li class="ms-3">
                            <a class="text-muted" href="#">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
        <!------------------- JavaScript ------------------->
        <!-- Bootstrap.js -->
        <script src="./assets/js/bootstrap.bundle.min.js"></script>
        <!-- WOW.js -->
        <script src="./assets/js/wow.min.js"></script>
        <!-- JS -->
        <script src="./assets/js/js.js"></script>
        <!-- configuration de wow.js -->
        <script>
            new WOW({
                mobile: false,
                animateClass: 'animate__animated',
                offset: 80
            }).init();
        </script>
    </body>
</html>