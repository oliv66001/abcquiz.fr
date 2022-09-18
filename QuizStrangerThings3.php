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
          <h1 class="text-center">Quiz Stranger Things 3</h1>
        </div>
        <article class="col">
          <p id="resume">
            Résumé : Nous sommes à l'intérieur d'une base Russe construite sous le nouveau grand centre commercial d'Hawkins. Les Russes veulent r'ouvrir le passage. Des rats infectés par le virus du monde à l'envers, meurent dans un entrepôt pour faire naître un monstre qui ne tardera pas à infecter la population d'Hawkins en commençant par Billy le frère de Max. Dustin captera un message russe et demandera de l'aide à Steve pour le comprendre. Nancy et Jonathan enquêteront sur une affaire étrange de rats qui mangent des produits chimiques. Les héros des deux premières saisons seront séparés mais sans le savoir, ils enquêteront chacun de leur côté sur une histoire identique. Une invasion programmée....
        </p></article>
      </div>
      <div class="row">
        <div class="col">
          <article id="questionReponse">
            <h4>1. Que veut donner Billy le nouveau maître nageur à Karen Wheeler ?</h4>
            <div class="formulaire">
              <form id="form1">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio1" value="1" not(:checked ) />
                  Des cours particuliers
                  <label class="form-check-label" for="radio1"> </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio2" value="2" />
                  Un rendez-vous chez lui
                  <label class="form-check-label" for="radio1"> </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio3" value="3" />
                 Une boîte mystèrieuse
                  <label class="form-check-label" for="radio1"> </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio4" value="4" />
                  Le virus du monde à l'envers
                  <label class="form-check-label" for="radio1"> </label>
                </div>
              </form>
            </div>
            <p id="goodResponse1" class="response"></p>

            <h4>2. À quelle occasion Dustin capte-t-il le message codé des Russes ?</h4>
            <div class="formulaire">
              <form id="form2">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio5" value="5" not(:checked ) />Avec la radio du lycée
                 
                  <label class="form-check-label"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio6" value="6" />En voulant contacter Hopper
                  <label class="form-check-label"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio7" value="7" />A côté du laboratoire
                  <label class="form-check-label"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio8" value="8" />En voulant contacter Suzie
                  <label class="form-check-label"></label>
                </div>
              </form>
            </div>
              <p id="goodResponse2" class="response"></p>

              <h4>
                3. Quelle excuse donne Nancy à son patron pour aller enquêter sur les rats chez Mme Driscoll ?
              </h4>
              <div class="formulaire">
              <form id="form3">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio9" value="9" not(:checked ) />Elle doit faire une course pour sa mère
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio10" value="10" />Elle doit aller chercher son petit frère
                  <label class="form-check-label" for="radio2"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio11" value="11" />Elle y va sans rien demander
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio12" value="12" />Elle a des problèmes de fille
                  <label class="form-check-label" for="radio2"></label>
                </div>
              </form>
            </div>
            <p id="goodResponse3" class="response"></p>
            <h4>
              4. Qui aide Dustin et Steve à traduire le code Russe ?
            </h4>
            <div class="formulaire">
              <form id="form4">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio13" value="13" not(:checked
                    ) />Max
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio14" value="14" />Robin
                  <label class="form-check-label" for="radio2"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio15" value="15" />Nancy
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio16" value="16" />Joyce
                  <label class="form-check-label" for="radio2"></label>
                </div>
              </form>
            </div>
            <p id="goodResponse4" class="response"></p>

            <h4>
              5. Où va Joyce pour comprendre pourquoi les aimants sont démagnétisés ?
            </h4>
            <div class="formulaire">
              <form id="form5">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio17" value="17" not(:checked ) />Chez Hopper
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio18" value="18" />Chez le Dr Sam Owens
                  <label class="form-check-label" for="radio2"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio19" value="19" />Chez Murray bauman
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio20" value="20" />Chez Mr. Clarke
                  <label class="form-check-label" for="radio2"></label>
                </div>
              </form>
            </div>

            <p id="goodResponse5" class="response"></p>

            <h4>
              6. Que trouvent Nancy et Jonathan quand ils retournent chez Mme Driscoll chercher le rat ?
            </h4>
            <div class="formulaire">
              <form id="form6">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio21" value="21" not(:checked ) />Rien, il n'y a personne
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio22" value="22" />Une ambulance qui vient chercher la vieille dame
                  <label class="form-check-label" for="radio2"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio23" value="23" />Mme Driscoll mangeant de l'engrais
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio24" value="24" />Billy
                  <label class="form-check-label" for="radio2"></label>
                </div>
              </form>
            </div>
            <p id="goodResponse6" class="response"></p>
            <h4>
              7. Comment Alexei surnomme Hopper quand il lui dit qu'il veut prendre d'assaut leur base ?
            </h4>
            <div class="formulaire">
              <form id="form7">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio25" value="25" not(:checked ) />Terminator
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio26" value="26" />Chips
                  <label class="form-check-label" for="radio2"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio27" value="27" />Crocodile Dundee
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio28" value="28" />Rambo avec des bourlets
                  <label class="form-check-label" for="radio2"></label>
                </div>
              </form>
            </div>
            <p id="goodResponse7" class="response"></p>
            <h4>
              8. Une fois échappé de la base russe quel film passe dans la salle où se cachent Erica, Robin, Dustin et Steve ?
            </h4>
            <div class="formulaire">
              <form id="form8">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio29" value="29" not(:checked
                    ) />Retour vers le futur
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio30" value="30" />Terminator
                  <label class="form-check-label" for="radio2"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio31" value="31" />Un jour sans fin
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio32" value="32" />Rambo
                  <label class="form-check-label" for="radio2"></label>
                </div>
              </form>
            </div>
            <p id="goodResponse8" class="response"></p>

            <h4>
              9. Quel surnom donne Suzie à Dustin ?
            </h4>
            <div class="formulaire">
              <form id="form9">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio33" value="33" not(:checked ) />Dustinou
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio34" value="34" />Dustininou
                  <label class="form-check-label" for="radio2"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio35" value="35" />Dusti
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio36" value="36" />Dusti poulet
                  <label class="form-check-label" for="radio2"></label>
                </div>
              </form>
            </div>
            <p id="goodResponse9" class="response"></p>
            <h4>
              10. Que dit Hopper au russe avant de le jeter dans la machine électromagnétique ?
            </h4>
            <div class="formulaire">
              <form id="form10">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio37" value="37" not(:checked ) />On me la fait pas à moi
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio38" value="38" />hasta la vista
                  <label class="form-check-label" for="radio2"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio39" value="39" />Parle à ma main
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio40" value="40" />J'entrave pas un mot de russe
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
<script src="./script.js/StrangerThings3.js "></script>
<!--<script src="./script.js/cookies.js"></script>--></body>

</html>