<?php include 'pdo.php'; 
include 'config/template/head.php'; 
include 'config/template/nav.php'; ?>

<!-- COUCOU -->

<?php
// Définition de la quantité de produits à montrer sur chaque page
$num_products = 6;
// La page actuelle, dans l'url va appraitre en tant que index.php?page=products&p=1  puis index.php?page=products&p=2 etc...
$current_page = isset($_GET['p']) && is_numeric($_GET['p']) ? (int)$_GET['p'] : 1;
// Sélectionner les produits par ordre croissant d'id ajoutée 
$stmt = $pdo->prepare('SELECT * FROM products ORDER BY id ASC LIMIT ?,?');
// bindValue permet d'utiliser un entier en instruction sql
$stmt->bindValue(1, ($current_page - 1) * $num_products, PDO::PARAM_INT);
$stmt->bindValue(2, $num_products, PDO::PARAM_INT);
$stmt->execute();
// Récupère les produits dans la base de données et les retourne en tant que tableau  
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);?>

<div class="fullscreen-image"></div>
<section class="home-product">
	<h2>TOUS NOS PRODUITS</h2>
	<hr>
	<div class="products">
		<!-- Chaque produit sera affiché sur la page d'accueil avec ses informations associées -->
		<?php foreach ($products as $product): ?>
		<article class="product" aria-label="<?=$product['name']?>">
			<img class="img-product" src="asset/img-backend-webp/<?=$product['img']?>" alt="<?=$product['name']?>"></a>
			<div class="product-description">
				<a href="fiche_produit.php?page=product&id=<?=$product['id']?>"><?=$product['name']?>
					<a href="fiche_produit.php?page=product&id=<?=$product['id']?>"></a>
					<p class="price">&euro;<?=$product['price']?></p>
			</div>
		</article>
		<?php endforeach; ?>
	</div>
</section>

<?php include 'config/template/footer.php';?>