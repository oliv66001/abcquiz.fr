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
          <h1 class="text-center">Quiz Stranger Things 2</h1>
        </div>
        <article class="col">
          <p id="resume">
            Résumé : Elfe a disparu Mike ne désespère pas de la revoir. Une nouvelle venue Max intrigue Lucas et Dustin. Elfe s'est retrouvée seule dans la forêt elle ne retourne pas chez Mike de peur d'être capturée par le laboratoire, mais la menace court toujours. Les champs de citrouilles aux alentours d'Hawkins en portent les stigmates. Le shérif Hopper et ses hommes mènent l'enquête. Bientôt Mike, Dustin, Lucas, Nancy, Jonathan et Elfe seront mis à contribution pour trouver ce qui ne tourne pas rond dans la ville d'Hawkins...
        </p></article>
      </div>
      <div class="row">
        <div class="col">
          <article id="questionReponse">
            <h4>1. Quel film est à l'affiche du cinéma d'Hawkins ?</h4>
            <div class="formulaire">
              <form id="form1">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio1" value="1" not(:checked ) />
                  Retour vers le future
                  <label class="form-check-label" for="radio1"> </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio2" value="2" />
                  Le seigneur des anneaux
                  <label class="form-check-label" for="radio1"> </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio3" value="3" />
                 la Belle et la bête
                  <label class="form-check-label" for="radio1"> </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio4" value="4" />
                  Terminator
                  <label class="form-check-label" for="radio1"> </label>
                </div>
              </form>
            </div>
            <p id="goodResponse1" class="response"></p>

            <h4>2. Combien de cartons de vieux jouets Mike est obligé de préparer pour le vide grenier ?</h4>
            <div class="formulaire">
              <form id="form2">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio5" value="5" not(:checked ) />5
                 
                  <label class="form-check-label"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio6" value="6" />4
                  <label class="form-check-label"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio7" value="7" />3
                  <label class="form-check-label"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio8" value="8" />2
                  <label class="form-check-label"></label>
                </div>
              </form>
            </div>
              <p id="goodResponse2" class="response"></p>

              <h4>
                3. En quoi Elfe veut-elle se déguiser pour pouvoir sortir pour halloween ?
              </h4>
              <div class="formulaire">
              <form id="form3">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio9" value="9" not(:checked ) />En princesse
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio10" value="10" />En fantôme
                  <label class="form-check-label" for="radio2"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio11" value="11" />En monstre
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio12" value="12" />Elle sait qu'elle n'a pas le droit de sortir
                  <label class="form-check-label" for="radio2"></label>
                </div>
              </form>
            </div>
            <p id="goodResponse3" class="response"></p>
            <h4>
              4. Quel costume porte Bob Newby le soir d'halloween ?
            </h4>
            <div class="formulaire">
              <form id="form4">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio13" value="13" not(:checked
                    ) />Un costume de vampire
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio14" value="14" />Un costume de ghostbusters
                  <label class="form-check-label" for="radio2"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio15" value="15" />Un costume de super man
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio16" value="16" />Un costume de jack l'éventreur
                  <label class="form-check-label" for="radio2"></label>
                </div>
              </form>
            </div>
            <p id="goodResponse4" class="response"></p>

            <h4>
              5. Que découvre Joyce en arrière-plan sur les images tournées par Will le soir d'halloween ?
            </h4>
            <div class="formulaire">
              <form id="form5">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio17" value="17" not(:checked ) />Un Démogorgon
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio18" value="18" />Le monstre qu'avait déssiné Will
                  <label class="form-check-label" for="radio2"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio19" value="19" />Max
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
              6. Que fait Murray Bauman après avoir entendu l'enregistrement et les explications de Nancy et Jonathan sur le laboratoire et se qui s'y passe ?
            </h4>
            <div class="formulaire">
              <form id="form6">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio21" value="21" not(:checked ) />Il les fait sortir de chez lui
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio22" value="22" />Il appelle les parents de Barbara
                  <label class="form-check-label" for="radio2"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio23" value="23" />Il contacte le gouvernement
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio24" value="24" />Il boit un verre de vodka
                  <label class="form-check-label" for="radio2"></label>
                </div>
              </form>
            </div>
            <p id="goodResponse6" class="response"></p>
            <h4>
              7. Pourquoi Elfe n'arrive pas à tuer l'homme qui a fait des électros choque à sa mère ?
            </h4>
            <div class="formulaire">
              <form id="form7">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio25" value="25" not(:checked ) />Ce n'est pas une tueuse
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio26" value="26" />Elle voit une photo de ses filles
                  <label class="form-check-label" for="radio2"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio27" value="27" />La police arrive
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio28" value="28" />Elle croit qu'elle l'a tué mais il est toujours en vie
                  <label class="form-check-label" for="radio2"></label>
                </div>
              </form>
            </div>
            <p id="goodResponse7" class="response"></p>
            <h4>
              8. Pendant que Elfe et Hopper vont au laboratoire pour fermer le portail que font Max, Steve, Lucas, Dustin et Mike ?
            </h4>
            <div class="formulaire">
              <form id="form8">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio29" value="29" not(:checked
                    ) />Ils aident Will à se débarrasser de ce qu'il a en lui
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio30" value="30" />Il affronte un Démogorgon
                  <label class="form-check-label" for="radio2"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio31" value="31" />Ils vont dans les tunnels tout brûler
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio32" value="32" />Ils restent chez Will pour les attendre
                  <label class="form-check-label" for="radio2"></label>
                </div>
              </form>
            </div>
            <p id="goodResponse8" class="response"></p>

            <h4>
              9. Qui danse avec Dustin au bal d'hiver ?
            </h4>
            <div class="formulaire">
              <form id="form9">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio33" value="33" not(:checked ) />Betty
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio34" value="34" />Suzie
                  <label class="form-check-label" for="radio2"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio35" value="35" />Nancy
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio36" value="36" />Max
                  <label class="form-check-label" for="radio2"></label>
                </div>
              </form>
            </div>
            <p id="goodResponse9" class="response"></p>
            <h4>
              10. Qui pendant le bal d'hiver est au desssus du gymnase dans le monde à l'envers ?
            </h4>
            <div class="formulaire">
              <form id="form10">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio37" value="37" not(:checked ) />Des monstres volants
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio38" value="38" />Le monstre dessiner par Will
                  <label class="form-check-label" for="radio2"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio39" value="39" />Des racines vivantes
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio40" value="40" />Un gros nuage noir
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
<script src="./script.js/StrangerThings2.js "></script>
<!--<script src="./script.js/cookies.js"></script>--></body>

</html>