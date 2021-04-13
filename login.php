<?php include 'pdo.php'; 
include 'config/template/head.php'; 
include 'config/template/nav.php'; ?>

<?php 
if(isset($_POST['envoyer'])) {
  if(!empty($_POST) && !empty($_POST['pseudo']) && !empty($_POST['password'])) {
    $pseudo = htmlspecialchars($_POST['pseudo']); 
    $password = htmlspecialchars($_POST['password']); 
    // Requête préparée par rapport au pseudo de l'utilisateur puis son mdp 
    // On vérifie ses informations pour la connexion 
    $req = $pdo->prepare('SELECT * FROM users WHERE pseudo = ?'); 
    $req->execute(array($pseudo)); 
    $userexist = $req->rowCount(); 
    var_dump($userexist);
    if($userexist == 1) {
      $user = $req->fetch(PDO::FETCH_ASSOC);    
      $passworduser = $user['password']; 
      var_dump($passworduser); 
      $role = $user['role']; 
  
    // On gère les sessions en fonction du rôle de l'utilisateur 
    // O = utilisateur # 1 = admin 
    if(password_verify($password, $passworduser)){
      if($role == 0) {
        $_SESSION['id'] = $user['id']; 
        $_SESSION['auth'] = $user; 
        $_SESSION['flash']['success'] = 'Vous êtes maintenant connecté'; 
        header('location:profil.php');
        exit(); 
      } elseif ($role == 1) {
        $_SESSION['id'] = $user['id']; 
        $_SESSION['auth'] = $user; 
        $_SESSION['flash']['success'] = 'Vous êtes maintenant connecté'; 
        header('location:admin.php');
        exit(); 
      }
      } else {
        $_SESSION['flash']['danger'] = 'Identifiant ou mot de passe incorrecte';
      }
    }
  }
}
?>

<hr>
<section class="container">
  <h2 class="text-center mb-3">LOGIN</h2>
  <form action="" method="post">
    <div class="mb-3">
      <label for="pseudo" class="form-label">Pseudo ou email</label>
      <input type="text" class="form-control" id="pseudo" name="pseudo">
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

