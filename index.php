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
            <div class="toast fade show">
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
        <?php include("views/layouts/header.php") ?>
        <!------------------- FOOTER ------------------->
        <?php include("views/layouts/footer.php") ?>

        <!------------------- JavaScript ------------------->
        <!-- Bootstrap.js -->
        <script src="./assets/js/bootstrap.bundle.min.js"></script>
        <!-- WOW.js -->
        <script src="./assets/js/wow.min.js"></script>
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