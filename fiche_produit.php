<?php include 'config/template/head.php'; ?>
<header>
    <?php include 'config/template/nav.php'; ?>
</header>
<h2 class="text-center mt-5 mb-5">Page fiche produit</h2>
<hr>

<!-- HTML  -->
<html>
<body>
    <section class="product-img">
    <!-- ici on a les trois images à la suite du produit  -->
        <img src="produit1" alt="hydra beauty"> 
        <img src="produit1" alt="hydra beauty">
        <img src="produit1" alt="hydra beauty"> 
    </section>
    <section class="product-description">
        <h2>HYDRA BEAUTY CAMELLIA WATER CLEAN</h2> 
        <br> 
        <h3>FLUIDE IDRATANT ILLUMINATEUR</h3>
        <br> 
        <input type="button" value="Ajouter au panier">     
    </section>
    <div class="product-precision">
    <!-- création d'une div pour ajouter du texte pour décrire les produits si besoin  -->
    </div>
</body>
</html>

<?php include 'config/template/footer.php'; ?> 