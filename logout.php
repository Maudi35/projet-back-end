<?php 

session_start(); 
unset($_SESSION['auth']); 
session_destroy();
$_SESSION['flash']['success'] = 'Vous êtes maintenant déconnecté'; 
header('location:login.php'); 

?> 


