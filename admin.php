<?php 
include 'pdo.php'; 
include 'config/template/head.php';
include 'config/template/nav.php';


// Requête clients 
if(isset($_SESSION['id']) and count($_SESSION)>0){
  var_dump(isset($_SESSION));
  // On créé une requête pour récupérer les infos des clients
  $getRole=$pdo->prepare('SELECT * FROM users WHERE id= ?');
  $getRole->execute(array($_SESSION['id']));
  $resultat= $getRole->fetch(PDO::FETCH_ASSOC);
  $role=$resultat['role'];
  var_dump($role);
  if($role==1){
    $req = $pdo->prepare ('SELECT * FROM users WHERE role = 0'); 
    $req->execute(); 
    $resultat = $req->fetchAll(PDO::FETCH_ASSOC); 
  }
}
else{
  exit('Vous ne pouvez pas accéder à cette page');
}

// On créé une requête pour récupérer les infos des produits
$reqproduits = $pdo->prepare ('SELECT * FROM products WHERE 1'); 
$reqproduits->execute(); 
$resultatproduits = $reqproduits->fetchAll(PDO::FETCH_ASSOC); 

?> 
<hr>
<table>

  <thead>
    <tr>
      <th>
        <p>Tableau clients<p>
      </th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <th>Nom</th>
      <th>Prénom</th>
      <th>Civilité</th>
      <th>Adresse</th>
      <th>Téléphone</th>
      <th>Pseudo</th>
      <th>Email</th>
    </tr>
    <!-- boucle foreach : pour parcourir le tableau  -->
    <?php foreach($resultat as $clients) {
      ?>
    <tr>
      <td><?= $clients['name']?></td>
      <td><?= $clients['surname']?></td>
      <td><?= $clients['civilite']?></td>
      <td><?= $clients['address']?></td>
      <td><?= $clients['tel']?></td>
      <td><?= $clients['pseudo']?></td>
      <td><?= $clients['email']?></td>
      <!-- On lie à notre tableau un fichier qui nous permettra de supprimer des utilisateurs -->
      <td><a href="traitement/supprimer.php?id=<?= $clients['id']?>">Supprimer</a></td> 
    </tr>
    <?php
    }
    ?>

  </tbody>
</table>
<br>
<table>

  <thead>
    <tr>
      <th>
        <p>Tableau produits</p>
      </th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <th>Nom</th>
      <th>Description</th>
      <th>Prix</th>
      <th>Quantité</th>
    </tr>
    <?php foreach($resultatproduits as $produits) {
      ?>
    <tr>
      <td><?= $produits['name']?></td>
      <td><?= $produits['description']?></td>
      <td><?= $produits['price']?></td>
      <td><?= $produits['quantity']?></td>
            <!-- On lie à notre tableau un fichier qui nous permettra de supprimer des produits -->
      <td><a href="traitement/supprimer-produits.php?id=<?= $produits['id']?>">Supprimer</a></td> 
    </tr>
    <?php
    }
    ?>

  </tbody>
</table>

