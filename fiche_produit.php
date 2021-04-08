<?php include 'config/template/head.php'; ?>
<?php include 'config/template/nav.php'; ?>

<?php include 'pdo.php';?>

<?php
// Check to make sure the id parameter is specified in the URL
if (isset($_GET['id'])) {
    // Prepare statement and execute, prevents SQL injection
    $stmt = $pdo->prepare('SELECT * FROM products WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    // Fetch the product from the database and return the result as an Array
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    // Check if the product exists (array is not empty)
    if (!$product) {
        // Simple error to display if the id for the product doesn't exists (array is empty)
        exit('Product does not exist!');
    }
} else {
    // Simple error to display if the id wasn't specified
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