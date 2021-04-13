<?php 

// On déconnecte l'utilisateur 
session_start(); 
// unset permet de détruire une variable 
unset($_SESSION['auth']); 
session_destroy();
$_SESSION['flash']['success'] = 'Vous êtes maintenant déconnecté'; 
header('location:login.php'); 

?> 


