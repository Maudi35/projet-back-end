<?php include 'config/template/head.php'; ?>
<header>
    <?php include 'config/template/nav.php'; ?>
</header>
<!--<h2 class="text-center mt-5 mb-5">Page login</h2>-->
<hr>

<div class="container">
  <h1 class="text-center mb-3">LOGIN</h1>
  <form action="" method="post">
  <div class="mb-3">
      <label for="pseudo" class="form-label">Pseudo</label>
      <input type="pseudo" class="form-control" id="pseudo" placeholder="Votre Pseudo" name="pseudo">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Votre Email" name="email">
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Mot de passe</label>
      <input type="password" class="form-control" id="password" placeholder="Votre mot de passe" name="password">
    </div>
    <div class=button-container>
    <input type="submit" value="Envoyer les données" class="login-registration" name="envoyer" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
</div>
  </form>


<?php include 'config/template/footer.php'; ?>
