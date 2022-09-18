<?php

//On vérifie si le formulaire à été envoyer
if (!empty($_POST)) {
  //Le formulaire à été envoyer
  //On verifie que tous les champ ont été remplis
  if (
    isset($_POST["nom"], $_POST["prenom"], $_POST["email"], $_POST["msg"], $_POST["Check1"])
    && !empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["email"]) &&
    !empty($_POST["msg"]) && !empty($_POST["Check1"])
  ) {
    //Le formulaire est complet
    //On récupère les données en les protégeant
    $nom = strip_tags($_POST["nom"]);


    if (strlen($nom) < 3) {
      die("Le nom est trop court");
    }

    $prenom = strip_tags($_POST["prenom"]);


    if (strlen($prenom) < 3) {
      die("Le prenom est trop court");
    }

    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
      die("L'adresse email est incorrecte");
    }

    $msg = htmlspecialchars($_POST["msg"]);

    $Check1 = strip_tags($_POST["Check1"]);


    if (isset($Check1) !== true) {
      die("La case n'est pas cochée");
    }

    //Ajouutez ici tous les controles souhaités


    //On enregistre en base de donnée
    require_once "connect.php";

    $sql = "INSERT INTO `contactabcquiz`(`nom`, `prenom`, `email`, `msg`) VALUES (:nom, :prenom, :email, :msg)";

    $query = $db->prepare($sql);

    $query->bindValue(":nom", $nom, PDO::PARAM_STR);
    $query->bindValue(":prenom", $prenom, PDO::PARAM_STR);
    $query->bindValue(":email", $_POST["email"], PDO::PARAM_STR);
    $query->bindValue(":msg", $msg, PDO::PARAM_STR);

    if (!$query->execute()) {
      die("Une erreure est survenue");
    }

    $id = $db->lastInsertId();
    // die("Message ajouté sous le numéro $id");
    header("Location: https://www.abcquiz.fr/mercimessage.php");
  } else {
    die("le formulaire n'est pas complet");
  }
}
$msg = "Ajouter un message";


//On peut rediriger vers la page de profil (par exemple)
//header("Location: indexContact.php");


//On inclus le header
include_once "includes/header1.php";

//On inclut la navbar
include "includes/navbar.php";

?>
<div class="container">
  <div class="row">
    <div class="col">
      <h3 class="text-center">
        Bonjour vous avez eu un problème sur un quiz, un problème sur une question dans un quiz.
        Vous avez des suggestions pour d'autre quiz.
        Vous voulez juste nous laisser un message, n'hésitez pas nous vous répondrons avec plaisir...
      </h3>

      <section class="text-center" id="main">
        <form class="row g-3" name="RegForm" action="" method="post" class="form-label">
          <div class="row g-3">
            <div class="col-md-6">
              <label for="nom" class="form-label">Nom</label>
              <input type="text" class="form-control" id="nom" placeholder="Votre nom" name="nom" required>

            </div>
            <div class="col-md-6">
              <label for="prenom" class="form-label">Prénom</label>
              <input type="text" class="form-control" id="prenom" placeholder="Votre prénom" name="prenom" required>

            </div>
          </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="text-center">
          <label for="email" class="form-label">E-mail</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="nom@example.com" required>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="text-center">
          <label for="msg" class="form-label">Message</label>
          <textarea class="form-control" id="msg" name="msg" placeholder="Votre message" rows="3" required></textarea>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="text-center">
          <div class="form-check">

            <label class="form-check-label" for="Check1"><input class="form-check-input" type="checkbox" name="Check1"
                required>
              Ces informations ne seront utilisées que pour vous répondre.
            </label>
            <div>
              Vous devez accepter avant de soumettre.
            </div>
          </div>
        </div>
        <div class="text-center">
          <button id="submit" class="btn" type="submit">Valider</button>
        </div>
      </div>
    </div>
    </form>
    </section>
  </div>
</div>

<!--<style>
.Form1 {
  margin-left: 70px;
  font-weight: bold;
  text-align: left;
  font-family: sans-serif, bold, Arial, Helvetica;
  font-size: 14px;
}

.buttons {
  display: flex;
  align-items: center;
  width: 100%;
}

div input {
  margin-right: 10px;
}

form {
  margin: 0 auto;
  width: 600px;
}

form input {
  padding: 10px;
}

form select {
  background-color: #ffffff;
  padding: 5px;
}

form textarea {
  padding: 10px;
  margin-bottom: 5px;
}

form label {
  display: block;
  width: 100%;
  margin-bottom: 5px;
}
</style>

<h5 style="margin: 25px">
  Bonjour vous avez eu un problème sur un quiz, un problème sur une question dans un quiz.
  Vous avez des suggestions pour d'autre quiz.
  Vous voulez juste nous laisser un message, n'hésitez pas nous vous répondrons avec plaisir...
</h5>
<div class="row g-3 align-items-center">
  <form name="formCom" class="items" action="" onsubmit="return Form1()" method="post">

    <div class="form-group">
      <label for="nom" class="form-label">Nom</label>
      <input type="text" placeholder="Votre nom" class="form-control-lg" id="nom" name="nom" required />


      <label for="prenom" class="form-label">Prénom</label>
      <input type="text" placeholder="Votre prénom " class="form-control-lg" id="prenom " name="prenom" required />


      <label for="email" class="form-label">Email</label>
      <input type="email" placeholder="exemple@email.fr" class="form-control-lg" id="email" name="email" required />


      <label for="msg">Commentaire</label>
      <textarea type="text" placeholder="Mon commentaire 500 caractères maxi" maxlength="500 " class="form-control-lg"
        id="msg" name="msg" rows="6" required></textarea>


    <button class="btn" type="button" id="submitForm"><input class="submitForm" type="submit" value="Envoyer"
        name="Envoyer" style="background: linear-gradient(#d9f0ff, #83c9f4, #7681b3);
  border-radius: 5px solid black; color: black;" /></button>
    <button class="btn" type="button" id="submitForm"> <input class="submitForm" type="reset" value="Réinitialiser"
        name="Reset" style="background: linear-gradient(#d9f0ff, #83c9f4, #7681b3);
  border-radius: 5px solid black; color: black;" /></button>
  </div>

  </div>
</form>
</div>-->
<?php
include_once "includes/footer.php";

?>

<script src="bootstrap.bundle.min.js "></script>
<script src="jquery-3.6.0.min.js"></script>
<script src="script.js/form.js"></script>
<script src="./script.js/cookies.js"></script>
</body>

</html>