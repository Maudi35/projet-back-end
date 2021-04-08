<?php include 'config/template/head.php'; ?>
<?php include 'config/template/nav.php'; ?>

<?php include 'pdo.php'; ?>

<?php
// The amounts of products to show on each page
$num_products = 6;
// The current page, in the URL this will appear as index.php?page=products&p=1, index.php?page=products&p=2, etc...
$current_page = isset($_GET['p']) && is_numeric($_GET['p']) ? (int)$_GET['p'] : 1;
// Select products ordered by the id added
$stmt = $pdo->prepare('SELECT * FROM products ORDER BY id ASC LIMIT ?,?');
// bindValue will allow us to use integer in the SQL statement, we need to use for LIMIT
$stmt->bindValue(1, ($current_page - 1) * $num_products, PDO::PARAM_INT);
$stmt->bindValue(2, $num_products, PDO::PARAM_INT);
$stmt->execute();
// Fetch the products from the database and return the result as an Array
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);?>

<div class="fullscreen-image"></div>
<section class="home-product">
	<h2>TOUS NOS PRODUITS</h2>
	<hr>
	<div class="products">

<article class="product" aria-label="<?=$products['name']?>">
<?php foreach ($products as $product): ?>
			<a href="fiche_produit.php?page=product&id=<?=$product['id']?>"><?=$product['name']?>
			<img class="img-product" src="asset/img-backend-webp/<?=$product['img']?>"
					alt="<?=$product['name']?>"></a>
			<div class="product-description">
				<a href="fiche_produit.php?page=product&id=<?=$product['id']?>"></a>
				<p class="price">&euro;<?=$product['price']?>
				<?php endforeach; ?>
			</div>
</article>

		<!-- <article class="product" aria-label="Roll anti-stress">
			<a href="fiche_produit-2.php"><img class="img-product" src="asset/img-backend-webp/roll.webp"
					alt="roll anti stress"></a>
			<div class="product-description">
				<a href="fiche_produit-2.php">Roll anti-stress</a>
				<p class="price">17 €</p>
			</div>
		</article>
		<article class="product" aria-label="Elixir Rose">
			<a href="fiche_produit-3.php"><img class="img-product" src="asset/img-backend-webp/elixir.webp"
					alt="elixir rosa"></a>
			<div class="product-description">
				<a href="fiche_produit-3.php">Elixir Rosa</a>
				<p class="price">35 €</p>
			</div>
		</article>
		<article class="product" aria-label="Kit sublime ongles">
			<a href="fiche_produit-4.php"><img class="img-product" src="asset/img-backend-webp/kit-ongle.webp"
					alt="kit ongle sublime avec base, vernis, top coat"></a>
			<div class="product-description">
				<a href="fiche_produit-4.php">Kit sublime ongles</a>
				<p class="price">40 €</p>
			</div>
		</article>
		<article class="product" aria-label="Dentifrice blancheur">
			<a href="fiche_produit-5.php"><img class="img-product" src="asset/img-backend-webp/dentifrice-blancheur.webp"
					alt="dentifrice blancheur"></a>
			<div class="product-description">
				<a href="fiche_produit-5.php">Dentifrice blancheur</a>
				<p class="price">15 €</p>
			</div>
		</article>
		<article class="product" aria-label="Kit relaxant parfumé">
			<a href="fiche_produit-6.php"><img class="img-product" src="asset/img-backend-webp/kit-relaxant-parfume.webp"
					alt="kit relaxant parfumé"></a>
			<div class="product-description">
				<a href="fiche_produit-6.php">Kit relaxant parfumé</a>
				<p class="price">45 €</p>
			</div>
		</article>
	</div> -->
</section>

<?php include 'config/template/footer.php';?>

