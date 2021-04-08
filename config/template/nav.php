<header>
<nav class="navbar">
    <div class="navbar-left">
        <a class="nav-desktop" href="index.php"><h1>COSMETICS</h1></a>
    </div>
    <ul class="navbar-right">
        <?php if (isset($_SESSION['auth'])): ?>
            <li><a class="nav-desktop" href="profil.php">Profil</a></li>
            <li><a class="nav-desktop" href="panier.php">Panier</a></li>
            <li><a href="logout.php">Se déconnecter</a></li>
        <?php else: ?>
            <li><a class="nav-desktop" href="inscription.php">Inscription</a></li>
            <li><a class="nav-desktop" href="login.php">Login</a></li>  
            <li><a class="nav-desktop" href="profil.php">Profil</a></li>
            <li><a class="nav-desktop" href="panier.php">Panier</a></li>
        <?php endif; ?>
    </ul>
</nav> 
</header>

<!-- ALERTE CONNECTE - DECONNECTE  -->

<?php if(isset($_SESSION['flash'])): ?>
    <?php foreach($_SESSION['flash'] as $type => $message): ?>
        <div class="alert alert-<?= $type; ?>">
            <?= $message; ?>
        </div>
    <?php endforeach; ?>
<?php endif; ?>
<?php unset($_SESSION['flash']); ?> 

<main>



