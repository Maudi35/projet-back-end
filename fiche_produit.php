<?php include 'config/template/head.php'; ?>
<header>
    <?php include 'config/template/nav.php'; ?>
</header>
<!--<h2 class="text-center mt-5 mb-5">Page fiche produit</h2>-->
<hr>

<!-- HTML  -->
<html>
<body>
    <div class="all-product-page">
        <section class="product-img">
        <!-- ici on a les trois images à la suite du produit  -->
            <div class="algae-soap">
                <img src="asset/image-backend/savon-algues.jpg" alt="hydra beauty"> 
            </div>
            <div class="algae-soap">
                <img src="asset/image-backend/savon-algues-2.jpeg" alt="hydra beauty">
            </div>
            <div class="algae-soap">
                <img src="asset/image-backend/savon-algues-3.jpeg" alt="hydra beauty">
        </div>
        </section>
        <section class="product-description">
            <h2>SAVON ALGUES CAMELLIA WATER CLEAN</h2> 
            <br> 
            <h3>SAVON HYDRATANT MATIFIANT</h3>
            <br> 
            <div class="add-to-cart-container">
            <input class="add-to-cart" type="button" value="Ajouter au panier">
            </div>    
        </section>
        <div class="product-precision">
        <!-- création d'une div pour ajouter du texte pour décrire les produits si besoin  -->
        </div>
    </div>
</body>
</html>

<?php include 'config/template/footer.php'; ?> 