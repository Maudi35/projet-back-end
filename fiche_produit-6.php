<?php include 'config/template/head.php'; ?>
<header>
    <?php include 'config/template/nav.php'; ?>
</header>
<!--<h2 class="text-center mt-5 mb-5">Page fiche produit</h2>-->
<hr>

<div class="all-product-page">
    <section class="product-img">
    <!-- ici on a les trois images à la suite du produit  -->
        <div class="algae-soap">
            <img src="asset/image-backend/kit-bien-etre.jpg" alt="kit bien être"> 
        </div>
        <div class="algae-soap-responsive">
            <img src="asset/image-backend/kit-bien-etre-2.jpeg" alt="kit bien-être, savon et une bougie">
        </div>
        <div class="algae-soap-responsive">
            <img src="asset/image-backend/kit-bien-etre-3.jpeg" alt="kit bien être creme hydratante, bougie, parfum">
        </div>
    </section>
    <section class="product-caption">
        <h3>KIT BIEN ETRE</h3> 
        <hr>
        <div class="description">
            <p>A PERSONNALISER</p>
            <p class="price">25 €</p>
        </div>
        <div class="add-to-cart">
            <input type="button" value="Ajouter au panier">
        </div>    
    </section>
</div>

<?php include 'config/template/footer.php'; ?> 

