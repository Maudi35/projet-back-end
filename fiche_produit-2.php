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
            <img src="asset/image-backend/roll.jpg" alt="roll anti stress dans une main"> 
        </div>
        <div class="algae-soap-responsive">
            <img src="asset/image-backend/hero.jpg" alt="roll antistress posé">
        </div>
        <div class="algae-soap-responsive">
            <img src="asset/image-backend/roll-2.jpeg" alt="roll anti-stress">
        </div>
    </section>
    <section class="product-caption">
        <h3>ROLL ANTI-STRESS</h3> 
        <hr>
        <div class="description">
            <p>ELIMINE TENSIONS</p>
            <p class="price">25 €</p>
        </div>
        <div class="add-to-cart">
            <input type="button" value="Ajouter au panier">
        </div>    
    </section>
</div>

<?php include 'config/template/footer.php'; ?> 

