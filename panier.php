<?php include 'config/template/head.php'; ?>
<header>
    <?php include 'config/template/nav.php'; ?>
</header>
<h2 class="text-center mt-5 mb-5">Page panier</h2>
<hr>


<!-- HTML -->
<html>
<body>
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
    <section class="subtotal">
        <div class="box">
       <ul class="first-list">
           <li>Sous-total</li>
           <li>75,00€</li>
       </ul>
       <ul class="second-list">
            <li>Livraison - Standard</li>
           <li>Offerte</li>
       </ul>
       <ul class="third-list">
           <li>TOTAL</li>
           <li><strong>75,00€</strong></li>
        <div class="submit">
            <input type="submit" value="PASSER COMMANDE">
        </div>
    </section>
     
</body>
</html>

<?php include 'config/template/footer.php'; ?>

