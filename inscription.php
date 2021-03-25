<?php include 'config/template/head.php'; ?>
<?php include 'config/template/nav.php'; ?>

<hr>
<section class="container">
	<h2 class="text-center mb-3">INSCRIPTION</h2>
	<form action="" method="post">
		<div class="mb-3">
			<label for="name" class="form-label">Nom</label>
			<input type="text" class="form-control" id="name" name="nom">
		</div>
		<div class="mb-3">
			<label for="surname">Prénom</label>
			<input type="text" class="form-control" id="surname" name="prenom">
		</div>
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
			<input type="text" class="form-control" id="address" name="Adresse postale">
		</div>
		<div class="mb-3">
			<label for="phone">Téléphone</label>
			<input type="tel" class="form-control" id="phone" name="telephone" pattern="[0-9]{10}">
		</div>
		<div class="mb-3">
			<label for="mail">Adresse mail</label>
			<input type="email" class="form-control" id="mail" name="mail">
		</div>
		<div class="mb-3">
			<label for="pseudo">Pseudo</label>
			<input type="text" class="form-control" id="pseudo" name="pseudo">
		</div>
		<div class="mb-3">
			<label for="password">Mot de passe</label>
			<input type="password" class="form-control" id="password" name="password">
		</div>
		<div class="mb-3">
			<label for="confirm-password">Confirmation mot de passe</label>
			<input type="text" class="form-control" id="confirm-password" name="confirm-password">
		</div>
		<div class="check">
			<input type="checkbox" checked="checked">
			<p>J'autorise Cosmetics à m'envoyer des informations promotionnelles sur les produits Cosmetics par e-mail,
				téléphone, courrier, messagerie ou SMS.</p>
		</div>
		<div class="rights">
			<p>Pour en savoir plus, notamment sur vos droits relatifs à vos données personnelles, consultez notre politique de
				confidentialité</p>
		</div>
		<div class="button-registration">
			<input type="submit" value="Créer mon compte" class="login-registration" name="envoyer" id="exampleInputEmail1">
		</div>
	</form>
</section>

<?php include 'config/template/footer.php'; ?>