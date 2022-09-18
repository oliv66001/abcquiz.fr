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
          <h1 class="text-center">Quiz Hunter x Hunter</h1>
        </div>

        <article class="col">
          <p id="resume">
            Résume : <em>Gon est un jeune garçon de 12 ans</em> qui habite
            une petite <u>île de pêcheur</u> dans un coin perdu avec sa
            tante Mito et sa grand-mère. Gon à un rêve celui de suivre la
            voie de son père Ging et devenir un
            <a href="https://hunterxhunter.fandom.com/fr/wiki/Examen_Hunter" target="_blank">Hunter</a>. Il décide donc
            de partir pour passer l'examen, sur le bateau
            il fait la rencontre de <b>Léolio</b> un jeune homme qui n'en a
            pas l'air et Kourapika un descendant du clan Kuruta.Clan qui a
            la particularité d'avoir les yeux rouges quand ils sont énervés
            ou en stress. Les trois compères vont vivre de nombreuses
            aventures avant de pouvoir passer leur examen...
          </p>
        </article>
        <div class="row">
          <div class="col">
            <article id="questionReponse">
              <h4>1. De quelle île est originaire Gon ?</h4>

              <div class="formulaire">
                <form id="form1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio1" value="1" not(:checked ) />
                    L'île de la tortue
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio2" value="2" />
                    L'île de la grenouille
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio3" value="3" />
                    L'île de la baleine
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio4" value="4" />
                    L'île du raton renard
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                </form>
              </div>
              <p id="goodResponse1" class="response"></p>

              <h4>2. Quel arme utilise Gon pendant l'examen Hunter?</h4>
              <div class="formulaire">
                <form id="form2">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio5" value="5" not(:checked ) />Une
                    malette
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio6" value="6" />Un skateboard
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio7" value="7" />Des tonfas
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio8" value="8" />Une canne à pêche
                    <label class="form-check-label"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse2" class="response"></p>

              <h4>
                3. Quel est le nom du poisson que Gon doit pêcher pour avoir
                le droit de participer à l'examen Hunter ?
              </h4>
              <div class="formulaire">
                <form id="form3">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio9" value="9" not(:checked ) />Le
                    maître de l'étang
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio10" value="10" />Le maître du lac
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio11" value="11" />Le roi de
                    l'étang
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio12" value="12" />Le roi du lac
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse3" class="response"></p>
              <h4>
                4. Pourquoi Kurapika veut devenir Hunter ?
              </h4>
              <div class="formulaire">
                <form id="form4">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio13" value="13" not(:checked
                      ) />Pour devenir docteur
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio14" value="14" />Pour rien en
                    particulier
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio15" value="15" />Pour venger son
                    clan
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio16" value="16" />Pour gagner de
                    l'argent
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse4" class="response"></p>

              <h4>
                5. Pourquoi Léolio veut devenir Hunter ?
              </h4>
              <div class="formulaire">
                <form id="form5">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio17" value="17" not(:checked
                      ) />Pour devenir médecin
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio18" value="18" />Pour avoir
                    beaucoup d'argent
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio19" value="19" />Pour sauver un
                    ami
                    à lui
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio20" value="20" />Pour venger son
                    clan
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse5" class="response"></p>

              <h4>
                6.Le capitaine du bateau qui emmene les candidats à l'exament
                Hunter est ?
              </h4>
              <div class="formulaire">
                <form id="form6">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio21" value="21" not(:checked
                      ) />Un
                    fumeur de pipe
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio22" value="22" />Un ami de Ging
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio23" value="23" />Le 1er
                    examinateur
                    de l'examen Hunter
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio24" value="24" />Un vieux loup de
                    mer qui leur en fait voir de toutes les
                    couleurs
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse6" class="response"></p>
              <h4>
                7. Sur le bateau qui amène Gon, Léolio et Kurapika à l'examen
                Hunter combien de participants sont reçus ?
              </h4>
              <div class="formulaire">
                <form id="form7">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio25" value="25" not(:checked ) />5
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio26" value="26" />4
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio27" value="27" />3
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio28" value="28" />6
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse7" class="response"></p>
              <h4>
                8. Pourquoi Kurapika suit Gon vers le grand cèdre ?
              </h4>
              <div class="formulaire">
                <form id="form8">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio29" value="29" not(:checked
                      ) />Il
                    l'aime bien
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio30" value="30" />Il veut voir ce
                    qu'il va faire
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio31" value="31" />Pour être sur
                    d'arriver sur le lieu de l'examen
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio32" value="32" />Il sait que
                    c'est
                    la bonne route
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse8" class="response"></p>

              <h4>
                9. Comment s'appelle le quiz auquel doit participer Gon,
                Kurapika et Léolio pour accéder au grand cèdre?
              </h4>
              <div class="formulaire">
                <form id="form9">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio33" value="33" not(:checked
                      ) />le
                    quiz Hunter
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio34" value="34" />Le quiz
                    palpitant
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio35" value="35" />Le quiz des
                    reçus
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio36" value="36" />Le quiz
                    impossible
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse9" class="response"></p>
              <h4>
                10. Qui veut pièger Gon, Kurapika et Léolio dans la cabane au
                grand cèdre ?
              </h4>
              <div class="formulaire">
                <form id="form10">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio37" value="37" not(:checked
                      ) />Des
                    juges de l'examen Hunter
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio38" value="38" />Des candidats à
                    l'examen Hunter
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio39" value="39" />Des ratons lions
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio40" value="40" />Des ratons
                    renards
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse10" class="response"></p>
              <h4>
                11. Dans quelle ville est le lieu du rendez-vous pour
                l'exament Hunter?
              </h4>

              <div class="formulaire">
                <form id="form11">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio41" value="41" not(:checked ) />
                    Dorias
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio42" value="42" />
                    Zaban
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio43" value="43" />
                    NGL
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio44" value="44" />
                    Padokia
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                </form>
              </div>
              <p id="goodResponse11" class="response"></p>

              <h4>
                12. Quel menu faut-il commander pour acceder à l'examen Hunter
                ?
              </h4>
              <div class="formulaire">
                <form id="form12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio45" value="45" not(:checked
                      ) />Menu steak royal
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio46" value="46" />Menu steak
                    incroyable
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio47" value="47" />Menu poisson à
                    volonté
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio48" value="48" />
                    Menu steak délice
                    <label class="form-check-label"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse12" class="response"></p>

              <h4>
                13. Sur 20 000 candidats combien arrivés sur la ligne de
                départ de l'examen Hunter ?
              </h4>
              <div class="formulaire">
                <form id="form13">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio49" value="49" not(:checked
                      ) />10
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio50" value="50" />1
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio51" value="51" />2
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio52" value="52" />3
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse13" class="response"></p>
              <h4>
                14. Quel numéro de badge porte Hisoka ?
              </h4>
              <div class="formulaire">
                <form id="form14">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio53" value="53" not(:checked
                      ) />405
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio54" value="54" />33
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio55" value="55" />66
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio56" value="56" />44
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse14" class="response"></p>

              <h4>
                15. Quel candidat à participer 35 fois à l'examen Hunter ?
              </h4>
              <div class="formulaire">
                <form id="form15">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio57" value="57" not(:checked
                      ) />Tompa
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio58" value="58" />Amori
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio59" value="59" />Somi
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio60" value="60" />Morau
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse15" class="response"></p>

              <h4>
                16. Qui élimine un participant juste avant le debut de la
                première épreuve ?
              </h4>
              <div class="formulaire">
                <form id="form16">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio61" value="61" not(:checked
                      ) />Léolio
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio62" value="62" />Tompa
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio63" value="63" />Hisoka
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio64" value="64" />Kirua
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse16" class="response"></p>
              <h4>
                17. Quelle est la profession du candidat n° 294 Hanzo ?
              </h4>
              <div class="formulaire">
                <form id="form17">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio65" value="65" not(:checked
                      ) />Archer
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio66" value="66" />Chasseur
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio67" value="67" />Cuisinier
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio68" value="68" />Ninja
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse17" class="response"></p>
              <h4>
                18. Combien d'épreuve réussit Nicholas le 187 ?
              </h4>
              <div class="formulaire">
                <form id="form18">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio69" value="69" not(:checked
                      ) />Aucune il échoue à la première
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio70" value="70" />1
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio71" value="71" />2
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio72" value="72" />5
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse18" class="response"></p>

              <h4>
                19. Quel n° porte Kiroua pour l'examen Hunter?
              </h4>
              <div class="formulaire">
                <form id="form19">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio73" value="73" not(:checked
                      ) />405
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio74" value="74" />99
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio75" value="75" />235
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio76" value="76" />404
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse19" class="response"></p>
              <h4>
                20. Combien de participant commence la première épreuve de
                l'examen Hunter?
              </h4>
              <div class="formulaire">
                <form id="form20">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio77" value="77" not(:checked
                      ) />402
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio78" value="78" />403
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio79" value="79" />404
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio80" value="80" />405
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse20" class="response"></p>
              <h4>
                21. Quel est le but de la première épreuve de l'examen Hunter?
              </h4>

              <div class="formulaire">
                <form id="form21">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio81" value="81" not(:checked ) />
                    Une course
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio82" value="82" />
                    Un combat
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio83" value="83" />
                    Un quiz
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio84" value="84" />
                    Un examen écrit
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                </form>
              </div>
              <p id="goodResponse21" class="response"></p>

              <h4>22. Quel âge a kiroua quand il rencontre Gon?</h4>
              <div class="formulaire">
                <form id="form22">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio85" value="85" not(:checked
                      ) />10
                    ans
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio86" value="86" />11 ans
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio87" value="87" />15 ans
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio88" value="88" />12 ans
                    <label class="form-check-label"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse22" class="response"></p>

              <h4>
                23. Que fait Gon pour aider Léolio pendant l'épreuve de la
                course de l'examen Hunter ?
              </h4>
              <div class="formulaire">
                <form id="form23">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio89" value="89" not(:checked
                      ) />Il
                    le sauve de tompa
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio90" value="90" />Il récupère sa
                    malette avec sa canne à pêche
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio91" value="91" />Il le porte sur
                    son dos
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio92" value="92" />Il empêche
                    Kiroua
                    de l'attaquer
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse23" class="response"></p>
              <h4>
                24. Pourquoi le clan Kuruta a t'il été exterminé ?
              </h4>
              <div class="formulaire">
                <form id="form24">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio93" value="93" not(:checked
                      ) />Une
                    guerre
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio94" value="94" />Pour leurs yeux
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio95" value="95" />Pour leur terre
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio96" value="96" />Pour le plaisir
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse24" class="response"></p>

              <h4>
                25. Pourquoi Kiroua passe l'examen Hunter ?
              </h4>
              <div class="formulaire">
                <form id="form25">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio97" value="97" not(:checked
                      ) />Pour épater ces parents
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio98" value="98" />Pour faire comme
                    son frère
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio99" value="99" />Pour un travail
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio100" value="100" />Pour s'amuser
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse25" class="response"></p>

              <h4>
                26. Comment s'appelle le premier examinateur de l'examen
                Hunter?
              </h4>
              <div class="formulaire">
                <form id="form26">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio101" value="101" not(:checked
                      ) />Mr Satotsu
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio102" value="102" />Menchi
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio103" value="103" />Buhara
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio104" value="104" />Rippo
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse26" class="response"></p>
              <h4>
                27. Comment s'appelle le marécage où se déroule la première
                épreuve ?
              </h4>
              <div class="formulaire">
                <form id="form27">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio105" value="105" not(:checked
                      ) />Le lac sans fond
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio106" value="106" />Le village du
                    brouillard
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio107" value="107" />Le nid des
                    escrocs
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio108" value="108" />Le marécage
                    perdu
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse27" class="response"></p>
              <h4>
                28. À la sortie du tunnel de la première épreuve qui démasque
                l'imposteur qui se fait passer pour le juge?
              </h4>
              <div class="formulaire">
                <form id="form28">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio109" value="109" not(:checked
                      ) />Gon
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio110" value="110" />Kiroua
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio111" value="111" />Léolio
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio112" value="112" />Hisoka
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse28" class="response"></p>

              <h4>
                29. Combien de candidats ont abandonné à la sortie du tunnel
                de la première épreuve de l'examen Hunter?
              </h4>
              <div class="formulaire">
                <form id="form29">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio113" value="113" not(:checked
                      ) />40
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio114" value="114" />39
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio115" value="115" />33
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio116" value="116" />36
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse29" class="response"></p>
              <h4>
                30. À quel jeu veut jouer Hisoka avec Léolio et Kurapika dans
                le marécage de la première épreuve?
              </h4>
              <div class="formulaire">
                <form id="form30">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio117" value="117" not(:checked
                      ) />Pierre feuille ciseaux
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio118" value="118" />Le jeu du juge
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio119" value="119" />Un jeu de
                    combat
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio120" value="120" />Il veut les
                    tuer
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse30" class="response"></p>
              <h4>
                31. Pourquoi Hisoka ne veut pas tuer Léolio dans le marécage
                de la première épreuve?
              </h4>

              <div class="formulaire">
                <form id="form31">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio121" value="121" not(:checked
                      ) />
                    Il l'aime bien
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio122" value="122" />
                    Il a réussi sont test
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio123" value="123" />
                    Il est trop loin
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio124" value="124" />
                    Il n'a rien contre lui
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                </form>
              </div>
              <p id="goodResponse31" class="response"></p>

              <h4>
                32. Comment Gon et Kourapika arrivent-ils à finir la première
                épreuve de l'examen Hunter?
              </h4>
              <div class="formulaire">
                <form id="form32">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio125" value="125" not(:checked
                      ) />Ils suivent Hisoka
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio126" value="126" />Graçe à
                    l'odeur
                    du parfum de Léolio
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio127" value="127" />Avec une
                    boussole
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio128" value="128" />Ils suivent
                    les
                    derniers participants
                    <label class="form-check-label"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse32" class="response"></p>

              <h4>
                33. Où se déroule la deuxième épreuve de l'examen Hunter ?
              </h4>
              <div class="formulaire">
                <form id="form33">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio129" value="129" not(:checked
                      ) />le bois fleury
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio130" value="130" />Le parc aux
                    cochons
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio131" value="131" />Le parc
                    forestier de Biska
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio132" value="132" />Le sanctuaire
                    des cochons
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse33" class="response"></p>
              <h4>
                34. Quel est le but de la deuxième épreuve de l'examen Hunter
                ?
              </h4>
              <div class="formulaire">
                <form id="form34">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio133" value="133" not(:checked
                      ) />Faire cuire un cochon
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio134" value="134" />Faire cuire un
                    oeuf de poule
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio135" value="135" />Faire cuire un
                    taureau
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio136" value="136" />Faire à manger
                    aux juges
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse34" class="response"></p>

              <h4>
                35. Qui empêche que tous les candidats ratent la deuxième
                épreuve de l'examen Hunter?
              </h4>
              <div class="formulaire">
                <form id="form35">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio137" value="137" not(:checked
                      ) />Ging
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio138" value="138" />Rippo
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio139" value="139" />le président
                    Netero
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio140" value="140" />Mr Satotsu
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse35" class="response"></p>

              <h4>
                36. Comment les candidats se rendent-ils à la troisième
                épreuve de l'examen Hunter?
              </h4>
              <div class="formulaire">
                <form id="form36">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio141" value="141" not(:checked
                      ) />A
                    pieds
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio142" value="142" />En train
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio143" value="143" />En bateau
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio144" value="144" />En dirigeable
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse36" class="response"></p>
              <h4>
                37. Où se déroule la troisième épreuve de l'examen Hunter ?
              </h4>
              <div class="formulaire">
                <form id="form37">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio145" value="145" not(:checked
                      ) />La tour aux astuces
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio146" value="146" />La tour haut
                    perchée
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio147" value="147" />La tour
                    impraticable
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio148" value="148" />La prison aux
                    astuces
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse37" class="response"></p>
              <h4>
                38.Quel est le numéro du candidat qui fait équipe avec Gon,
                Kiroua, Kourapika et Léolio pour la troisième épreuve de
                l'examen Hunter?
              </h4>
              <div class="formulaire">
                <form id="form38">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio149" value="149" not(:checked
                      ) />26
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio150" value="150" />44
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio151" value="151" />16
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio152" value="152" />400
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse38" class="response"></p>

              <h4>
                39.Quelle épreuve retient un peu plus de 50 heures l'équipe de
                Gon dans la tour aux astuces?
              </h4>
              <div class="formulaire">
                <form id="form39">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio153" value="153" not(:checked
                      ) />Des combats avec les prisonniers
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio154" value="154" />Des jeux de
                    hasard
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio155" value="155" />Ils se
                    combattent entre eux
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio156" value="156" />Un chemin plus
                    que difficile
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse39" class="response"></p>
              <h4>
                40. Avec quoi combat Gon dans la tour aux astuces ?
              </h4>
              <div class="formulaire">
                <form id="form40">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio157" value="157" not(:checked
                      ) />À
                    mains nues
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio158" value="158" />Sa canne à
                    pêche
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio159" value="159" />Une bougie
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio160" value="160" />Avec un
                    skateboard
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse40" class="response"></p>
              <h4>
                41. Pour qui se fait passer l'adversaire de Kourapika dans la
                tour aux astuces?
              </h4>

              <div class="formulaire">
                <form id="form41">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio161" value="161" not(:checked
                      ) />
                    Un tueur sanguinaire
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio162" value="162" />
                    Un tueur en série
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio163" value="163" />
                    Un membre de la brigade fantôme
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio164" value="164" />
                    Un ancien militaire
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                </form>
              </div>
              <p id="goodResponse41" class="response"></p>

              <h4>
                42. Combien d'années de prison à Leruto l'adversaire de Léolio
                dans la tour aux astuces lors de la 3e épreuve de l'examen
                Hunter?
              </h4>
              <div class="formulaire">
                <form id="form42">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio165" value="165" not(:checked
                      ) />212 ans
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio166" value="166" />112 ans
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio167" value="167" />312 ans
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio168" value="168" />62 ans
                    <label class="form-check-label"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse42" class="response"></p>

              <h4>
                43. Dans la tour aux astuces pour la troisième épreuve de
                l'examen Hunter comment Léolio perd son combat ?
              </h4>
              <div class="formulaire">
                <form id="form43">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio169" value="169" not(:checked
                      ) />Les paris
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio170" value="170" />Aux points
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio171" value="171" />Il perd son
                    couteau
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio172" value="172" />Pierre feuille
                    ciseaux
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse43" class="response"></p>
              <h4>
                44. À qui Kiroua arrache le coeur dans la tour aux astuces ?
              </h4>
              <div class="formulaire">
                <form id="form44">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio173" value="173" not(:checked
                      ) />Jonès le découpeur
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio174" value="174" />Dorman le
                    destructeur
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio175" value="175" />Netero
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio176" value="176" />Kodzu
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse44" class="response"></p>

              <h4>
                45. Alors qu'il pense avoir fini premier dans la tour aux
                astuces à quelle place finit Hanzo le n°294 ?
              </h4>
              <div class="formulaire">
                <form id="form45">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio177" value="177" not(:checked
                      ) />5
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio178" value="178" />4
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio179" value="179" />3
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio180" value="180" />2
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse45" class="response"></p>

              <h4>
                46. Quel est le but de la 4ème épreuve de l'examen Hunter?
              </h4>
              <div class="formulaire">
                <form id="form46">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio181" value="181" not(:checked
                      ) />Une chasse à l'homme
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio182" value="182" />Un tournoi
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio183" value="183" />Une partie de
                    balle aux prisonniers
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio184" value="184" />Des combats
                    par
                    équipes de deux
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse46" class="response"></p>
              <h4>
                47. Dans la 4ème épreuve de l'examen Hunter quelle est la
                faculté de Ponzu la cible de Léolio ?
              </h4>
              <div class="formulaire">
                <form id="form47">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio185" value="185" not(:checked
                      ) />Elle maîtrise le Nen
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio186" value="186" />Elle utilise
                    du
                    poison
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio187" value="187" />Elle contrôle
                    des abeilles
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio188" value="188" />Elle contrôle
                    des serpents
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse47" class="response"></p>
              <h4>
                48. Combien reste-t-il de concurrent pour la 5ème et dernière
                épreuve de l'examen Hunter?
              </h4>
              <div class="formulaire">
                <form id="form48">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio189" value="189" not(:checked
                      ) />10
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio190" value="190" />9
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio191" value="191" />8
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio192" value="192" />7
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse48" class="response"></p>

              <h4>
                49. Quand Irumi veut tuer Gon parce que Léolio dit qu'il est
                déjà ami avec Kiroua qui veut l'empêcher de rejoindre Gon qui
                a perdu connaissance durant son combat contre Hanzo ?
              </h4>
              <div class="formulaire">
                <form id="form49">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio193" value="193" not(:checked
                      ) />Léolio et Kourapika
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio194" value="194" />Hanzo , Léolio
                    et Hisoka
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio195" value="195" />Le président
                    Netero
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio196" value="196" />Hanzo, léolio
                    et
                    Kourapika
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse49" class="response"></p>
              <h4>
                50. Combien de candidats sont reçus à la 5ème épreuve de
                l'examen Hunter?
              </h4>
              <div class="formulaire">
                <form id="form50">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio197" value="197" not(:checked
                      ) />9
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio198" value="198" />8
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio199" value="199" />7
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio200" value="200" />6
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
    <a href="index.php" class="text-center" style="font-size: 20px; color: black">Trouver un autre quiz</a>
    
  </div>
</main>

<?php
include_once "includes/footer.php";
?>

<script src="bootstrap.bundle.min.js "></script>
<script src="jquery-3.6.0.min.js "></script>
<script src="./script.js/Hunterxhunter.js "></script>
<!--<script src="./script.js/cookies.js"></script>--></body>

</html>