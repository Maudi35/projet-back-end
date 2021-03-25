<?php include 'config/template/head.php'; ?>
<?php include 'config/template/nav.php'; ?>


<hr> 
<section class="container">
    <h2 class="text-center mb-3">LOGIN</h2>
    <form action="" method="post">
        <div class="mb-3">
          <label for="pseudo" class="form-label">Pseudo</label>
          <input type="text" class="form-control" id="pseudo" name="pseudo">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Mot de passe</label>
          <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class=button-registration>
          <input type="submit" value="Se connecter" class="login-registration" name="envoyer" id="exampleInputEmail1">
        </div>
    </form>
</section>

<?php include 'config/template/footer.php'; ?>

