<?php include 'config/template/head.php'; ?>
<header>
    <?php include 'config/template/nav.php'; ?>
</header>
<!--<h2 class="text-center mt-5 mb-5">Page fiche produit</h2>-->
<hr>

<div class="all-product-page">
    <section class="product-img">
        <div class="img-product-container">
            <img src="asset/image-backend/kit-ongle.jpg" alt="kit sublime ongle dans une salle de bain"> 
        </div>
        <div class="img-product-container-responsive">
            <img src="asset/image-backend/kit-ongle-2.jpeg" alt="kit sublime ongle à côté d'un miroir">
        </div>
        <div class="img-product-container-responsive">
            <img src="asset/image-backend/kit-ongle-3.jpeg" alt="kit sublime ongle sur le lavabo">
        </div>
    </section>
    <section class="product-caption">
        <h2>KIT SUBLIME ONGLES</h2> 
        <hr>
        <div class="description">
            <p>BASE -VERNIS - TOP COAT</p>
            <p class="price">40 €</p>
        </div>
        <div class="quantity">
            <p>Quantité</p>
            <input type="number" id="tentacles" name="tentacles" min="0" max="10">
        </div>
        <div class="add-to-cart">
            <input type="button" value="Ajouter au panier">
        </div>    
    </section>
</div>

<?php include 'config/template/footer.php'; ?> 

