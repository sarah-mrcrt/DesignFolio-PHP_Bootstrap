<?php
print_r($_FILES);

$_POST['description'] = nl2br($_POST['description'], false);

/*------------------ Uploader une IMAGE -------------------*/

/* Je crée le dossier uploads */
$dossier = "assets/images/uploads/";

/* Je récupére le nom de l'image choisi */
$fichier = basename($_FILES["fileToUpload"]["name"]);

/* Si je demande à "choisir un fichier" */
if(!empty($_FILES["fileToUpload"]["name"])) {

    /*Si on demande d'uploader des images*/
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $dossier .$fichier)) {
        /* Je récupère le chemain "/uploads" que j'associe au nom de l'image choisi */
        echo "Le fichier : ". basename( $_FILES["fileToUpload"]["name"]). " est en ligne";

        /* J'ajoute le nom du chemin dans ma base de donnée*/
        $sql = "INSERT INTO ecrit VALUES(NULL, ?,?,?, ?);";
        $query = $pdo->prepare($sql);
        $query->execute(array($_POST['titre'],$_POST['description'], $dossier .$fichier, $_SESSION['id']));

    } else {
        /* Si la demande d'upload n'est pas une image */
        echo "Ceci n'est pas une image ! Par conséquent, on ne peut la publier";
    }
    /*------------------ Uploader que du TEXTE -------------------*/
}
// URL vers laquelle rediriger une page + Alerte personnalisée
header("Location:" . $_SERVER['HTTP_REFERER']);
$_SESSION['info'] = "Votre projet a bien été publié !";
?>