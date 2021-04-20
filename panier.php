<?php include 'pdo.php';
include 'config/template/head.php'; 
include 'config/template/nav.php'; ?>

<?php
// DECLARATION DES VARIABLES ET AJOUT DE PRODUIT AU PANIER
if (isset($_POST['product_id'], $_POST['quantity']) && is_numeric($_POST['product_id']) && is_numeric($_POST['quantity'])) {
    // Déclarer les variables en s'assurant qu'elles soient de type chiffre 
    $product_id = (int)$_POST['product_id'];
    $quantity = (int)$_POST['quantity'];
    // Préparer la requête SQL, on vérifie que le produit soit dans la base de données
    $stmt = $pdo->prepare('SELECT * FROM products WHERE id = ?');
    $stmt->execute([$_POST['product_id']]);
    // Récupérer les produits de la base de données et les retourner en tant que tableau
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    // Vérifier si le produit existe 
    if ($product && $quantity > 0) {
        // Puisque le produit existe dans la base de données on peut créer et mettre à jour la variable session pour le panier 
        if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
            if (array_key_exists($product_id, $_SESSION['cart'])) {
                // Le produit est dans le panier donc on met à jour la quantité 
                $_SESSION['cart'][$product_id] += $quantity;
            } else {
                // Le produit n'est pas dans le panier alors on l'ajoute
                $_SESSION['cart'][$product_id] = $quantity;
            }
        } else {
            // Il n'y a pas de produit dans le panier, on ajoute le premier produit dedans 
            $_SESSION['cart'] = array($product_id => $quantity);
        }
    }
}

// SUPPRIME LES PRODUITS DU PANIER
    // Supprimer le produit du panier, vérifier les paramètres de l'url delete, l'id est un nombre et s'assurer que l'id soit dans le panier  
    if (isset($_GET['delete']) && is_numeric($_GET['delete']) && isset($_SESSION['cart']) && isset($_SESSION['cart'][$_GET['delete']])) {
        // Supprime le produit du panier
        unset($_SESSION['cart'][$_GET['delete']]);
        $quantity=0;
    }

//MISE A JOUR DU PANIER AVEC LE BOUTON DE MISE A JOUR CHANGER LES QUANTITES DEPUIS LE PANIER
    // Met à jour les quantités quand l'utilisateur clique sur le bouton "update" 
if (isset($_POST['update']) && isset($_SESSION['cart'])) {
    // Faire une boucle à travers les données publiées pour pouvoir mettre à jour chaque produit dans le panier  
    foreach ($_POST as $k => $v) {
        if (strpos($k, 'quantity') !== false && is_numeric($v)) {
            $id = str_replace('quantity-', '', $k);
            $quantity = intval($v);   
            // Vérifier et valider
            if (is_numeric($id) && isset($_SESSION['cart'][$id]) && $quantity > 0) {
                // Mettre à jour la nouvelle quantité
                $_SESSION['cart'][$id] = $quantity;
            }
        }
    }
    header('location:panier.php?page-panier=cart');
    exit();
}

// Vérifier la variable session pour les produits du panier 
$products_in_cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
$products = array();
$subtotal = 0.00;
// S'il y a des produits dans le panier
if ($products_in_cart) {
    // Il y a des produits dans le panier donc il faut sélectionner ceux de la base de données 
    $array_to_question_marks = implode(',', array_fill(0, count($products_in_cart), '?'));
    $stmt = $pdo->prepare('SELECT * FROM products WHERE id IN (' . $array_to_question_marks . ')');
    //Juste besoin des array keys mais pas des valeurs, les keys sont les id des produits
    $stmt->execute(array_keys($products_in_cart));
    // Récupère le produit de la base de données et le retourne en tant que tableau 
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // Calcul du sous-total
    foreach ($products as $product) {
        $subtotal += (float)$product['price'] * (int)$products_in_cart[$product['id']];
    }
}
?>

<hr>
<div class="img-basket">
    <img src="asset/img-backend-webp/img-panier2.webp" alt="Sac de course en tissu de type toad bag">
</div>
<section class="basket">
    <h2>PANIER</h2>
    <form action='panier.php?page-panier=cart' method='post'>
        <hr>
        <?php if (empty($products)): ?>
        <p>Vous n'avez pas ajouté de produit dans votre panier</p>
        <?php else: ?>
        <div class="basket-quantity">
            <?php foreach ($products as $product): ?>
            <!-- Image produit -->
            <div class="basket-product">
                <a href="panier.php?page=fiche_produit&id=<?=$product['id']?>">
                    <img src="asset/img-backend-webp/<?=$product['img']?>" alt="<?=$product['alt']?>">
                    <p class="basket-price">&euro;<?=$product['price'] * $products_in_cart[$product['id']]?></p>
                </a>
                <!-- Nom produit -->
                <a class="product-name-basket"
                    href="fiche_produit.php?page=product&id=<?=$product['id']?>"><?=$product['name']?></a>
                <input class="product-quantity" type="number" name="quantity-<?=$product['id']?>"
                    value="<?=$products_in_cart[$product['id']]?>" min="1" max="<?=$product['quantity']?>"
                    placeholder="Quantity" required>
                <a href="panier.php?page=panier=cart&delete=<?= $product['id']?>" value="Supprimer" id="delete"
                    name="delete" class="delete-input">Supprimer</a>
            </div>
            <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <input type="submit" value="Mettre à jour le panier" name="update" class="update">
    </form>

    <div class="box">
        <div class="total">
            <p>Sous-total</p>
            <p>&euro;<?=$subtotal?></p>
        </div>
        <div class="total">
            <p>Livraison standard</p>
            <p>Offerte</p>
        </div>
        <div class="total">
            <p class="bold">TOTAL</p>
            <p class="bold">&euro;<?=$subtotal?></p>
        </div>
        <form action="" method="post">
            <input type="submit" value="Valider ma commande" name="envoyer" class="basket-input">
        </form>
    </div>
</section>

<?php include 'config/template/footer.php'; ?>