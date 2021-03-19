<?php include 'config/template/head.php'; ?>
<header>
    <?php include 'config/template/nav.php'; ?>
</header>
<!--<h2 class="text-center mt-5 mb-5">Page fiche produit</h2>-->
<hr>

<div class="all-product-page">
    <section class="product-img">
        <div class="img-product-container">
            <img src="asset/image-backend/brosse-a-dents.jpg" alt="dentifrice blancheur"> 
        </div>
        <div class="img-product-container">
            <img src="asset/image-backend/brosse-a-dents-3.jpeg" alt="dentifrice blancheur tout usage">
        </div>
        <div class="img-product-container">
            <img src="asset/image-backend/brosse-a-dents-2.jpeg" alt=" dentifrice blancheur sur une feuille verte végétale">
        </div>
    </section>
    <section class="product-caption">
        <h2>DENTIFRICE BLANCHEUR</h2> 
        <hr>
        <div class="description">
            <p>CRISTAUX MENTHE FRAICHE</p>
            <p class="price">15 €</p>
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

