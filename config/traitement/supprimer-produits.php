<?php include '../pdo.php'; 

// On créé une requête qui va nous permettre de supprimer un produit 
  $id = $_GET['id']; 
  $req = $pdo->prepare('DELETE FROM products WHERE id = ?'); 
  $req->execute(array($id)); 
  header('location:../admin.php'); 

?>


