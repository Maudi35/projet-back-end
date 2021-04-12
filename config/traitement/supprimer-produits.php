<?php include '../pdo.php'; 

$id = $_GET['id']; 
$req = $pdo->prepare('DELETE FROM products WHERE id = ?'); 
$req->execute(array($id)); 
header('location:../admin.php'); 

?>


