<?php
// Etape 1  : Je vérifie que mes variables sont remplies
if(isset($_POST['login'], $_POST['email'], $_POST['mdp'], $_POST['avatar'])) {

    //Etape 2 : Je regarde dans ma BDD
    $sql = "SELECT * FROM user WHERE email=?";

    // Etape 3  : Je prépare la requete
    $query = $pdo->prepare($sql);

    // Etape 4  : Je l'execute
    $query->execute(array($_POST['email']));

    // Etape 5 : Je parcours et récupère les valeurs ma BDD
    $result = $query->fetch();

    // Je vérifie si le email existe déjà
    //Si il n'existe pas alors :
    if($result == false) {

        /*********** Je mets obligatoirement un avatar ********/
        /* Je crée le dossier AVATAR */
        $dossier = "assets/images/avatar/";
        /* Je récupére le nom de l'image choisi */
        $fichier = basename($_FILES["fileToAvatar"]["name"]);
        /*Si on demande d'uploader des images*/
        if (move_uploaded_file($_FILES["fileToAvatar"]["tmp_name"], $dossier .$fichier)) {
            /* Je récupère le chemain "/uploads" que j'associe au nom de l'image choisi */
            // echo "Le fichier est en ligne";

            // Il n'y a pas de email identique donc j'insere le nouvel utilisateur
            $sql = "INSERT INTO user VALUES(NULL,?,PASSWORD(?),?,?);";

            // Etape 1  : preparation
            $query = $pdo->prepare($sql);

            // Etape 2 : execution
            $query->execute(array($_POST['login'], $_POST['mdp'], $_POST['email'], $dossier .$fichier));
            
            $_SESSION['id'] = $pdo->lastInsertId();
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['login'] = $_POST['login'];
        }
        // ******************* Redirection + Toast
        header('Location: index.php?action=accueil');
        $_SESSION['info'] ="Votre compte a été crée avec succès";
    } else {
        // ******************* Redirection + Toast
        header('Location: index.php?action=registration');
        $_SESSION['info'] ="L'adresse email renseignée existe déjà";
    }
}
?>