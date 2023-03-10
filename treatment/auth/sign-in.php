<?php
//Etape 1 : Je regarde dans ma BDD
$sql = "SELECT * FROM user WHERE email=? AND mdp=PASSWORD(?)";

// Etape 1  : preparation
$query = $pdo->prepare($sql);

// Etape 2 : execution : 2 paramètres dans la requêtes !!
$query->execute(array($_POST['email'], $_POST['mdp']));

// Etape 3 : ici le login est unique, donc on sait que l'on peut avoir zero ou une  seule ligne soit une seule FETCH.
if ($line = $query->fetch()) {
    //Si une ligne de la BDD corespond à la donnée entrée
    $_SESSION['id'] = $line['id'];
    $_SESSION['login'] = $line['login'];
    $_SESSION['email'] = $line['email'];
    $_SESSION['avatar'] = $line['avatar'];
    // ******************* Redirection + Toast
    header('Location: index.php?action=accueil');
    $_SESSION['info'] ="Bienvenue sur votre compte";
} else {
    // ******************* Redirection + Toast
    header('Location: index.php?action=login');
    $_SESSION['info'] ="Votre email ou votre de mot de passe est incorrect";
}
?>