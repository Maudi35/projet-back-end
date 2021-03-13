<?php include 'config/template/head.php'; ?>
<header>
    <?php include 'config/template/nav.php'; ?>
</header>
<h2 class="text-center mt-5 mb-5">Page panier</h2>
<hr>


<!-- HTML -->

    <!-- a remplir quand on fera le css  -->
    <div class="img-panier">
        <img src="roll2.jpg"> 
    </div>
    <section class="basket">
        <h2>PANIER</h2>
        <div class="basket-content">
            <img src="roll.jpg">
            <p>CREME DE NUIT - TEINT FRAIS</p>
        </div>
        <div class="basket-quantity">
            <p>Quantité 1</p> 
            <p>75€</p>
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


<?php include 'config/template/footer.php'; ?>

