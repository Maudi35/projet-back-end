<?php include 'config/template/head.php'; ?>
<header>
    <?php include 'config/template/nav.php'; ?>
</header>
<!--<h2 class="text-center mt-5 mb-5">Page fiche produit</h2>-->
<hr>

<div class="all-product-page">
    <section class="product-img">
        <div class="img-product-container">
            <img src="asset/image-backend/savon-algues.jpg" alt="savon aux algues camelia water clean"> 
        </div>
        <div class="img-product-container-responsive">
            <img src="asset/image-backend/savon-algues-2.jpeg" alt="savon aux algues camelia water clean avec brosse">
        </div>
        <div class="img-product-container-responsive">
            <img src="asset/image-backend/savon-algues-3.jpeg" alt="savon aux algues camelia water clean dans la salle de bain">
        </div>
    </section>
    <section class="product-caption">
        <h2>SAVON AUX ALGUES CAMELLIA WATER CLEAN</h2> 
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

