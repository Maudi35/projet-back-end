<?php include 'config/template/head.php'; ?>
<?php include 'config/template/nav.php'; ?>


<div class="all-product-page">
	<section class="product-img" aria-label="Images produits">
		<img class="img-product-container" src="asset/img-backend-webp/savon-algues.webp"
			alt="savon aux algues camelia water clean">
		<img class="img-product-container" src="asset/img-backend-webp/savon-algues-2.webp"
			alt="savon aux algues camelia water clean avec brosse">
		<img class="img-product-container" src="asset/img-backend-webp/savon-algues-3.webp"
			alt="savon aux algues camelia water clean dans la salle de bain">
	</section>
	<section class="product-caption">
		<h2>SAVON AUX ALGUES CAMELLIA WATER CLEAN</h2>
		<hr>
		<div class="description">
			<p>SAVON HYDRATANT MATIFIANT</p>
			<p class="price">25 €</p>
		</div>
		<form action="" method="post">
			<div class="quantity">
				<p>Quantité</p>
				<input type="number" id="tentacles" name="tentacles" min="0" max="10">
			</div>
			<div class="add-to-cart">
				<input type="button" value="Ajouter au panier">
			</div>
		</form>
	</section>
</div>

<?php include 'config/template/footer.php'; ?>