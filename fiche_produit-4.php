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
            <img src="asset/image-backend/kit-ongle.jpg" alt="kit sublime ongle dans une salle de bain"> ç
        </div>
        <div class="algae-soap-responsive">
            <img src="asset/image-backend/kit-ongle-2.jpeg" alt="kit sublime ongle à côté d'un miroir">
        </div>
        <div class="algae-soap-responsive">
            <img src="asset/image-backend/kit-ongle-3.jpeg" alt="kit sublime ongle sur le lavabo">
        </div>
    </section>
    <section class="product-caption">
        <h3>KIT SUBLIME ONGLES</h3> 
        <hr>
        <div class="description">
            <p>BASE -VERNIS - TOP COAT</p>
            <p class="price">25 €</p>
        </div>
        <div class="add-to-cart">
            <input type="button" value="Ajouter au panier">
        </div>    
    </section>
</div>

<?php include 'config/template/footer.php'; ?> 

