<?php include 'config/template/head.php'; ?>
<header>
    <?php include 'config/template/nav.php'; ?>
</header>
<!--<h2 class="text-center mt-5 mb-5">Page fiche produit</h2>-->
<hr>

<div class="all-product-page">
    <section class="product-img">
        <div class="algae-soap">
            <img src="asset/image-backend/savon-algues.jpg" alt="hydra beauty"> 
        </div>
        <div class="algae-soap-responsive">
            <img src="asset/image-backend/savon-algues-2.jpeg" alt="hydra beauty">
        </div>
        <div class="algae-soap-responsive">
            <img src="asset/image-backend/savon-algues-3.jpeg" alt="hydra beauty">
        </div>
    </section>
    <section class="product-caption">
        <h3>SAVON AUX ALGUES CAMELLIA WATER CLEAN</h3> 
        <hr>
        <div class="description">
            <p>SAVON HYDRATANT MATIFIANT</p>
            <p class="price">25 €</p>
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

