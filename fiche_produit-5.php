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
            <img src="asset/image-backend/brosse-a-dents.jpg" alt="dentifrice blancheur"> 
        </div>
        <div class="algae-soap-responsive">
            <img src="asset/image-backend/brosse-a-dents-3.jpeg" alt="dentifrice blancheur tout usage">
        </div>
        <div class="algae-soap-responsive">
            <img src="asset/image-backend/brosse-a-dents-2.jpeg" alt=" dentifrice blancheur sur une feuille verte végétale">
        </div>
    </section>
    <section class="product-caption">
        <h3>DENTIFRICE BLANCHEUR</h3> 
        <hr>
        <div class="description">
            <p>CRISTAUX MENTHE FRAICHE</p>
            <p class="price">25 €</p>
        </div>
        <div class="add-to-cart">
            <input type="button" value="Ajouter au panier">
        </div>    
    </section>
</div>

<?php include 'config/template/footer.php'; ?> 

