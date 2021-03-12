<?php include 'config/template/head.php'; ?>
<header>
    <?php include 'config/template/nav.php'; ?>
</header>
<h2 class="text-center mt-5 mb-5">Page Accueil</h2>
<hr>


<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Description" content=""/>
    <title>COSMETICS</title>
    <link type="text/css" rel="stylesheet" href=".css">
</head>
<body> 
    <main>
        <!--<h1>COSMETICS</h1>-->
        <!--<p>My first paragraph.</p>-->
        
        <!--je mets rien dedans car en général les images je les met en background-->
    <section class="hero-image">
    </section>

    <section class="home-product">
        <article class="home-soap">
            <img class="img-product" src="asset/image-backend/savon-algues.jpg" alt="">
            <p>Savon aux algues</p>
            <p>€25</p> 
        </article>
        <article class="home-roll">
            <img class="img-product" src="asset/image-backend/roll.jpg" alt="">
            <p>Roll anti-stress</p>
            <p>€17</p>
        </article>
        <article class="home-elixir">
            <img class="img-product" src="asset/image-backend/elixir.jpg" alt="">
            <p>Elixir Rosa</p>
            <p>€35</p>
        </article>
        <article class="home-nail-assortment">
            <img class="img-product" src="asset/image-backend/kit-ongle.jpg" alt="">
            <p>Kit sublime ongle</p>
            <p>€17</p>
        </article>
        <article class="home-toothpaste">
             <img class="img-product" src="asset/image-backend/brosse-a-dents.jpg" alt="">
            <p>Dentifrice blancheur</p>
            <p>€12</p>
        </article>
        <article class="home-well-being-kit">
            <img class="img-product" src="asset/image-backend/kit-bien-etre.jpg" alt="">
            <p>Kit relaxant parfumé</p>
            <p>€45</p>
        </article>
    </section> 
    </main>
</body> 
</html> 

<?php include 'config/template/footer.php'; ?>