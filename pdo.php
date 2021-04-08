<?php 

$pdo = new PDO('mysql:dbname=cosmetics;host=localhost', 'root', ''); 

// Je veux accèder à la constante ATTR_ERRMODE qui se situe dans PDO 
// Errmode_Exception : PDO renvoie une exception en cas d'erreur 
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

// Récupérer sous forme d'objets
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); 

