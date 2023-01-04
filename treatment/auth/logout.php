<?php
unset($_SESSION['id']);
unset($_SESSION['login']);
// ******************* Redirection + Toast
header('Location: index.php');
$_SESSION['info'] ="Vous êtes bien déconnecté.e";
?>