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
          <h1 class="text-center">Captain America : Le Soldat de l'hiver</h1>
        </div>

        <article class="col">
          <p id="resume">
            Résumé: Capitain America est bien intégré aux forces spéciales du SHIELD, avec Black Widow ils exécutent les
            missions que le directeur Nick Fury leurs donne. Mais il n'obéit pas aveuglement car il sait que chacune
            des missions qu'il accomplit peut mettre en danger le monde. Il va se retrouver au coeur d'un des plus gros
            complot jamais orchestré dans l'ombre par l'organisation qu'il pensait morte. Mais Hydra est bien de
            retour et leur homme de main un fantôme dans le milieu de l'assassinat d'état (le soldat de l'hiver)
            va-lui
            donner du fil à retordre. Même Nick Fury sera pris pour cible et écarté du jeu par Hydra...
          </p>
        </article>
        <div class="row">
          <div class="col">
            <article id="questionReponse">
              <h4>1. Pendant son footing du matin Steve Rogers dit à Sam Wilson chaque fois avant de le doubler ?</h4>
              <div class="formulaire">
                <form id="form1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio1" value="1" not(:checked ) />
                    Il lui dit deux fois à droite
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio2" value="2" />
                    Il lui dit tout le temps à gauche
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio3" value="3" />
                    Il lui dit tout le temps à droite
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio4" value="4" />
                    Il lui dit une fois à gauche une fois à droite
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                </form>
              </div>
              <p id="goodResponse1" class="response"></p>

              <h4>
                2. A quoi Black Widow compare Captain quand elle vient le chercher après son footing ?
              </h4>
              <div class="formulaire">
                <form id="form2">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio5" value="5" not(:checked ) />Un
                    dinosaure
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio6" value="6" />Un vieillard
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio7" value="7" />Un fossile
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio8" value="8" />Une machine de
                    guerre
                    <label class="form-check-label"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse2" class="response"></p>

              <h4>
                3. Selon Rumlow le chef de l'équipe du SHIELD comment saute des avions Captain America ?
              </h4>
              <div class="formulaire">
                <form id="form3">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio9" value="9" not(:checked
                      ) />Toujours le premier
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio10" value="10" />Avec prudence
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio11" value="11" />Le bouclier
                    devant
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio12" value="12" />Sans parachute
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse3" class="response"></p>
              <h4>
                4. Dans la première opération sur un cargo que mène Captain avec le SHIELD qui sécurise la salle des
                machines ?
              </h4>
              <div class="formulaire">
                <form id="form4">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio13" value="13" not(:checked
                      ) />Black Widow
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio14" value="14" />Captain America
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio15" value="15" />Jack Rollins
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio16" value="16" />Brock Rumlow
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse4" class="response"></p>

              <h4>
                5. Quelle mission avait Black Widow pendant la libération des otages sur le cargo ?
              </h4>
              <div class="formulaire">
                <form id="form5">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio17" value="17" not(:checked
                      ) />Stopper Georges Batroc
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio18" value="18" />Empêcher
                    l'évasion des terroristes
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio19" value="19" />Sauver en
                    priorité Jasper Sitwell
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio20" value="20" />Copier des
                    données secrètes du SHIELD
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse5" class="response"></p>

              <h4>
                6. Quel projet secrèt du SHIELD Fury montre à Captain America à son retour de mission ?
              </h4>
              <div class="formulaire">
                <form id="form6">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio21" value="21" not(:checked
                      ) />Projet fort knox
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio22" value="22" />Projet dedalle
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio23" value="23" />Projet Insight
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio24" value="24" />Projet
                    Armageddon
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse6" class="response"></p>
              <h4>
                7. Quel métier exercait le grand père de Nick Fury ?
              </h4>
              <div class="formulaire">
                <form id="form7">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio25" value="25" not(:checked
                      ) />Espion
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio26" value="26" />Garçon
                    d'ascenceur
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio27" value="27" />Voiturier
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio28" value="28" />Blanchisseur
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse7" class="response"></p>
              <h4>
                8. Combient d'héliporteur fabrique le SHIELD en secret ?
              </h4>
              <div class="formulaire">
                <form id="form8">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio29" value="29" not(:checked ) />2
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio30" value="30" />3
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio31" value="31" />4
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio32" value="32" />5
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse8" class="response"></p>

              <h4>
                9. Quel nom portait le commando de Captain America dans les années 1940 ?
              </h4>
              <div class="formulaire">
                <form id="form9">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio33" value="33" not(:checked
                      ) />Les commandos suicides
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio34" value="34" />Les commandos
                    hurlants
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio35" value="35" />Les commandos
                    traqueurs
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio36" value="36" />Les commandos du
                    diables
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse9" class="response"></p>
              <h4>
                10. Que reste t'il de fonctionnel à 100% sur la voiture de Nick Fury suite à l'attaque des faux
                policiers en plein centre ville ?
              </h4>
              <div class="formulaire">
                <form id="form10">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio37" value="37" not(:checked
                      ) />Le gonflage automatique des roues
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio38" value="38" />La direction
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio39" value="39" />La tourelle de
                    défence arrière
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio40" value="40" />La climatisation
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse10" class="response"></p>
              <h4>
                11. Quel est le nom de code de Nick Fury ?
              </h4>
              <div class="formulaire">
                <form id="form11">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio41" value="41" not(:checked ) />
                    Foxtrot
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio42" value="42" />
                    Alpha 1
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio43" value="43" />
                    Echo Charly
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio44" value="44" />
                    Charly Charly Tango
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                </form>
              </div>
              <p id="goodResponse11" class="response"></p>

              <h4>
                12. Où Captain America cache la clé usb que Fury lui a donnée chez lui ?
              </h4>
              <div class="formulaire">
                <form id="form12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio45" value="45" not(:checked
                      ) />Une machine à café
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio46" value="46" />Derrière un
                    tableau
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio47" value="47" />Dans un
                    distributeur de l'hopital
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio48" value="48" />Dans un panneau
                    de circulation
                    <label class="form-check-label"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse12" class="response"></p>

              <h4>
                13. Combien d'hommes Captain America met à terre dans l'ascenceur du SHIELD ?
              </h4>
              <div class="formulaire">
                <form id="form13">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio49" value="49" not(:checked ) />8
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio50" value="50" />9
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio51" value="51" />10
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio52" value="52" />11
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse13" class="response"></p>
              <h4>
                14. Quel âge a Captain America ?
              </h4>
              <div class="formulaire">
                <form id="form14">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio53" value="53" not(:checked
                      ) />80 ans
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio54" value="54" />75 ans
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio55" value="55" />95 ans
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio56" value="56" />105 ans
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse14" class="response"></p>

              <h4>
                15. Que trouvent Captain America et Black Widow dans la base où Steve Rogers avait fait ses classes à
                l'armée ?
              </h4>
              <div class="formulaire">
                <form id="form15">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio57" value="57" not(:checked
                      ) />Un dépôt de missile
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio58" value="58" />Des symboles
                    d'Hydra
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio59" value="59" />Une base secrète
                    d'Hydra
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio60" value="60" />Un ordinateur
                    contenant la conscience d'Arnim Zola
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse15" class="response"></p>

              <h4>
                16. Qui pense qu'il faut éliminer Bucky ?
              </h4>
              <div class="formulaire">
                <form id="form16">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio61" value="61" not(:checked
                      ) />Black Widow
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio62" value="62" />Sam Wilson
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio63" value="63" />Nick Fury
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio64" value="64" />Maria Hill
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse16" class="response"></p>
              <h4>
                17. Qui prend l'apparence d'un membre du conseil pour tromper Alexander Pierce le secrétaire du Conseil
                de sécurité mondiale ?
              </h4>
              <div class="formulaire">
                <form id="form17">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio65" value="65" not(:checked
                      ) />Sam Wilson
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio66" value="66" />Nick Fury
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio67" value="67" />Maria Hill
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio68" value="68" />Black Widow
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse17" class="response"></p>
              <h4>
                18.Comment l'équipe de Captain America compte arrêter le plan d'Hydra ?
              </h4>
              <div class="formulaire">
                <form id="form18">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio69" value="69" not(:checked
                      ) />En détruisant leur base
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio70" value="70" />En changeant une
                    puce sur un héliporteur
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio71" value="71" />En raliant les
                    hommes restés fidèles au SHIELD
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio72" value="72" />En changeant une
                    puce dans chaque héliporteur
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse18" class="response"></p>

              <h4>
                19. Qui de l'équipe de Captain America finit à l'hopital ?
              </h4>
              <div class="formulaire">
                <form id="form19">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio73" value="73" not(:checked
                      ) />Nick Fury
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio74" value="74" />Black Widow et
                    Captain America
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio75" value="75" />Captain America
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio76" value="76" />Maria Hill et
                    Black Widow
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse19" class="response"></p>
              <h4>
                20. Où se retrouvent Nick Fury, Sam Wilson, Captain America et Black Widow après la bataille ?
              </h4>
              <div class="formulaire">
                <form id="form20">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio77" value="77" not(:checked
                      ) />Sur la tombe de Nick Fury
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio78" value="78" />Devant
                    l'immeuble du SHIELD detruit
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio79" value="79" />Devant un
                    containeur sur un port
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio80" value="80" />Chez Sam Wilson
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse20" class="response"></p>
            </article>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col">
        <div id="textFin" class="d-grid gap-2 col-6 mx-auto">
          <strong>Cliquez sur le bouton<br />
            pour avoir votre résultat</strong>

          <button class="btn btn-outline-dark" type="button" id="submit">
            Résultat

          </button>
          <div class="row">
            <a href="index.php" class="text-center">Trouver un autre quiz</a>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<?php
include_once "includes/footer.php";
?>

<script src="bootstrap.bundle.min.js"></script>
<script src="jquery-3.6.0.min.js"></script>
<script src="./script.js/CaptainAmerica2.js"></script>
<!--<script src="./script.js/cookies.js"></script>--></body>

</html>