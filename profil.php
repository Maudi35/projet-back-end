<?php include 'config/template/head.php'; ?>
<?php include 'config/template/nav.php'; ?>


<hr>
<section class="container">
	<h2 class="text-center mb-3">PROFIL</h2>
	<form action="" method="post">
	<div class="selection">
			<label for="formcontrolselect">Civilité</label>
			<select class="form-control" id="formcontrolselect" name="civilite">
				<option value="madame" selected>Mme</option>
				<option value="monsieur">M.</option>
				<option value="autre">Autre</option>
			</select>
		</div>
		<div class="mb-3">
			<label for="address">Adresse postale</label>
			<input type="text" class="form-control input-flex" id="address" name="Adresse postale" value="56 Rue de la Bonnebière">
			<button type="button" class="form-button input-flex" id="pseudo" name="pseudo">Modifier</button>
		</div>
		<div class="mb-3">
			<label for="phone">Téléphone</label>
			<input type="tel" class="form-control input-flex" id="phone" name="telephone" pattern="[0-9]{10}" value="01 56 44 78 99">
			<button type="button" class="form-button input-flex" id="pseudo" name="pseudo">Modifier</button>
		</div>
		<div class="mb-3">
			<label for="pseudo" class="form-label">Pseudo</label>
			<input type="text" class="form-control input-flex" id="pseudo" name="pseudo" value="Pierre54">
			<button type="button" class="form-button input-flex" id="pseudo" name="pseudo">Modifier</button>
		</div>
		<div class="mb-3">
			<label for="email" class="form-label">E-mail</label>
			<input type="email" class="form-control input-flex" id="email" name="email" value="pierre-tylurrude@gmail.com">
			<button type="button" class="form-button input-flex" id="pseudo" name="pseudo">Modifier</button>
		</div>
		<div class="mb-3">
			<label for="password" class="form-label">Mot de passe</label>
			<input type="password" class="form-control input-flex input-style" id="password" name="password" value="dhoefnzf4">
			<button type="button" class="form-button input-flex" id="pseudo" name="pseudo">Modifier</button>
		</div>
		<div class="mb-3">
			<label for="password" class="form-label">Nouveau mot de passe</label>
			<input type="password" class="form-control input-flex" id="new-password" name="new-password" value="dhoefnzf56">
			<button type="button" class="form-button input-flex" id="pseudo" name="pseudo">Modifier</button>
		</div>
		<div class=button-registration>
			<input type="submit" value="Enregistrer les informations" class="login-registration" name="envoyer"
				id="exampleInputEmail1">
		</div>
	</form>
</section>

<?php include 'config/template/footer.php'; ?>