<?php
// Voici la liste des actions possibles avec la page à charger associée

$listeDesActions = array(
    //*********** treatment ***********//
    // Authentification
    "connexion" => "treatment/auth/sign-in.php",
    "inscription" => "treatment/auth/sign-up.php",
    "deconnexion" => "treatment/auth/logout.php",
    // POST
    "new-post" => "treatment/post/post-new.php",
    "update-post" => "treatment/post/post-update.php",
    "del-post" => "treatment/post/post-delete.php",
    //*********** VIEWS ***********//
    // Authentification
    "login" => "views/auth/sign-in.php",
    "registration" => "views/auth/sign-up.php",
    // PAGES
    "accueil" => "views/pages/home.php",
    "mur" => "views/pages/profil-user.php",
    "recherche"=>"views/pages/search.php",
    // ERROS
    "error-404" => "views/errors/404.php",
);