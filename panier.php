<?php include 'config/template/head.php'; ?>
<header>
    <?php include 'config/template/nav.php'; ?>
</header>
<!--<h2 class="text-center mt-5 mb-5">Page panier</h2>-->
<hr>


<!-- HTML -->

    <!-- a remplir quand on fera le css  -->
    <div class="img-panier">
        <img src="asset/image-backend/image-panier-cosmetics.jpeg"> 
    </div>
    <section class="basket">
        <h2>PANIER</h2>
        <div class="basket-content">
            <img src="asset/image-backend/savon-algues.jpg">
            <p>SAVON - ALGUES</p>
            <!--<input type="submit" value="Supprimer" name="supprimer" class="delete-input">-->
        </div>
        <div class="basket-quantity">
            <p>Quantité 1</p> 
            <p>25€</p>
        </div>
    <hr>
    </section>

<!-- TEST BOOTSTRAP -->

<section class="subtotal">
    <div class="row">
        <div class="col-4">Sous-total</div>
        <div class="col-4">75,00€</div>
    </div>

    <div class="row">
        <div class="col-4">Livraison - Standard</div>
        <div class="col-4">Offerte</div>
    </div>

    <div class="row">
        <div class="col-4">TOTAL</div>
        <div class="col-4">75,00€</div>
    </div>    
</section>
<div class="basket-button">
<input type="submit" value="PASSER COMMANDE" name="envoyer" class="btn btn-lg btn-block btn-dark">
</div>


<?php include 'config/template/footer.php'; ?>

