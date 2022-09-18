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
          <h1 class="text-center">Quiz Stranger Things 4</h1>
        </div>
        <article class="col">
          <p id="resume">
            Résumé : Les Byers sont partis avec Elfe vivre en Californie. Lucas a intégré l'équipe de basquet du lycée d'Hawkins, quand à Dustin et Mike ils sont dans un club de Donjon et Dragon les Hell Fire. Elfe est mal traitée dans son nouveau lycée et n'a plus de pouvoir. Elle subit sans rien dire attendant impatiemment les prochaines vacances pour revoir Mike. Jonathan, s'est fait un nouvel mais avec qui il fume de l'herbe. Triste d'être séparé de Nancy . Quant à Hopper il est bien vivant mais emprisonné en Russie un de ces gardiens contactera Joyce par un moyen détourné pour lui dire qu'il est bien vivant. Elle demandera de l'aide à Murray pour aller le chercher et le délivrer. Mais à Hawkins des meurtres d'une rare violence font l'objet d'une enquête de l'armée, et le colonel Sullivan chargé de cette affaire est persuadé que c'est Elfe la responsable. Quant aux habitants ils ne vont pas tarder à poursuivre le président du club Hell Fire sous l'impulsion du capitaine de l'équipe de basket du lycée d'Hawkins. Le responsable de tous les malheurs de la ville se fera enfin connaître. Il peut se faire appeler N°1, Henry ou Vecna il faudra que tous les héros et protagonistes des précédentes saisons s'unissent pour essayer de l'empêcher de mener son plan diabolique jusqu'au bout...
        </p></article>
      </div>
      <div class="row">
        <div class="col">
          <article id="questionReponse">
            <h4>1. Quelle est la mascotte du club de basket du lycée d'Hawkins ?</h4>
            <div class="formulaire">
              <form id="form1">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio1" value="1" not(:checked ) />
                  Un guepard
                  <label class="form-check-label" for="radio1"> </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio2" value="2" />
                  Un tigre
                  <label class="form-check-label" for="radio1"> </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio3" value="3" />
                 Un lion
                  <label class="form-check-label" for="radio1"> </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio4" value="4" />
                  Une marmotte
                  <label class="form-check-label" for="radio1"> </label>
                </div>
              </form>
            </div>
            <p id="goodResponse1" class="response"></p>

            <h4>2. Que fait Eddie Munson en plus d'être le président du club Hell Fire ?</h4>
            <div class="formulaire">
              <form id="form2">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio5" value="5" not(:checked ) />Il vend de la drogue
                 
                  <label class="form-check-label"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio6" value="6" />Il est le président du club d'échec
                  <label class="form-check-label"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio7" value="7" />Il a un look de hippie
                  <label class="form-check-label"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio8" value="8" />Il travaille chez un marchand de glaces
                  <label class="form-check-label"></label>
                </div>
              </form>
            </div>
              <p id="goodResponse2" class="response"></p>

              <h4>
                3. Que fait Elfe à Angella quand elle se moque d'elle à la patinoire devant Mike ?
              </h4>
              <div class="formulaire">
              <form id="form3">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio9" value="9" not(:checked ) />Elle lui balance son milkshake
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio10" value="10" />Elle lui donne un coup de patin à roulettes dans la figure
                  <label class="form-check-label" for="radio2"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio11" value="11" />Elle la fait tomber avec ses pouvoirs
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio12" value="12" />Elle la pousse
                  <label class="form-check-label" for="radio2"></label>
                </div>
              </form>
            </div>
            <p id="goodResponse3" class="response"></p>
            <h4>
              4. Qui trouve comment rompre la transe provoquée par Vecna grâce à la musique ?
            </h4>
            <div class="formulaire">
              <form id="form4">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio13" value="13" not(:checked
                    ) />Dustin
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio14" value="14" />Nancy
                  <label class="form-check-label" for="radio2"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio15" value="15" />Robin
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio16" value="16" />Max
                  <label class="form-check-label" for="radio2"></label>
                </div>
              </form>
            </div>
            <p id="goodResponse4" class="response"></p>

            <h4>
              5. D'où dans le monde à l'envers Vecna provoque la transe puis la mort de ses victimes ?
            </h4>
            <div class="formulaire">
              <form id="form5">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio17" value="17" not(:checked ) />La maison de Victor Creel
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio18" value="18" />Le laboratoire d'Hawkins
                  <label class="form-check-label" for="radio2"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio19" value="19" />Le mobile home de l'oncle d'Eddie Munson
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio20" value="20" />Le lac
                  <label class="form-check-label" for="radio2"></label>
                </div>
              </form>
            </div>

            <p id="goodResponse5" class="response"></p>

            <h4>
              6. Que dit Hopper aux prisonniers russes du festin auquel ils ont droit ?
            </h4>
            <div class="formulaire">
              <form id="form6">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio21" value="21" not(:checked ) />C'est grâce à lui
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio22" value="22" />C'est le moment de faire un plan d'évasion
                  <label class="form-check-label" for="radio2"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio23" value="23" />C'est pour les engraisser pour le monstre
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio24" value="24" />C'est le moment de bien manger pour reprendre des forces
                  <label class="form-check-label" for="radio2"></label>
                </div>
              </form>
            </div>
            <p id="goodResponse6" class="response"></p>
            <h4>
              7. A quel film Dustin et Eddie font référence quand il parle du Mordor ?
            </h4>
            <div class="formulaire">
              <form id="form7">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio25" value="25" not(:checked ) />Le seigneur des anneaux
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio26" value="26" />Le hobbit
                  <label class="form-check-label" for="radio2"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio27" value="27" />Aucun, ils font référence à un livre
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio28" value="28" />Les anneaux de pouvoir
                  <label class="form-check-label" for="radio2"></label>
                </div>
              </form>
            </div>
            <p id="goodResponse7" class="response"></p>
            <h4>
              8. Comment Murray et Joyce veulent-ils rentrer dans la prison pour libérer Hopper ?
            </h4>
            <div class="formulaire">
              <form id="form8">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio29" value="29" not(:checked
                    ) />En hélicoptère
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio30" value="30" />Par un tunnel
                  <label class="form-check-label" for="radio2"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio31" value="31" />En volant des uniformes russes
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio32" value="32" />Murray veut se faire passer pour Yuri
                  <label class="form-check-label" for="radio2"></label>
                </div>
              </form>
            </div>
            <p id="goodResponse8" class="response"></p>

            <h4>
              9. Qui crève les pneus de la police pour que Max, Érica, Dustin et Lucas aident Nancy, Robin, Éddie et Steve coincés dans le monde à l'envers ?
            </h4>
            <div class="formulaire">
              <form id="form9">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio33" value="33" not(:checked ) />Max
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio34" value="34" />Erica
                  <label class="form-check-label" for="radio2"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio35" value="35" />Dustin
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio36" value="36" />Lucas
                  <label class="form-check-label" for="radio2"></label>
                </div>
              </form>
            </div>
            <p id="goodResponse9" class="response"></p>
            <h4>
              10. Quand Elfe vient sauver Max dans le monde à l'envers que lui dit-elle ?
            </h4>
            <div class="formulaire">
              <form id="form10">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio37" value="37" not(:checked ) />C'est bien moi tu te rappelles notre soirée pyjama
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio38" value="38" />Je suis venue te sauver 
                  <label class="form-check-label" for="radio2"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio39" value="39" />Je sais qui il est je pouvais pas te laisser seul face à lui
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio" id="radio40" value="40" />Je suis relié depuis un congélateur de pâte à pizza
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
<script src="./script.js/StrangerThings4.js "></script>
<!--<script src="./script.js/cookies.js"></script>--></body>

</html>