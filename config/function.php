<?php
// Création d'une fonction logged_only : l'utilisateur n'a pas accès à cette page s'il n'a pas de compte 
  function logged_only() {
    if(session_status() == PHP_SESSION_NONE) {
      session_start(); 
    }
    if(!isset($_SESSION['auth'])) {
      $_SESSION['flash']['danger'] = "Vous n'avez pas le droit d'accéder à cette page"; 
      header('Location: login.php'); 
      exit(); 
  }
}
?>

