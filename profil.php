<?php include 'config/template/head.php'; ?>
<header>
	<?php include 'config/template/nav.php'; ?>
</header>

<hr>
<section class="container">
	<h2 class="text-center mb-3">PROFIL</h2>
	<form action="" method="post">
		<div class="mb-3">
			<label for="pseudo" class="form-label">Pseudo</label>
			<input type="pseudo" class="form-control" id="pseudo" placeholder="Votre Pseudo" name="pseudo">
		</div>
		<div class="mb-3">
			<label for="password" class="form-label">Mot de passe</label>
			<input type="password" class="form-control" id="password" placeholder="Votre mot de passe" name="password">
		</div>
		<div class="mb-3">
			<label for="email" class="form-label">E-mail</label>
			<input type="email" class="form-control" id="email" placeholder="Votre Email" name="email">
		</div>
		<div class="mb-3">
			<label for="new-password" class="form-label">Nouveau mot de passe</label>
			<input type="new-password" class="form-control" id="new-password" placeholder="Votre nouveau mot de passe" name="new-password">
        </div>
        <div class=button-registration>
          <input type="submit" value="Enregistrer les informations" class="login-registration" name="envoyer" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
    </form>
</section>

<?php include 'config/template/footer.php'; ?>


