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
          <h1 class="text-center">Quiz Dragon ball super</h1>
        </div>

        <article class="col">
          <p id="resume">
            Tout commence par l'arrivée du <u>seigneur Beerus</u>
            <i>Dieu</i> de la destruction de
            l'univers 7, chez maître
            <a target="_blank" href="https://dragonball.fandom.com/fr/wiki/Dieu_de_la_Destruction">Kaiô</a>
            et même si c'est un dieu Sangoku qui se trouve sur la planète de
            <i>Kaiô</i> va vouloir l'affronter. Après Sangoku et
            <i>Végeta</i> se rendront sur la planète du seigneur Beerus pour
            s'entrainer avec Whis l'ange de l'univers 7 pour devenir plus fort.
            <i>Sangoku</i> rencontrera le roi des galaxies, le roi
            <u>Zeno</u> qui va organiser le tournoi des univers pour savoir
            le quel est le plus fort...
          </p>
        </article>
        <div class="row">
          <div class="col">
            <article id="questionReponse">
              <h4>
                1. Que donne Mr Satan à Sangoku pour avoir sauver la terre du
                terrible Boo ?
              </h4>

              <div class="formulaire">
                <form id="form1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio1" value="1" not(:checked ) />
                    Un voiture
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio2" value="2" />
                    1 milliard de Zenis
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio3" value="3" />
                    100 millions de Zenis
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio4" value="4" />
                    1 million de Zenis
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                </form>
              </div>
              <p id="goodResponse1" class="response"></p>

              <h4>
                2. Quel guerrier veut retrouver le seigneur Beerus à son
                réveil?
              </h4>
              <div class="formulaire">
                <form id="form2">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio5" value="5" not(:checked ) />Le
                    super saiyan légendaire
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio6" value="6" />Le super saiyan
                    divin
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio7" value="7" />Le super saiyan
                    parfait
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio8" value="8" />Le guerrier ultime
                    <label class="form-check-label"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse2" class="response"></p>

              <h4>
                3. Qui a peur que Sangoku découvre l'existance du seigneur
                Beerus ?
              </h4>
              <div class="formulaire">
                <form id="form3">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio9" value="9" not(:checked
                      ) />Maitre Kaiô
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio10" value="10" />kaiô Shin
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio11" value="11" />Végéta
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio12" value="12" />Le doyen des
                    dieux
                    Kaiô
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse3" class="response"></p>
              <h4>
                4. Pourquoi maître kaiô est très encolère contre Sangoku ?
              </h4>
              <div class="formulaire">
                <form id="form4">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio13" value="13" not(:checked
                      ) />Il
                    a provoqué le seigneur Beerus
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio14" value="14" />Il n'en fait
                    qu'à
                    sa tête
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio15" value="15" />Il ne l'a pas
                    réssucité
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio16" value="16" />Il a cassé sa
                    voiture
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse4" class="response"></p>

              <h4>
                5. Que dit le seigneur Beerus à maître Kaiô sur la possible
                destruction de la terre ?
              </h4>
              <div class="formulaire">
                <form id="form5">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio17" value="17" not(:checked
                      ) />Il
                    ne la détruira que si : On le contrarie
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio18" value="18" />Il ne la
                    détruira
                    que si : On ne lui donne pas de bonnes
                    choses à manger
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio19" value="19" />Il ne la
                    détruira
                    que si : Sangoku n'arrive pas à le
                    toucher durant le combat sur sa planète
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio20" value="20" />Il ne la
                    détruira
                    pas
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse5" class="response"></p>

              <h4>
                6. Que fait manger Ktilin au seigneur Beerus à son arrivée sur
                le bateau ou fête l'anniversaire de Bulma ?
              </h4>
              <div class="formulaire">
                <form id="form6">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio21" value="21" not(:checked
                      ) />Un
                    flan
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio22" value="22" />Du calamar
                    grillé
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio23" value="23" />La roulette
                    russe
                    aux poulpes
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio24" value="24" />Des sushis
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse6" class="response"></p>
              <h4>
                7. Qui a sous-estimé la force du super Saiyan divin ?
              </h4>
              <div class="formulaire">
                <form id="form7">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio25" value="25" not(:checked
                      ) />Végéta
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio26" value="26" />Sangoku
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio27" value="27" />Whis
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio28" value="28" />Piccolo
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse7" class="response"></p>
              <h4>
                8. A cause du combat entre Sangoku super Saiyan divin et le
                seigneur Beerus que va t'il se passer selon le doyen Kaiô ?
              </h4>
              <div class="formulaire">
                <form id="form8">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio29" value="29" not(:checked
                      ) />La
                    terre va être détruite
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio30" value="30" />L'univers va
                    être
                    détruit
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio31" value="31" />Les humains vont
                    mourir
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio32" value="32" />Rien il ne sait
                    pas qu'ils s'affrontent
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse8" class="response"></p>

              <h4>
                9. De quoi ont peur les extras terrestres qui viennent sur
                terre pour affronter Mr Satan pensant qu'il a vaincu Boo?
              </h4>
              <div class="formulaire">
                <form id="form9">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio33" value="33" not(:checked
                      ) />Des
                    Saiyans
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio34" value="34" />Des femmes
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio35" value="35" />Des chats
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio36" value="36" />Des chiens
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse9" class="response"></p>
              <h4>
                10. Quel avenir veut Mr Satan pour sa petite fille Pan ?
              </h4>
              <div class="formulaire">
                <form id="form10">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio37" value="37" not(:checked
                      ) />Qu'elle devienne une scientifique
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio38" value="38" />Qu'elle prenne
                    sa
                    place
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio39" value="39" />Qu'elle s'occupe
                    d'animaux
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio40" value="40" />Ce n'est encore
                    qu'un bébé il ne sait pas
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse10" class="response"></p>
              <h4>
                11. Que font Sangoku et végéta sur la planète du seigneur
                Beerus à part s'entrainer?
              </h4>

              <div class="formulaire">
                <form id="form11">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio41" value="41" not(:checked ) />
                    Ils dorment
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio42" value="42" />
                    Ils n'arretent pas de s'entrainer
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio43" value="43" />
                    Le ménage
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio44" value="44" />
                    ils aident Whis dans diverses taches sur d'autres planètes
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                </form>
              </div>
              <p id="goodResponse11" class="response"></p>

              <h4>
                12. Comment font les hommes de l'armée de Freezer pour
                récupèrer les dragons ball sur terre ?
              </h4>
              <div class="formulaire">
                <form id="form12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio45" value="45" not(:checked
                      ) />Ils
                    les prennent à Pilaf
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio46" value="46" />Ils les
                    retrouvent
                    avec leur dispositif une par une
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio47" value="47" />Ils les prennent
                    en cachette à Bulma
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio48" value="48" />
                    Ils les prennent sur la planète Namek
                    <label class="form-check-label"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse12" class="response"></p>

              <h4>
                13. Suite à l'arrivée de Freezer sur terre quel ami de Sangoku
                perd la vie ?
              </h4>
              <div class="formulaire">
                <form id="form13">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio49" value="49" not(:checked
                      ) />Krilin
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio50" value="50" />Sangohan
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio51" value="51" />C-18
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio52" value="52" />Piccolo
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse13" class="response"></p>
              <h4>
                14. Quelle transformation Freezer utilise-t-il pour se battre
                contre Sangoku ?
              </h4>
              <div class="formulaire">
                <form id="form14">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio53" value="53" not(:checked
                      ) />Blue Freezer
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio54" value="54" />Sa 4eme
                    transformation
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio55" value="55" />Golden Freezer
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio56" value="56" />Black Freezer
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse14" class="response"></p>

              <h4>
                15. De combien de temps Whis peut-il remonter le temps ?
              </h4>
              <div class="formulaire">
                <form id="form15">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio57" value="57" not(:checked ) />5
                    minutes
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio58" value="58" />3 minutes
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio59" value="59" />2 minutes
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio60" value="60" />10 minutes
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse15" class="response"></p>

              <h4>
                16. Qui dit que manipuler le temps est un crime grave ?
              </h4>
              <div class="formulaire">
                <form id="form16">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio61" value="61" not(:checked
                      ) />Beerus
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio62" value="62" />Bulma
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio63" value="63" />Whis
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio64" value="64" />Jaco
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse16" class="response"></p>
              <h4>
                17. Combient d'univers existent-ils dans Dragon ball super ?
              </h4>
              <div class="formulaire">
                <form id="form17">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio65" value="65" not(:checked
                      ) />12
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio66" value="66" />14
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio67" value="67" />10
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio68" value="68" />8
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse17" class="response"></p>
              <h4>
                18. Combien de guerriers vont s'affronter au tournoi organisé
                par Beerus et Champa ?
              </h4>
              <div class="formulaire">
                <form id="form18">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio69" value="69" not(:checked ) />8
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio70" value="70" />12
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio71" value="71" />10
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio72" value="72" />14
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse18" class="response"></p>

              <h4>
                19. Quel est la particularité des femmes des Saiyens selon
                Végéta?
              </h4>
              <div class="formulaire">
                <form id="form19">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio73" value="73" not(:checked
                      ) />Elle sont belles
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio74" value="74" />Elle ont un fort
                    caractère
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio75" value="75" />Elles ne sont
                    pas
                    Saiyen elles-même
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio76" value="76" />Elles restent
                    fidèles
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse19" class="response"></p>
              <h4>
                20. Sur quelle planète a lieu le tournoi organisé par les
                seigneurs Beerus et Champa ?
              </h4>
              <div class="formulaire">
                <form id="form20">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio77" value="77" not(:checked
                      ) />La
                    planète déserte
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio78" value="78" />La planète morte
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio79" value="79" />la planète
                    oubliée
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio80" value="80" />La planète sans
                    nom
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse20" class="response"></p>
              <h4>
                21. Quel est le nom du dernier participant au tournoi des
                seigneurs Beerus et Champa pour l'univers 6 ?
              </h4>

              <div class="formulaire">
                <form id="form21">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio81" value="81" not(:checked ) />
                    Frost
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio82" value="82" />
                    Hit
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio83" value="83" />
                    Magetta
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio84" value="84" />
                    Pirina
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                </form>
              </div>
              <p id="goodResponse21" class="response"></p>

              <h4>
                22. Comment Végéta pendant le tournoi des seigneurs Beerus et
                Champa aide le jeune Cabba à devenir un super SAiyen?
              </h4>
              <div class="formulaire">
                <form id="form22">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio85" value="85" not(:checked
                      ) />Avec une vague d'énergie
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio86" value="86" />Il l'aidera
                    après
                    le tournoi
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio87" value="87" />Il le provoque
                    pendant leur combat
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio88" value="88" />Il sait déjà
                    devenir super Saiyen
                    <label class="form-check-label"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse22" class="response"></p>

              <h4>
                23. Quel est le surnom de Hit dans l'univers 6 ?
              </h4>
              <div class="formulaire">
                <form id="form23">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio89" value="89" not(:checked
                      ) />L'indestructible
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio90" value="90" />Le tueur
                    insatiable
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio91" value="91" />L'invaincu
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio92" value="92" />L'infaible
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse23" class="response"></p>
              <h4>
                24. Pourquoi Sangoku veut que Beerus et Champa annulent les
                règles du tournoi d'arts martiaux qu'ils ont organisé ?
              </h4>
              <div class="formulaire">
                <form id="form24">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio93" value="93" not(:checked
                      ) />Pour que Hit deploit sa vrai puissance
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio94" value="94" />Pour tuer Frost
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio95" value="95" />Pour éviter une
                    défaite à Végéta
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio96" value="96" />Parceque c'est
                    pas
                    marrant
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse24" class="response"></p>

              <h4>
                25. Quand les pouvoirs de Sangoku déraillent, où se téléporte
                t-il pensant aller chez maître Kaîo ?
              </h4>
              <div class="formulaire">
                <form id="form25">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio97" value="97" not(:checked
                      ) />Chez le doyen Kaiô
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio98" value="98" />Dans la chambre
                    d'hôtel de Bulma
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio99" value="99" />Chez Yamsha
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio100" value="100" />dans le palais
                    de Dende
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse25" class="response"></p>

              <h4>
                26. Avant que le roi Zeno ne réduise le nombre d'univers
                combien y avaient-ils d'univers à l'origine ?
              </h4>
              <div class="formulaire">
                <form id="form26">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio101" value="101" not(:checked
                      ) />20
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio102" value="102" />18
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio103" value="103" />24
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio104" value="104" />17
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse26" class="response"></p>
              <h4>
                27. Quels ennemis affrontent Trunks dans le futur ?
              </h4>
              <div class="formulaire">
                <form id="form27">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio105" value="105" not(:checked
                      ) />Black Géta
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio106" value="106" />Pink Goku
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio107" value="107" />Black Goku
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio108" value="108" />White Goku
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse27" class="response"></p>
              <h4>
                28. Pour quelle raison le roi Zeno contacte Beerus et Whis sur
                la planète du seigneur Beerus ?
              </h4>
              <div class="formulaire">
                <form id="form28">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio109" value="109" not(:checked
                      ) />Il veut voir Whis
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio110" value="110" />Les inviter à
                    un
                    gouter
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio111" value="111" />Pour venir
                    jouer
                    avec lui
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio112" value="112" />Pour voir
                    Sangoku
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse28" class="response"></p>

              <h4>
                29. Combien de personnes sont plus fortes que le grand prêtre
                tous univers confondus selon Whis ?
              </h4>
              <div class="formulaire">
                <form id="form29">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio113" value="113" not(:checked
                      ) />20
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio114" value="114" />0
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio115" value="115" />4
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio116" value="116" />5
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse29" class="response"></p>
              <h4>
                30. Dans quel univers à leur époque Whis repère l'énergie de
                Black Goku?
              </h4>
              <div class="formulaire">
                <form id="form30">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio117" value="117" not(:checked
                      ) />5
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio118" value="118" />12
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio119" value="119" />2
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio120" value="120" />10
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse30" class="response"></p>
              <h4>
                31. Quel nom porte le plan de Zamasu et Black Goku dans le
                futur?
              </h4>

              <div class="formulaire">
                <form id="form31">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio121" value="121" not(:checked
                      ) />
                    Extermination des mortels
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio122" value="122" />
                    Remise à zero
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio123" value="123" />
                    Liquidation des mortels
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio124" value="124" />
                    Zéro mortel
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                </form>
              </div>
              <p id="goodResponse31" class="response"></p>

              <h4>
                32. Comment Sangoku surnome Baba la voyante sur l'île ou
                cherche l'herbe médicinale pour suivre l'entrainement de
                Torute Génial?
              </h4>
              <div class="formulaire">
                <form id="form32">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio125" value="125" not(:checked
                      ) />Babou la voyante
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio126" value="126" />Ma petite Baba
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio127" value="127" />Baba la
                    voyeuse
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio128" value="128" />Baba la
                    vilaine
                    <label class="form-check-label"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse32" class="response"></p>

              <h4>
                33. Ou va se dérouler le tournoi du roi Zeno ?
              </h4>
              <div class="formulaire">
                <form id="form33">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio129" value="129" not(:checked
                      ) />Le monde perdu
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio130" value="130" />Le monde du
                    néant
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio131" value="131" />Le monde
                    disparu
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio132" value="132" />Le monde
                    englouti
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse33" class="response"></p>
              <h4>
                34. Quel univers affronte l'univers 7 dans le tournoi
                préliminaire du roi Zeno ?
              </h4>
              <div class="formulaire">
                <form id="form34">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio133" value="133" not(:checked
                      ) />5
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio134" value="134" />8
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio135" value="135" />10
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio136" value="136" />9
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse34" class="response"></p>

              <h4>
                35. Qui sera épargné si son univers est détruit suite à la
                défaite des combattants de son univers ?
              </h4>
              <div class="formulaire">
                <form id="form35">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio137" value="137" not(:checked
                      ) />Les dieux Kaiô
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio138" value="138" />Les dieux de
                    la
                    destruction
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio139" value="139" />Les anges
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio140" value="140" />Les
                    combattants
                    qui participent au tournoi et qui se
                    seront distingués
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse35" class="response"></p>

              <h4>
                36. Après la défaite de l'univers 9 dans le tournoi
                préliminaire qui veut affronter Sangoku ?
              </h4>
              <div class="formulaire">
                <form id="form36">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio141" value="141" not(:checked
                      ) />Ramon de l'univers 10
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio142" value="142" />Toppo de
                    l'univers 11
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio143" value="143" />Gin de
                    l'univers
                    12
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio144" value="144" />Sidra de
                    l'univers 9
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse36" class="response"></p>
              <h4>
                37. Combien de combattants s'affronteront dans le tournoi du
                pouvoir organisé par le roi Zeno ?
              </h4>
              <div class="formulaire">
                <form id="form37">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio145" value="145" not(:checked
                      ) />120
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio146" value="146" />100
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio147" value="147" />60
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio148" value="148" />80
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse37" class="response"></p>
              <h4>
                38. Combien de temps s'écoulera-t-il entre le tournoi
                préliminaire et le tournoi du pouvoir du roi Zeno ?
              </h4>
              <div class="formulaire">
                <form id="form38">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio149" value="149" not(:checked
                      ) />30 heures
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio150" value="150" />40 heures
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio151" value="151" />50 heures
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio152" value="152" />60 heures
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse38" class="response"></p>

              <h4>
                39. Quel nom Bulma et Végéta donnent à leur fille qui vient de
                naître ?
              </h4>
              <div class="formulaire">
                <form id="form39">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio153" value="153" not(:checked
                      ) />Bra
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio154" value="154" />Bro
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio155" value="155" />Etoile
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio156" value="156" />Vicky
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse39" class="response"></p>
              <h4>
                40. Quels dieux Kaiô organisent une réunion entre tous les
                dieux sauf Shin de l'univres 7 ?
              </h4>
              <div class="formulaire">
                <form id="form40">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio157" value="157" not(:checked
                      ) />Cae de l'univers 11
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio158" value="158" />Ogma de
                    l'univers 5
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio159" value="159" />Ro de
                    l'univers
                    9
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio160" value="160" />Iru de
                    l'univers
                    8
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse40" class="response"></p>
              <h4>
                41. Quelle demande accepte le roi Zeno lors du tournoi
                préliminaire qu'il organise ?
              </h4>

              <div class="formulaire">
                <form id="form41">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio161" value="161" not(:checked
                      ) />
                    Si Sangoku perd aucun univers ne sera détruit lors du
                    tournoi du pouvoir
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio162" value="162" />
                    Si Sangoku gagne aucun univers ne sera détruit lors du
                    tournoi du pouvoir
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio163" value="163" />
                    Si l'univers 9 gagnes contre le 7 aucun univers ne sera
                    détruit en cas de défaite au tournoi du pouvoir
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio164" value="164" />
                    Il n'accepte aucune nouvelle règle
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                </form>
              </div>
              <p id="goodResponse41" class="response"></p>

              <h4>
                42. Qui Sangoku choisit comme capitaine pour le tournoi du
                pouvoir du roi Zeno ?
              </h4>
              <div class="formulaire">
                <form id="form42">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio165" value="165" not(:checked
                      ) />Aucun c'est Beerus qui choisit le capitaine
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio166" value="166" />Sangohan
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio167" value="167" />Piccolo
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio168" value="168" />Tortue génial
                    <label class="form-check-label"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse42" class="response"></p>

              <h4>
                43. Combien de temps faut-il au doyen Kaiô de l'univers 7 pour
                éveiller le potentiel d'un guerrier ?
              </h4>
              <div class="formulaire">
                <form id="form43">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio169" value="169" not(:checked
                      ) />15 heures
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio170" value="170" />25 heures
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio171" value="171" />80 heures
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio172" value="172" />40 heures
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse43" class="response"></p>
              <h4>
                44. Que promet Sangoku à Freezer s'ils gagnent le tournoi du
                pouvoir du roi Zeno ?
              </h4>
              <div class="formulaire">
                <form id="form44">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio173" value="173" not(:checked
                      ) />De le laisser tranquille
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio174" value="174" />De lui donner
                    la
                    vie éternelle
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio175" value="175" />De ne pas le
                    prendre en chasse tout de suite
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio176" value="176" />De le
                    ressusciter
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse44" class="response"></p>

              <h4>
                45. Combien de vrais terriens sont engagés dans le tournoi du
                pouvoir pour l'univers 7 ?
              </h4>
              <div class="formulaire">
                <form id="form45">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio177" value="177" not(:checked
                      ) />6
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio178" value="178" />7
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio179" value="179" />8
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio180" value="180" />5
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse45" class="response"></p>

              <h4>
                46. Quelle sera la gravité de la surface de combat du tournoi
                du pouvoir?
              </h4>
              <div class="formulaire">
                <form id="form46">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio181" value="181" not(:checked
                      ) />Comme sur terre
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio182" value="182" />Comme sur
                    Namek
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio183" value="183" />Pour chacun
                    comme sur sa planète d'origine
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio184" value="184" />Comme pour les
                    planètes des dieux Kaiô
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse46" class="response"></p>
              <h4>
                47. Quel univers envoie des guerriers pour tuer Sangoku avant
                le tournoi du pouvoir du roi Zeno ?
              </h4>
              <div class="formulaire">
                <form id="form47">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio185" value="185" not(:checked
                      ) />10
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio186" value="186" />9
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio187" value="187" />8
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio188" value="188" />7
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse47" class="response"></p>
              <h4>
                48. Si Freezer est l'alter égo de frost de l'univers 6 qui est
                l'altère ego de Kale de l'univers 6?
              </h4>
              <div class="formulaire">
                <form id="form48">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio189" value="189" not(:checked
                      ) />Végéta
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio190" value="190" />Sangohan
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio191" value="191" />Sangoku
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio192" value="192" />Broly
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse48" class="response"></p>

              <h4>
                49. Qui de l'univers 7 fait un combat d'entrainement 2 contre
                2 avant le début du tournoi du pouvoir du roi Zeno ?
              </h4>
              <div class="formulaire">
                <form id="form49">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio193" value="193" not(:checked
                      ) />Tenshinhan et Sangoku VS Piccolo et Sangohan
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio194" value="194" />Sangoku et
                    Piccolo VS Végéta et Sangohan
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio195" value="195" />Sangohan et
                    Piccolo VS Tenshinhan et Krilin
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio196" value="196" />Krilin et
                    Tortue
                    Génial VS Tenshinhan et Piccolo
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse49" class="response"></p>
              <h4>
                50. Quel est le lien entre Vados ange de l'univers 6 et Whis
                ange de l'univers 7 ?
              </h4>
              <div class="formulaire">
                <form id="form50">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio197" value="197" not(:checked
                      ) />Collègue de travail
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio198" value="198" />Sa soeur
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio199" value="199" />Sa cousine
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio200" value="200" />Une amie
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse50" class="response"></p>
            </article>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="textFin" class="d-grid gap-2 col-6 mx-auto">
    <strong>
      Cliquez sur le bouton<br />
      pour avoir votre résultat
    </strong>

    <button class="btn btn-outline-dark" type="button" id="submit">
      Résultat
    </button>
    <a href="index.php" class="text-center">Trouver un autre quiz</a>
    
  </div>
</main>

<?php
include_once "includes/footer.php";
?>

<script src="bootstrap.bundle.min.js"></script>
<script src="jquery-3.6.0.min.js"></script>
<script src="script.js/DragonBallSuper.js"></script>
<!--<script src="./script.js/cookies.js"></script>--></body>

</html>