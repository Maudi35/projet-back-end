<?php include 'config/template/head.php';
include 'config/template/nav.php'; 
include 'pdo.php'; ?>

<?php 
require 'config/function.php'; 
// Création d'une fonction logged_only : l'utilisateur n'a pas accès à cette page s'il n'a pas de compte 
logged_only(); 

// intval permet de retourner la valeur entière équivalente d'une variable 
$getid = intval($_SESSION['id']); 
$req = $pdo->prepare('SELECT * FROM users WHERE id = ?'); 
$req->execute(array($getid)); 
$infoclient = $req->fetch(PDO::FETCH_ASSOC); 

?>

<hr>
<section class="container">
	<h2 class="text-center mb-3">PROFIL</h2>
	<form action="#" method="post">
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
			<input type="text" class="form-control" id="address" name="Adresse postale" value="<?= $infoclient['address']?>">
			<button type="button" class="form-button" id="adress" name="adress">Modifier</button>
		</div>
		<div class="mb-3">
			<label for="phone">Téléphone</label>
			<input type="tel" class="form-control" id="phone" name="telephone" pattern="[0-9]{10}" value="<?= $infoclient['tel']?>">
			<button type="button" class="form-button" id="tel" name="tel">Modifier</button>
		</div>
		<div class="mb-3">
			<label for="pseudo" class="form-label">Pseudo</label>
			<input type="text" class="form-control" id="pseudo" name="pseudo" value="<?= $infoclient['pseudo']?>">
			<button type="button" class="form-button" id="pseudo" name="pseudo">Modifier</button>
		</div>
		<div class="mb-3">
			<label for="email" class="form-label">E-mail</label>
			<input type="email" class="form-control" id="email" name="email" value="<?= $infoclient['email']?>">
			<button type="button" class="form-button" id="email" name="email">Modifier</button>
		</div>
		<div class="mb-3">
			<label for="password" class="form-label">Mot de passe</label>
			<input type="password" class="form-control" id="password" name="password" value="<?= $infoclient['password']?>">
			<button type="button" class="form-button" id="password" name="password">Modifier</button>
		</div>
		<div class="mb-3">
			<label for="password" class="form-label">Nouveau mot de passe</label>
			<input type="password" class="form-control" id="new-password" name="new-password" value="">
			<button type="button" class="form-button" id="new-password" name="new-password">Modifier</button>
		</div>
		<div class=button-registration>
			<input type="submit" value="Enregistrer les informations" class="login-registration" name="envoyer"
				id="exampleInputEmail1">
		</div>
	</form>
</section>

<?php include 'config/template/footer.php'; ?>

