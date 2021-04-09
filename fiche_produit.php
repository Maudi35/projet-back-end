<?php include 'config/template/head.php'; ?>
<?php include 'config/template/nav.php'; ?>

<?php include 'pdo.php';?>

<?php
// Vérifier que le id est bien renseigné dans l'url 
if (isset($_GET['id'])) {
    // Prépare l'instruction et exécute, évite les injections sql
    $stmt = $pdo->prepare('SELECT * FROM products WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    // Récupère le produit dans la base de données et déclare le résultat sous forme de rang 
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    // Vérifier si le produit existe et donc si le rang n'est pas vide
    if (!$product) {
        // Renvoie un message d'erreur si l'id du produit n'existe pas 
        exit('Product does not exist!');
    }
} else {
    // Si l'id n'était pas spécifié alors cela renvoi un message d'erreur
    exit('Product does not exist!');
}
?>

<div class="all-product-page">
	<section class="product-img" aria-label="Images produits">
		<img class="img-product-container" src="asset/img-backend-webp/<?=$product['img']?>"
			alt="<?=$product['alt']?>">
		<img class="img-product-container" src="asset/img-backend-webp/<?=$product['img2']?>"
			alt="<?=$product['alt2']?>">
		<img class="img-product-container" src="asset/img-backend-webp/<?=$product['img3']?>"
			alt="<?=$product['alt3']?>">
	</section>
	<section class="product-caption">
		<h2><?=$product['name']?></h2>
		<hr>
		<div class="description">
			<p><?=$product['description']?></p>
			<p class="price">&euro;<?=$product['price']?></p>
		</div>
		<form action="panier.php?page=panier" method="post">
			<div class="quantity">
				<p>Quantité</p>
				<input class="quantity-input" type="number" id="quantity" name="quantity" value="1"  min="0" max="<?=$product['quantity']?>" required>
				<input type="hidden" name="product_id" value="<?=$product['id']?>">
			</div>
			<div class="add-to-cart">
				<input type="submit" value="Ajouter au panier">
			</div>
		</form>
	</section>
</div>

<?php include 'config/template/footer.php'; ?>