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
          <h1 class="text-center">Quiz Iron Man 3</h1>
        </div>

        <article class="col">
          <p id="resume">
            Résumé :
            Suite à la victoire des <a href="https://www.allocine.fr/film/fichefilm_gen_cfilm=130440.html"
              target="_blank">Avengers</a> où il faut bien l'admettre <i>Tony Stark</i> a bien failli disparaître dans
            l'espace.
            L'Amérique se retrouve confrontée à une nouvelle menace le "Mandarin". Ce curieux personnage fait exploser
            des bombes un peu partout sur le sol américain, mais il comet l'erreur de faire exploser une bombe à coter
            D'<u>Happy Hogan</u> l'ancien garde du corps de Tony. Furieux Tony sort de l'hôpital en promettant au
            Mandarin de
            l'arrêter (juste lui et moi une bonne vengeance à l'ancienne). Malheureusement rien ne se passera comme
            prévu est le Mandarin
            ira même jusqu'à détruire la maison de Tony Stark. Tony fera tous sont possibles pour arrêter ce criminel et
            Ses complices....
          </p>
        </article>
        <div class="row">
          <div class="col">
            <article id="questionReponse">
              <h4>
                1. Qu'est ce qui explose dans la chambre de Maya Hansen en 1999 le jour de l'an 2000 ?
              </h4>
              <div class="formulaire">
                <form id="form1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio1" value="1" not(:checked ) />
                    Une plante
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio2" value="2" />
                    Un bouchon de champagne
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio3" value="3" />
                    Une vitre
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio4" value="4" />
                    Une bombe
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                </form>
              </div>
              <p id="goodResponse1" class="response"></p>

              <h4>
                2. Quel est le nouveau nom de War Machine ?
              </h4>
              <div class="formulaire">
                <form id="form2">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio5" value="5" not(:checked ) />
                    Iron Mangers
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio6" value="6" />Iron Attaque
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio7" value="7" />Iron Patriot
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio8" value="8" />Machine de Guerre
                    <label class="form-check-label"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse2" class="response"></p>

              <h4>
                3. Quel est le problème de la nouvelle armure d' Iron Man quand les hommes du Mandarin attaque sa maison
                à Malibu ?
              </h4>
              <div class="formulaire">
                <form id="form3">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio9" value="9" not(:checked
                      ) />Elle est endommagée à cause de l'attaque
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio10" value="10" />Un court circuit
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio11" value="11" />C'est un
                    prototype
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio12" value="12" />Elle n'est pas
                    rechargée
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse3" class="response"></p>
              <h4>
                4. Pourquoi Tony Stark ne récupère que deux morceaux de son armure quand il se libère du sommier ou il
                est attacher ?
              </h4>
              <div class="formulaire">
                <form id="form4">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio13" value="13" not(:checked
                      ) />Les autres morceaux se sont perdu en route
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio14" value="14" />Par manque
                    d'énergie
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio15" value="15" />Harley joue avec
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio16" value="16" />Ils sont coincés
                    dans le garage d'Harley
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse4" class="response"></p>

              <h4>
                5. Que dit a Tony Stark le dernier homme de main chargez de le surveiller après avoir lâché son arme ?
              </h4>
              <div class="formulaire">
                <form id="form5">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio17" value="17" not(:checked
                      ) />Je me rend
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio18" value="18" />Sincèrement j'en
                    peut plus de cette boîte Ils sont tous tarés
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio19" value="19" />C'est Tony qui
                    l'envoie valdinguer d'un coup de répulseur
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio20" value="20" />Il s'enfuit en
                    courant
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse5" class="response"></p>

              <h4>
                6. Après lui avoir fait un gros trou dans le ventre que dit Tony Stark à l'homme d'AIM venu pour enlever
                le président des états-unis ?
              </h4>
              <div class="formulaire">
                <form id="form6">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio21" value="21" not(:checked
                      ) />Régénère toi maintenant
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio22" value="22" />Tu t'en remettra
                    pas de celle là
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio23" value="23" />Tu va pas
                    revenir cette fois
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio24" value="24" />Bon
                    rétablissement espèce de fumier
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse6" class="response"></p>
              <h4>
                7. Comment s'appelle le protocole qui lance toutes les armures d'Iron Man du sous sol de Tony Stark ?
              </h4>
              <div class="formulaire">
                <form id="form7">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio25" value="25" not(:checked
                      ) />Fête à domicile
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio26" value="26" />Ambiance de noël
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio27" value="27" />Jarvis envoie
                    les enfants
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio28" value="28" />Réunion de
                    famille
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse7" class="response"></p>
              <h4>
                8. Combien d'armure d'Iron Man détruit Aldrich Killian sur le bateau ?
              </h4>
              <div class="formulaire">
                <form id="form8">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio29" value="29" not(:checked ) />4
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio30" value="30" />3
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio31" value="31" />2
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio32" value="32" />1
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse8" class="response"></p>

              <h4>
                9. Que dit Rod au président quand il le sauve ?
              </h4>
              <div class="formulaire">
                <form id="form9">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio33" value="33" not(:checked
                      ) />C'est une armure d'Iron Man contrôler par jarvis qui sauve le président
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio34" value="34" />Ont se tire
                    d'ici Mr le président
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio35" value="35" />C'est pas
                    l'armure qui fait le héro
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio36" value="36" />Ca vous
                    sacrément bien Mr le président mais j'ai besoin de cette armure
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse9" class="response"></p>
              <h4>
                10. Que retrouve Tony Stark à la fin dans les décombre de sa maison de Malibu ?
              </h4>
              <div class="formulaire">
                <form id="form10">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio37" value="37" not(:checked
                      ) />Un bout du lapin géant
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio38" value="38" />Un bout d'une
                    armure d'Iron Man
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio39" value="39" />Un pins du
                    Mandarin
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio40" value="40" />Un tournevis
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
  </div>
  <div id="textFin" class="d-grid gap-2 col-6 mx-auto">
    <strong>Cliquez sur le bouton<br />
      pour avoir votre résultat</strong>

    <button class="btn btn-outline-dark" type="button" id="submit">
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
<script src="./script.js/IronMan3.js "></script>
<!--<script src="./script.js/cookies.js"></script>--></body>

</html>