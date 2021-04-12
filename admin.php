<?php 
include 'pdo.php'; 
include 'config/template/head.php';
include 'config/template/nav.php';

// Requête clients 
$req = $pdo->prepare ('SELECT * FROM users WHERE role = 0'); 
$req->execute(); 

$resultat = $req->fetchAll(PDO::FETCH_ASSOC); 

// Requête produits 

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
      <td><a href="traitement/supprimer-produits.php?id=<?= $produits['id']?>">Supprimer</a></td> 
    </tr>
    <?php
    }
    ?>

  </tbody>
</table>

