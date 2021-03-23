<?php include 'config/template/head.php'; ?>
<header>
	<?php include 'config/template/nav.php'; ?>
</header>

<hr>
<div class="img-basket">
	<img src="asset/image-backend/image-panier-cosmetics.jpeg">
</div>

<section class="basket">
	<h2>PANIER</h2>
	<hr>
	<img src="asset/image-backend/savon-algues.jpg">
	<hr>
	<div class="basket-quantity">
		<p>SAVON - ALGUES</p>
		<a href=""><p>Supprimer</p></a>
	</div>
	<div class="basket-quantity">
		<p>Quantité 1</p>
		<p>25€</p>
	</div>
    <div class="cart">
        <div class="box">
            <div class="total">
                <p>Sous-total</p>
                <p>75€</p>
            </div>
            <div class="total">
                <p>Livraison standard</p>
                <p>Offerte</p>
            </div>
            <div class="total">
                <p class="bold">TOTAL</p>
                <p class="bold">75€</p>
            </div>
            <input type="submit" value="Valider ma commande" name="envoyer" class="basket-input">
        </div>
    </div>
</section>
<?php include 'config/template/footer.php'; ?>
