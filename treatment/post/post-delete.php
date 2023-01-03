<?php
$sql = "DELETE FROM projet WHERE id=?";
$q = $pdo->prepare($sql);
$q->execute(array($_GET['id']));

//Je retourne sur le serveur où j'étais
header("Location:".$_SERVER['HTTP_REFERER']);
$_SESSION['info'] = "Votre projet a bien été supprimé !";
?>
