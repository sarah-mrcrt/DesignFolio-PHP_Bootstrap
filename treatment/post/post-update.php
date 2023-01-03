<?php
if(isset($_POST['update']))
{  
   $id = $_POST['id'];
   $title = $_POST['title'];
   $description = $_POST['description'];
           
   $sql = "UPDATE ecrit SET title='".$title."',description='".$description."' WHERE id = $id";
   $q = $pdo->prepare($sql);
   $q->execute(array($id));
    
    header('Location: index.php?action=accueil');
}
include ('views/post/post-update.php');
?>
