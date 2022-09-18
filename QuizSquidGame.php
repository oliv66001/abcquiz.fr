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
          <h1 class="text-center">Quiz Squid game</h1>
        </div>
        <article class="col">
          <p id="resume">
            Résumé : Ils sont en <b>marge de la société</b> ils ont des
            dettes et sont venus pour jouer à un jeu qui peut les sortir de
            leur désespoir. Ils sont prêts à tout pour quitter leur vie de
            misère mais eux-mêmes ne savent pas comment va se dérouler ce
            jeu mortel. Les participant pensent jouer à des
            <a target="_blank" href="https://fr.wikipedia.org/wiki/Jeux_d%27enfants">jeux d'enfants</a>
            mais ils vont vite déchantés.
          </p>
        </article>
      </div>
      <div class="row">
        <div class="col">
          <article id="questionReponse">
            <h4>1. Quel est le premier jeu expliqué dans la série ?</h4>
            <div class="formulaire">
              <form id="form1">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio1" value="1" not(:checked ) />
                  Colamaya
                  <label class="form-check-label" for="radio1"> </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio2" value="2" />
                  1 2 3 soleil
                  <label class="form-check-label" for="radio1"> </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio3" value="3" />
                  Le calamar
                  <label class="form-check-label" for="radio1"> </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio4" value="4" />
                  Keidoro
                  <label class="form-check-label" for="radio1"> </label>
                </div>
              </form>
            </div>
            <p id="goodResponse1" class="response"></p>

            <h4>2. Que cache la fille de Seong Gi-Hun ?</h4>
            <div class="formulaire">
              <form id="form2">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio5" value="5" not(:checked ) />Elle
                  est triste
                  <label class="form-check-label"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio6" value="6" />Elle a eu une
                  mauvaise
                  note
                  <label class="form-check-label"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio7" value="7" />Elle a perdu son
                  portable
                  <label class="form-check-label"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio8" value="8" />Elle va partir aux
                  États-Unis
                  <label class="form-check-label"></label>
                </div>
              </form>
            </div>
              <p id="goodResponse2" class="response"></p>

              <h4>
                3. Quel est le premier jeu grâce auquel Seong Gi-Hun gagne de l'argent ?
              </h4>
              <div class="formulaire">
              <form id="form3">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio9" value="9" not(:checked ) />Le
                  Ddakji
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio10" value="10" />Les billes
                  <label class="form-check-label" for="radio2"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio11" value="11" />Le Dalgona
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio12" value="12" />Les courses de
                  chevaux
                  <label class="form-check-label" for="radio2"></label>
                </div>
              </form>
            </div>
            <p id="goodResponse3" class="response"></p>
            <h4>
              4. Quels sont les symboles sur les cartes de visite donner aux
              joueurs ?
            </h4>
            <div class="formulaire">
              <form id="form4">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio13" value="13" not(:checked
                    ) />Carré, Triangle et Rond
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio14" value="14" />Rond, Triangle et
                  Carré
                  <label class="form-check-label" for="radio2"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio15" value="15" />Lozange, Rond et
                  Rectangle
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio16" value="16" />Il y a juste un
                  nom
                  et un numéro de téléphone
                  <label class="form-check-label" for="radio2"></label>
                </div>
              </form>
            </div>
            <p id="goodResponse4" class="response"></p>

            <h4>
              5. Quelle est la deuxième règle du jeu ?
            </h4>
            <div class="formulaire">
              <form id="form5">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio17" value="17" not(:checked ) />Il
                  n'y a qu'une seule règle
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio18" value="18" />Si plus de la
                  moitié
                  des participant vote pour l'arrêt du
                  jeu le jeu s'arrête
                  <label class="form-check-label" for="radio2"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio19" value="19" />Les joueurs qui
                  refusent de jouer seront éliminer
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio20" value="20" />Les joueurs n'ont
                  pas le droit d'arrêter de jouer
                  <label class="form-check-label" for="radio2"></label>
                </div>
              </form>
            </div>

            <p id="goodResponse5" class="response"></p>

            <h4>
              6. Quel est le temps imparti pour finir<br />
              le jeu du 1 2 3 soleils ?
            </h4>
            <div class="formulaire">
              <form id="form6">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio21" value="21" not(:checked ) />2
                  minutes
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio22" value="22" />10 minutes
                  <label class="form-check-label" for="radio2"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio23" value="23" />5 minutes
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio24" value="24" />30 minutes
                  <label class="form-check-label" for="radio2"></label>
                </div>
              </form>
            </div>
            <p id="goodResponse6" class="response"></p>
            <h4>
              7. Que fait le maitre du jeu pendant 1 2 3 soleils ?
            </h4>
            <div class="formulaire">
              <form id="form7">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio25" value="25" not(:checked ) />Il
                  boit un verre
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio26" value="26" />Il mange
                  <label class="form-check-label" for="radio2"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio27" value="27" />Il est sur son
                  ordinateur
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio28" value="28" />Il passe un coup
                  de
                  téléphone
                  <label class="form-check-label" for="radio2"></label>
                </div>
              </form>
            </div>
            <p id="goodResponse7" class="response"></p>
            <h4>
              8. Avant de dire 1 2 3 soleils que dit la poupe géante ?
            </h4>
            <div class="formulaire">
              <form id="form8">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio29" value="29" not(:checked
                    ) />Preparez-vous
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio30" value="30" />Elle ne dit rien
                  <label class="form-check-label" for="radio2"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio31" value="31" />Elle annonce les
                  gagnants
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio32" value="32" />Attention
                  <label class="form-check-label" for="radio2"></label>
                </div>
              </form>
            </div>
            <p id="goodResponse8" class="response"></p>

            <h4>
              9. Quel est le numéro du participant qui sauve Seong Gi-Hun
              quand il tombe a 1 2 3 soleils ?
            </h4>
            <div class="formulaire">
              <form id="form9">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio33" value="33" not(:checked ) />n°
                  456
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio34" value="34" />n° 100
                  <label class="form-check-label" for="radio2"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio35" value="35" />n° 199
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio36" value="36" />n° 236
                  <label class="form-check-label" for="radio2"></label>
                </div>
              </form>
            </div>
            <p id="goodResponse9" class="response"></p>
            <h4>
              10. Combien de participant reste il après<br />
              le premier jeu ?
            </h4>
            <div class="formulaire">
              <form id="form10">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio37" value="37" not(:checked ) />250
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio38" value="38" />199
                  <label class="form-check-label" for="radio2"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio39" value="39" />130
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio40" value="40" />201
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
<script src="./script.js/SquidGame.js "></script>
<!--<script src="./script.js/cookies.js"></script>--></body>

</html>