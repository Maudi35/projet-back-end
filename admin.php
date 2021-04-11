<?php 
include 'pdo.php'; 
include 'config/template/head.php';
include 'config/template/nav.php';

$req = $pdo->prepare ('SELECT * FROM users WHERE role = 0'); 
$req->execute(); 

$resultat = $req->fetchAll(PDO::FETCH_ASSOC); 
var_dump($resultat); 



?> 





