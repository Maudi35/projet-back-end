<?php include 'config/template/head.php'; ?>
<header>
    <?php include 'config/template/nav.php'; ?>
</header>
<!--<h2 class="text-center mt-5 mb-5">Page fiche produit</h2>-->
<hr>

<div class="all-product-page">
    <section class="product-img">
        <div class="img-product-container">
            <img src="asset/image-backend/kit-relaxant-parfume.jpg" alt="kit relaxant parfumé"> 
        </div>
        <div class="img-product-container-responsive">
            <img src="asset/image-backend/kit-relaxant-parfume-2.jpeg" alt="kit relaxant parfumé, savon et une bougie">
        </div>
        <div class="img-product-container-responsive">
            <img src="asset/image-backend/kit-relaxant-parfume-3.jpeg" alt="kit relaxant parfumé creme hydratante, bougie, parfum">
        </div>
    </section>
    <section class="product-caption">
        <h2>KIT RELAXANT PARFUMÉ</h2> 
        <hr>
        <div class="description">
            <p>A PERSONNALISER</p>
            <p class="price">45 €</p>
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

