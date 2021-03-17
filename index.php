<?php include 'config/template/head.php'; ?>
<header>
    <?php include 'config/template/nav.php'; ?>
</header>
<!--<h2 class="text-center mt-5 mb-5">Page Accueil</h2>-->
<body> 
    <main>
    <div class="fullscreen-image"></div>
    <section class="home-product">
        <h2>TOUS NOS PRODUITS</h2>
        <article class="product">
            <img class="img-product" src="asset/image-backend/savon-algues.jpg" alt="">
            <div class="product-description">
                <a href="fiche_produit.php"><p>Savon aux algues</p></a>
                <p class="price">25 €</p> 
            </div>
        </article>
        <article class="product">
            <img class="img-product" src="asset/image-backend/roll.jpg" alt="">
            <div class="product-description">
                <a href="fiche_produit-2.php"><p>Roll anti-stress</p></a>
                <p class="price">17 €</p>
            </div>
        </article>
        <article class="product">
            <img class="img-product" src="asset/image-backend/elixir.jpg" alt="">
            <div class="product-description">
                <a href="fiche_produit-3.php"><p>Elixir Rosa</p></a>
                <p class="price">35 €</p>
            </div>
        </article>
        <article class="product">
            <img class="img-product" src="asset/image-backend/kit-ongle.jpg" alt="">
            <div class="product-description">
            <a href="fiche_produit-4.php"><p>Kit sublime ongles</p></a>
            <p class="price">17 €</p>
            </div>
        </article>
        <article class="product">
             <img class="img-product" src="asset/image-backend/brosse-a-dents.jpg" alt="">
             <div class="product-description">
                <a href="fiche_produit-5.php"><p>Dentifrice blancheur</p></a>
                <p class="price">12 €</p>
             </div>
        </article>
        <article class="product">
            <img class="img-product" src="asset/image-backend/kit-bien-etre.jpg" alt="">
            <div class="product-description">
                <a href="fiche_produit-6.php"><p>Kit relaxant parfumé</p></a>
                <p class="price">45 €</p>
            </div>
        </article>
    </section> 
    </main>
</body> 

<?php include 'config/template/footer.php'; ?>

