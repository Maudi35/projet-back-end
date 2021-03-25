<?php include 'config/template/head.php'; ?>
<?php include 'config/template/nav.php'; ?>


<hr>
<div class="img-basket">
    <img src="asset/img-backend-webp/image-panier-cosmetics.webp" alt="Sac de course en tissu de type toad bag">
</div>

<section class="basket">
    <h2>PANIER</h2>
    <hr>
    <img src="asset/img-backend-webp/savon-algues.webp" alt="Savon aux algues camelia water clean">
    <hr>
    <div class="basket-quantity">
        <p>SAVON - ALGUES</p>
        <form action="" method="post">
            <input type="button" value="Supprimer" name="supprimer" class="delete-input">
        </form>
    </div>
    <div class="basket-quantity">
        <p>Quantité 1</p>
        <p>25€</p>
    </div>
    <div class="box">
        <div class="total">
            <p>Sous-total</p>
            <p>75€</p>
        </div>
        <div class="total">
            <p>Livraison standard</p>
            <p>Offerte</p>
        </div>
        <div class="total">
            <p class="bold">TOTAL</p>
            <p class="bold">75€</p>
        </div>
        <form action="" method="post">
            <input type="submit" value="Valider ma commande" name="envoyer" class="basket-input">
        </form>
    </div>
</section>

<?php include 'config/template/footer.php'; ?>