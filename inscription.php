<?php include 'config/template/head.php'; ?>
<header>
    <?php include 'config/template/nav.php'; ?>
</header>
<h2 class="text-center mt-5 mb-5">Page inscription</h2>
<hr>


<!-- HTML  -->

<html>
<body>
    <section class="inscription-content">
    <h2>COSMETICS</h2>
    <form>
        <div>
            <label for="name">Nom</label>
            <br>
            <input type="text" id="name" name="Nom">
        </div>  
        <div>
            <label for="surname">Prénom</label>
            <br>
            <input type="text" id="surname" name="Prénom">
        </div>
        <div id="selection">
        <label for="surname">Civilité</label>
            <select name="civilite" id="civilite">
                <option value="madame" selected>Mme</option>
                <option value="monsieur">M.</option>
                <option value="autre">Autre</option>
            </select>
        </div>
        <div>
            <label for="address">Adresse postale</label>
            <br>
            <input type="text" id="address" name="Adresse postale">
        </div>
        <div>
            <label for="phone">Téléphone</label>
            <br>
            <input type="text" id="phone" name="Téléphone">
        </div>
        <div>
            <label for="pseudo">Pseudo</label>
            <br>
            <input type="text" id="pseudo" name="Pseudo">
        </div>
        <div>
            <label for="password">Mot de passe</label>
            <br>
            <input type="text" id="password" name="Mot de passe">
        </div>
        <div>
            <label for="confirm">Confirmation de mot de passe</label>
            <br>
            <input type="text" id="confirm" name="Confirmation de mot de passe">
        </div>
        <div class="check">
            <input type="checkbox" checked="checked">
            <p>J'autorise Cosmetics à m'envoyer des informations promotionnelles sur les produits Cosmetics par e-mail, téléphone, courrier, messagerie ou SMS.</p>
        </div>
        <div>
            <p>Pour en savoir plus, notamment sur vos droits relatifs à vos données personnelles, consultez notre politique de confidentialité</p>
        </div>
        <input type="envoyer" value="Créer mon compte">
    </form>
    </section>
</body>
</html>


<?php include 'config/template/footer.php'; ?>