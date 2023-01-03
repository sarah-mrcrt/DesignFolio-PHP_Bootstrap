<?php
if(isset($_POST['update'])) {  
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
            
    $sql = "UPDATE projet SET title='".$title."',description='".$description."' WHERE id = $id";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    // URL vers laquelle rediriger une page + Alerte personnalisée
    header('Location: index.php?action=accueil');
    $_SESSION['info'] = "Votre projet a bien été modifié !";
}
include ('views/post/post-update.php');
?>