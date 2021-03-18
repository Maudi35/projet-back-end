<?php include 'config/template/head.php'; ?>
<header>
    <?php include 'config/template/nav.php'; ?>
</header>
<!--<h2 class="text-center mt-5 mb-5">Page fiche produit</h2>-->
<hr>

<div class="all-product-page">
    <section class="product-img">
        <div class="algae-soap">
            <img src="asset/image-backend/elixir.jpg" alt="elix rosa"> 
        </div>
        <div class="algae-soap-responsive">
            <img src="asset/image-backend/elixir-rosa-2.jpeg" alt="elixir rosa vu d'au-dessus">
        </div>
        <div class="algae-soap-responsive">
            <img src="asset/image-backend/elixir-rosa-3.jpeg" alt="elixir rosa avec cotton">
        </div>
    </section>
    <section class="product-caption">
        <h3>ELIXIR ROSA</h3> 
        <hr>
        <div class="description">
            <p>SOLUTION A L'EAU DE ROSE</p>
            <p class="price">35 €</p>
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

