<?php
include_once "includes/header1.php";
?>

<?php
include_once "includes/navbar.php";
?>
<main>
  <div class="container">
    <div class="row">
      <div class="col">
        <div>
          <h2 class="text-center">Votre quiz !</h2>
        </div>

        <div>
          <h1 class="text-center">Quiz Stranger Things 1</h1>
        </div>
        <article class="col">
          <p id="resume">
            Résumé : L'histoire se déroule dans une petite ville de l'Indiana État du Midwest des États-Unis.
            Les amis Mike, Dustin, Will et Lucas sont des passionnés de donjon et dragon un jeu de rôles bien connu des initiés qui se joue en équipe avec des dés et un livre. Après une partie de 10 heures; 
            Will disparaît sans laisser de trace, ses amis et sa famille feront tout pour le retrouver. Mais ils vont vite se rendre compte que sa disparition n'a rien d'un fait naturel...        </p>
        </article>
      </div>
      <div class="row">
        <div class="col">
          <article id="questionReponse">
            <h4>1. Quel jour à lieu la disparition de Will Byers ?</h4>
            <div class="formulaire">
              <form id="form1">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio1" value="1" not(:checked ) />
                  Elle a lieu le mardi
                  <label class="form-check-label" for="radio1"> </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio2" value="2" />
                  Elle a lieu le vendredi
                  <label class="form-check-label" for="radio1"> </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio3" value="3" />
                  Elle a lieu le dimanche
                  <label class="form-check-label" for="radio1"> </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio4" value="4" />
                  Elle a lieu le lundi
                  <label class="form-check-label" for="radio1"> </label>
                </div>
              </form>
            </div>
            <p id="goodResponse1" class="response"></p>

            <h4>2. Qui pense que 11 vient d'un asile de fou quand il la rencontre ?</h4>
            <div class="formulaire">
              <form id="form2">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio5" value="5" not(:checked ) />Elle
                  Mike
                  <label class="form-check-label"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio6" value="6" />Lucas
                  <label class="form-check-label"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio7" value="7" />Will
                  <label class="form-check-label"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio8" value="8" />Dustin
                  <label class="form-check-label"></label>
                </div>
              </form>
            </div>
              <p id="goodResponse2" class="response"></p>

              <h4>
                3. Que dit Nancy à sa mère pour aller faire la fête chez Steve Harrington ?
              </h4>
              <div class="formulaire">
              <form id="form3">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio9" value="9" not(:checked ) />Qu'elle va à un rassemblement pour chercher Will Byers
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio10" value="10" />Qu'elle va chez Barbara
                  <label class="form-check-label" for="radio2"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio11" value="11" />Qu'elle va réviser chez Steve
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio12" value="12" />Qu'elle va faire des courses
                  <label class="form-check-label" for="radio2"></label>
                </div>
              </form>
            </div>
            <p id="goodResponse3" class="response"></p>
            <h4>
              4. Que pensent les adjoints du shérif sur les expériences menées au laboratoire d'Hawkins ?
            </h4>
            <div class="formulaire">
              <form id="form4">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio13" value="13" not(:checked
                    ) />Des singes volants
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio14" value="14" />Ils fabriquent des bombes
                  <label class="form-check-label" for="radio2"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio15" value="15" />Ils fabriquent des armes spatiales
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio16" value="16" />Ça sent pas bon
                  <label class="form-check-label" for="radio2"></label>
                </div>
              </form>
            </div>
            <p id="goodResponse4" class="response"></p>

            <h4>
              5. Quel nom donne Mike Wheeler à 11 quand il la rencontre ?
            </h4>
            <div class="formulaire">
              <form id="form5">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio17" value="17" not(:checked ) />Ange
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio18" value="18" />Nynphe
                  <label class="form-check-label" for="radio2"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio19" value="19" />Jane
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio20" value="20" />Elfe
                  <label class="form-check-label" for="radio2"></label>
                </div>
              </form>
            </div>

            <p id="goodResponse5" class="response"></p>

            <h4>
              6. Qui comprend en premier que Will est comme dans un monde à l'envers hormis ceux qui le savent ?
            </h4>
            <div class="formulaire">
              <form id="form6">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio21" value="21" not(:checked ) />Lucas
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio22" value="22" />Jim Hopper
                  <label class="form-check-label" for="radio2"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio23" value="23" />Mike
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio24" value="24" />Dustin
                  <label class="form-check-label" for="radio2"></label>
                </div>
              </form>
            </div>
            <p id="goodResponse6" class="response"></p>
            <h4>
              7. Où Nancy trouve un premier passage vers le monde à l'envers et y pénètre ?
            </h4>
            <div class="formulaire">
              <form id="form7">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio25" value="25" not(:checked ) />Dans un arbre
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio26" value="26" />Dans un mur chez Joyce Byers
                  <label class="form-check-label" for="radio2"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio27" value="27" />Dans le lycée
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio28" value="28" />Dans un trou près du laboratoire
                  <label class="form-check-label" for="radio2"></label>
                </div>
              </form>
            </div>
            <p id="goodResponse7" class="response"></p>
            <h4>
              8. Combattre le Démogorgon avec un lance pierre selon Mike c'est comme si ?
            </h4>
            <div class="formulaire">
              <form id="form8">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio29" value="29" not(:checked
                    ) />David avait vraiment battu Goliaht comme ça
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio30" value="30" />Un homme affrontait un ours à mains nues
                  <label class="form-check-label" for="radio2"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio31" value="31" />Frodon affrontait Sauron seul
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio32" value="32" />R2 D2 affrontait Dark Vador
                  <label class="form-check-label" for="radio2"></label>
                </div>
              </form>
            </div>
            <p id="goodResponse8" class="response"></p>

            <h4>
              9. Que demande Nancy à Elfe quand elle la rencontre pour la première fois ?
            </h4>
            <div class="formulaire">
              <form id="form9">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio33" value="33" not(:checked ) />C'est toi la fille dont Mike est amoureux
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio34" value="34" />Tu sais ou est Barbara
                  <label class="form-check-label" for="radio2"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio35" value="35" />Qui sont t'es parents
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio36" value="36" />Que faisait tu au laboratoire
                  <label class="form-check-label" for="radio2"></label>
                </div>
              </form>
            </div>
            <p id="goodResponse9" class="response"></p>
            <h4>
              10. Qu'arrive-t-il à Elfe quand elle sauve Dustin, Lucas et Mike du Démogorgon dans l'école après qu'il ait tué tous les militaires ?
            </h4>
            <div class="formulaire">
              <form id="form10">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio37" value="37" not(:checked ) />Elle disparaît avec lui
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio38" value="38" />Elle s'évanouie
                  <label class="form-check-label" for="radio2"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio39" value="39" />Elle est en sang
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio40" value="40" />Elle est projetée dans le monde à l'envers
                  <label class="form-check-label" for="radio2"></label>
                </div>
              </form>
            </div>
            <p id="goodResponse10" class="response"></p>
          </article>
        </div>
      </div>
    </div>
  </div>
  <div id="textFin" class="d-grid gap-2 col-6 mx-auto">
    <strong>Cliquez sur le bouton pour avoir votre résultat</strong>

    <button class="btn btn-outline-dark btn-md" type="button" id="submit">
      Résultat
    </button>
    <a href="index.php" class="text-center">Trouver un autre quiz</a>
   
  </div>
</main>

<?php
include_once "includes/footer.php";
?>

<script src="bootstrap.bundle.min.js "></script>
<script src="jquery-3.6.0.min.js "></script>
<script src="./script.js/StrangerThings1.js "></script>
<!--<script src="./script.js/cookies.js"></script>--></body>

</html>