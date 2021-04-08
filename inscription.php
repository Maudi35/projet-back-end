<?php include 'config/template/head.php'; ?>
<?php include 'config/template/nav.php'; ?>

<?php 
require_once 'config/function.php';
// session_start(); 

if(isset($_POST['envoyer'])) {
	$name = htmlspecialchars($_POST['name']);
	$surname = htmlspecialchars($_POST['surname']);
	$civilite = htmlspecialchars($_POST['civilite']);
	$address = htmlspecialchars($_POST['address']);
	$telephone = htmlspecialchars($_POST['telephone']);
	$email = htmlspecialchars($_POST['email']);
	$pseudo = htmlspecialchars($_POST['pseudo']);
	$password = htmlspecialchars($_POST['password']);
	$confirmpassword = htmlspecialchars($_POST['confirmpassword']);

	if(!empty($_POST['name']) and !empty($_POST['surname']) and !empty($_POST['civilite']) and !empty($_POST['address']) and !empty($_POST['telephone']) and !empty($_POST['email']) and !empty($_POST['pseudo']) and !empty($_POST['password']) and !empty($_POST['confirmpassword'])) {
		$pseudolength = strlen($pseudo); 
		$req = $pdo->prepare('SELECT * FROM users WHERE pseudo = ?'); 
		$req->execute(array($pseudo)); 
		$pseudoexist = $req->rowCount(); 
		if($pseudoexist == 0) {
			$tellenght = strlen($telephone); 
			if($tellenght == 10) {
				if(filter_var(intval($telephone), FILTER_VALIDATE_INT)) {
					if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
						$req = $pdo->prepare('SELECT * FROM users WHERE email = ?'); 
						$req->execute(array($email)); 
						$emailexist = $req->rowCount(); 
							if($emailexist == 0) {
								if(preg_match('~^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[$%?!]).{10,20}$~u', $password)== 1) {
									if($password === $confirmpassword) {
										$passwordhash = password_hash($password, PASSWORD_DEFAULT); 
										$insert = $pdo->prepare('INSERT INTO users (name, surname, civilite, address, tel, email, pseudo, password, role) VALUES (?,?,?,?,?,?,?,?,0)'); 
										$insert->execute(array($name, $surname, $civilite, $address, $telephone, $email, $pseudo, $passwordhash)); 
										header('location:login.php');
										exit(); 
									} else {
										header('location:inscription.php');
										exit(); 
									} 
								} else {
									header('location:inscription.php');
									exit();  
								}            
							} else {
								header('location:inscription.php');
								exit();  
							}
						} else {
							header('location:inscription.php');
							exit(); 
						}
					} else {
						header('location:inscription.php');
						exit();
					}
				} else {
					header('location:inscription.php');
					exit(); 
				}
			} else {
				header('location:inscription.php');
				exit(); 
			}
		} else {
			header('location:inscription.php');
			exit(); 
	}
} 
?> 

<section class="container">
	<h2 class="text-center mb-3">INSCRIPTION</h2>
	<form action="#" method="post">
		<div class="mb-3">
			<label for="name" class="form-label">Nom</label>
			<input type="text" class="form-control" id="name" name="name">
		</div>
		<div class="mb-3">
			<label for="surname">Prénom</label>
			<input type="text" class="form-control" id="surname" name="surname">
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
			<input type="text" class="form-control" id="address" name="address">
		</div>
		<div class="mb-3">
			<label for="phone">Téléphone</label>
			<input type="tel" class="form-control" id="phone" name="telephone" pattern="[0-9]{10}">
		</div>
		<div class="mb-3">
			<label for="email">Adresse mail</label>
			<input type="email" class="form-control" id="email" name="email">
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
			<input type="password" class="form-control" id="confirm-password" name="confirmpassword">
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
