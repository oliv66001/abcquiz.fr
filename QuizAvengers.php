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
          <h1 class="text-center">Quiz Avengers</h1>
        </div>

        <article class="col">
          <p id="resume">
            Résumé : Le
            <a href="https://fr.wikipedia.org/wiki/SHIELD" target="_blank">SHIELD</a>
            exploite le Tesseract depuis qu'il a été repeché par Howard
            Stark. Dans le plus grand secret il fabrique des armes pour se
            protéger des menaces plus lointaines comme les Asgardiens. Loki
            bien décidé à prendre le contrôle de l'humanité s'est allié à
            Tanos qui ne désire q'une chose; il veut le
            <em>Tesseract</em> mais <u>Nick Fury</u> est bien décidé à ne
            pas laisser <em>Loki</em> s'emparer du Tesseract et malgrè
            l'abandon du projet initiative Avenger il demande à
            <a href="https://fr.wikipedia.org/wiki/Captain_America" target="_blank"></a>Captain America, Tony Stark,
            Black Widow et le proffeseur baner
            de s'unir pour combattre Loki ainsi que les agents du SHIELD que
            <em>Loki</em> a retourné. L'équipe se retrouve en Europe pour
            arrêter <em>Loki</em> qui vient trouver un morceau de météorite
            afin d'activer le cube et faire passer les Chitauris l'armée
            confiée par Tanos. L'équipe fait prisonnier Loki et Thor vient
            le récupérer pour demander des comptes à son frère et toute
            l'équipe est enfin réunie sur le porte avion du
            <b>SHIELD</b> après une petite escarmouche entre héros. L'équipe
            de héros devra se mettre d'accord afin d'arrêter Loki et
            d'empécher les Chitauris de venir sur terre.
          </p>
        </article>
        <div class="row">
          <div class="col">
            <article id="questionReponse">
              <h4>
                1. Selon l'agent Coulson en combient de temps la base du
                SHIELD va-t-elle pouvoir être totalement évacuée ?
              </h4>

              <div class="formulaire">
                <form id="form1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio1" value="1" not(:checked ) />
                    10 minutes
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio2" value="2" />
                    1 heure
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio3" value="3" />
                    30 minutes
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio4" value="4" />
                    50 minutes
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                </form>
              </div>
              <p id="goodResponse1" class="response"></p>

              <h4>2. Quel est le surnom de l'agent Barton ?</h4>
              <div class="formulaire">
                <form id="form2">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio5" value="5" not(:checked ) />La
                    vipère
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio6" value="6" />Le faucon
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio7" value="7" />Oeuil de lynx
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio8" value="8" />Robin des bois
                    <label class="form-check-label"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse2" class="response"></p>

              <h4>
                3. Dans la base du SHILED où est le Tesseract que Loki met
                sous son contôle en premier ?
              </h4>
              <div class="formulaire">
                <form id="form3">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio9" value="9" not(:checked
                      ) />Fury
                    et Barton
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio10" value="10" />Dr Selvig et
                    Black
                    Widow
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio11" value="11" />Dr Selvig et
                    Barton
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio12" value="12" />Dr Selvig
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse3" class="response"></p>
              <h4>
                4. Que dit Loki à Nick Fury quand il lui dit que: "Nous ne
                sommes pas en conflit avec votre peuple" ?
              </h4>
              <div class="formulaire">
                <form id="form4">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio13" value="13" not(:checked
                      ) />Le
                    scorpion dans la chaussure n'est pas en conflit avec
                    le pied
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio14" value="14" />Vous ne
                    connaissez
                    pas mon peuple
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio15" value="15" />Tous les peuples
                    sont en conflit avec vous
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio16" value="16" />La fourmi n'est
                    pas en conflit avec la botte
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse4" class="response"></p>

              <h4>
                5. De quoi Loki veut libérer l'humanité ?
              </h4>
              <div class="formulaire">
                <form id="form5">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio17" value="17" not(:checked
                      ) />De
                    la liberté
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio18" value="18" />De l'oppression
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio19" value="19" />De la vie
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio20" value="20" />De sa pathétique
                    existence
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse5" class="response"></p>

              <h4>
                6.Quel niveau d'alerte est déclenché par Nick Fury quand Loki
                vole le Tesseract ?
              </h4>
              <div class="formulaire">
                <form id="form6">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio21" value="21" not(:checked
                      ) />Niveau 10
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio22" value="22" />Niveau rouge
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio23" value="23" />Niveau 7
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio24" value="24" />Niveau 12
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse6" class="response"></p>
              <h4>
                7. Comment l'agent Coulson convainc Black Widow de laisser
                tomber sa mission pour venir les aider ?
              </h4>
              <div class="formulaire">
                <form id="form7">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio25" value="25" not(:checked
                      ) />Il
                    lui dit que Barton est passé à l'ennemi
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio26" value="26" />Il lui promet
                    une
                    belle prime
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio27" value="27" />Il lui dit
                    d'aller
                    chercher Baner
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio28" value="28" />Il lui sauve la
                    vie
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse7" class="response"></p>
              <h4>
                8. Comment fait Black Widow pour amener Bruce Banner à elle ?
              </h4>
              <div class="formulaire">
                <form id="form8">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio29" value="29" not(:checked
                      ) />Grâce à ses charmes
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio30" value="30" />Avec un petit
                    garçon
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio31" value="31" />Avec une vieille
                    femme
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio32" value="32" />Avec une petite
                    fille
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse8" class="response"></p>

              <h4>
                9. Pourquoi le SHIELD a besoin du Dr Baner ?
              </h4>
              <div class="formulaire">
                <form id="form9">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio33" value="33" not(:checked
                      ) />Pour Hulk
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio34" value="34" />Pour combattre
                    Loki
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio35" value="35" />Pour retrouver
                    le
                    cube
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio36" value="36" />Pour avaler le
                    cube
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse9" class="response"></p>
              <h4>
                10. Comment gagne-t-on une guerre selon Nick Fury ?
              </h4>
              <div class="formulaire">
                <form id="form10">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio37" value="37" not(:checked
                      ) />Avec des soldats
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio38" value="38" />Avec des héros
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio39" value="39" />Avec des armes
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio40" value="40" />Avec de l'espoir
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse10" class="response"></p>
              <h4>
                11. Que dit Captain America à Nick Fury à propos du cube ?
              </h4>

              <div class="formulaire">
                <form id="form11">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio41" value="41" not(:checked ) />
                    Sans les recherches d'Idra on n'en fera rien
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio42" value="42" />
                    Les armes qui tirent leur énergie du cube sont puissantes
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio43" value="43" />
                    Vous auriez du le laisser au fond de l'océan
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio44" value="44" />
                    On n'en a pas besoin
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                </form>
              </div>
              <p id="goodResponse11" class="response"></p>

              <h4>
                12. Comment la tour Stark est-elle alimentée en énergie ?
              </h4>
              <div class="formulaire">
                <form id="form12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio45" value="45" not(:checked
                      ) />Energie noir
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio46" value="46" />Énergie verte
                    auto
                    générée
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio47" value="47" />Un réacteur ARK
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio48" value="48" />
                    Energie solaire
                    <label class="form-check-label"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse12" class="response"></p>

              <h4>
                13. Que promet Tony Stark à Pepper Potts ?
              </h4>
              <div class="formulaire">
                <form id="form13">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio49" value="49" not(:checked
                      ) />Que
                    la prochaine fois elle aura 50% de la réalisation du
                    projet
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio50" value="50" />Il y aura écrit
                    Potts sur la prochaine tour
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio51" value="51" />De la demander
                    en
                    mariage
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio52" value="52" />De l'inviter à
                    l'inauguration
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse13" class="response"></p>
              <h4>
                14.Qui vient chercher Tony Stark et l'avertir du danger suite
                au vol du cube ?
              </h4>
              <div class="formulaire">
                <form id="form14">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio53" value="53" not(:checked
                      ) />Nick Fury
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio54" value="54" />Phil Coulson
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio55" value="55" />Black Widow
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio56" value="56" />L'agent Garret
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse14" class="response"></p>

              <h4>
                15. Qu'est-ce qui est un honneur pour Phil Coulson ?
              </h4>
              <div class="formulaire">
                <form id="form15">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio57" value="57" not(:checked
                      ) />De
                    rencontrer Captain America
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio58" value="58" />D'avoir Captain
                    America à bord
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio59" value="59" />De réunir les
                    Avengers
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio60" value="60" />D'amener Pepper
                    Potts à l'aéroport
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse15" class="response"></p>

              <h4>
                16. Que dit le Dr Banner à Captain America quand sur le porte-
                avion il lui dit: "On est dans un sous-marin" ?
              </h4>
              <div class="formulaire">
                <form id="form16">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio61" value="61" not(:checked
                      ) />Je
                    suis clostrophobe
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio62" value="62" />J'ai horreur de
                    l'eau
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio63" value="63" />Sans blague ils
                    oseraient me mettre dans une boîte de
                    métal immergée
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio64" value="64" />Ca doit vous
                    changer des années 40
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse16" class="response"></p>
              <h4>
                17.Que peut faire de surprenant le porte-avion du SHIELD ?
              </h4>
              <div class="formulaire">
                <form id="form17">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio65" value="65" not(:checked
                      ) />Aller sous l'eau
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio66" value="66" />Voler
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio67" value="67" />Voler et
                    disparaitre
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio68" value="68" />Disparaitre
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse17" class="response"></p>
              <h4>
                18. Pourquoi à son arrivée sur la plateforme de contrôle du
                porte-avion du SHIELD Capitaine America donne un billet à Nick
                Fury ?
              </h4>
              <div class="formulaire">
                <form id="form18">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio69" value="69" not(:checked
                      ) />Fury lui avait dit qu'il n'était pas prêt
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio70" value="70" />Qu'il signerait
                    les cartes de Phil Coulson
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio71" value="71" />Une vieille
                    dette
                    de poker
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio72" value="72" />Ils avaient
                    parié
                    que plus rien ne pouvait le surprendre
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse18" class="response"></p>

              <h4>
                19. Pour faire fonctionner le cube de quoi a besoin le Dr
                Selvig ?
              </h4>
              <div class="formulaire">
                <form id="form19">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio73" value="73" not(:checked
                      ) />D'uranium
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio74" value="74" />D'iridium
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio75" value="75" />D'adamantium
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio76" value="76" />De lithium
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse19" class="response"></p>
              <h4>
                20. Comment Barton a recruté des hommes pour Loki ?
              </h4>
              <div class="formulaire">
                <form id="form20">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio77" value="77" not(:checked
                      ) />Des
                    anciens du SHIELD
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio78" value="78" />Des anciens
                    collègues de l'armée
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio79" value="79" />Des ennemis du
                    SHIELD
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio80" value="80" />Des mercenaires
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse20" class="response"></p>
              <h4>21. Pour récupérer l'iridium Loki prend un oeil à?</h4>

              <div class="formulaire">
                <form id="form21">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio81" value="81" not(:checked ) />
                    Dr heinrich schaefer
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio82" value="82" />
                    Pr Elisabeth Abegg
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio83" value="83" />
                    Pr Michael von Albrecht
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio84" value="84" />
                    Dr Alice Agneskirchner
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                </form>
              </div>
              <p id="goodResponse21" class="response"></p>

              <h4>22.Pour Loki quel est l'état naturel de l'humanité ?</h4>
              <div class="formulaire">
                <form id="form22">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio85" value="85" not(:checked
                      ) />La
                    mort
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio86" value="86" />l'esclavage
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio87" value="87" />La cupidité
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio88" value="88" />La soumission
                    <label class="form-check-label"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse22" class="response"></p>

              <h4>
                23. En Allemagne qui sauve un homme qui tenait tête à Loki ?
              </h4>
              <div class="formulaire">
                <form id="form23">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio89" value="89" not(:checked
                      ) />Iron Man
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio90" value="90" />Captain America
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio91" value="91" />Black Widow
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio92" value="92" />L'agent Barton
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse23" class="response"></p>
              <h4>
                24. Captain America veut élaborer un plan d'attaque avec Iron
                Man pour récupérer Loki au main de thor Iron Man lui dit ?
              </h4>
              <div class="formulaire">
                <form id="form24">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio93" value="93" not(:checked
                      ) />Il
                    y a pas de plan on attaque
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio94" value="94" />J'ai un plan on
                    attaque
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio95" value="95" />Je ne vous
                    attends
                    pas j'attaque
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio96" value="96" />Plus le temps
                    pour
                    les plans Captain
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse24" class="response"></p>

              <h4>
                25. Comment Thor surnomme Iron Man quand il le voit pour la
                première fois ?
              </h4>
              <div class="formulaire">
                <form id="form25">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio97" value="97" not(:checked
                      ) />Homme de fer
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio98" value="98" />Armure de
                    pacotille
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio99" value="99" />Homme de métal
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio100" value="100" />Boîte de
                    conserve
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse25" class="response"></p>

              <h4>
                26. Dans le combat pour Loki entre Iron Man et Thor, avec ses
                éclairs à quel pourcentage Thor recharge l'armure d'Iron Man?
              </h4>
              <div class="formulaire">
                <form id="form26">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio101" value="101" not(:checked
                      ) />120%
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio102" value="102" />150%
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio103" value="103" />300%
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio104" value="104" />400%
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse26" class="response"></p>
              <h4>
                27. Que dit Thor sur son frère Loki à Black Widow quand elle
                lui dit qu'il a tué 80 personnes en deux jours ?
              </h4>
              <div class="formulaire">
                <form id="form27">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio105" value="105" not(:checked
                      ) />Il a perdu la raison
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio106" value="106" />Il est
                    manipulé
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio107" value="107" />Il a changé
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio108" value="108" />Il a été
                    adopté
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse27" class="response"></p>
              <h4>
                28. Tony Stark aime la façon du Dr Banner de ?
              </h4>
              <div class="formulaire">
                <form id="form28">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio109" value="109" not(:checked
                      ) />Trouver des théories en astrophysique
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio110" value="110" />Démolir
                    l'armée
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio111" value="111" />D'être en
                    mesure
                    de communiquer avec lui
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio112" value="112" />Sa façon de
                    perdre le contrôle en devenant un monstre
                    vert ultra violent
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse28" class="response"></p>

              <h4>
                29. Pourquoi le SHIELD veut se servir du cube pour produire
                des armes?
              </h4>
              <div class="formulaire">
                <form id="form29">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio113" value="113" not(:checked
                      ) />A
                    cause de Thor
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio114" value="114" />A cause d'Idra
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio115" value="115" />Sur les
                    conseils
                    de Captain Marvel
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio116" value="116" />Pour se
                    défendre
                    contre des menaces dont personne n'a
                    idée
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse29" class="response"></p>
              <h4>
                30. Qu'est-il arrivé la dernière fois que le Dr Banner est
                allé a New-York?
              </h4>
              <div class="formulaire">
                <form id="form30">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio117" value="117" not(:checked
                      ) />Il a failli détruire Harlem
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio118" value="118" />Il a failli
                    détruire la city
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio119" value="119" />Il a failli
                    détruire l'empire state-building
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio120" value="120" />
                    L'armée a failli le capturer
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse30" class="response"></p>
              <h4>31. Pourquoi Natasha Romanoff veut sauver Barton?</h4>

              <div class="formulaire">
                <form id="form31">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio121" value="121" not(:checked
                      ) />
                    Elle aime
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio122" value="122" />
                    Elle veut faire parler Loki
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio123" value="123" />
                    Il lui doit de l'argent
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio124" value="124" />
                    Elle a une dette envers lui
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                </form>
              </div>
              <p id="goodResponse31" class="response"></p>

              <h4>
                32. Qui sauve Black Widow de Hulk sur le porte-avion du
                SHIELD?
              </h4>
              <div class="formulaire">
                <form id="form32">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio125" value="125" not(:checked
                      ) />Iron Man
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio126" value="126" />Phil Coulson
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio127" value="127" />Thor
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio128" value="128" />Captain
                    America
                    <label class="form-check-label"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse32" class="response"></p>

              <h4>
                33. Que pense Tony Stark de Loki après l'attaque du
                porte-avion du SHIELD ?
              </h4>
              <div class="formulaire">
                <form id="form33">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio129" value="129" not(:checked
                      ) />Qu'il est fou
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio130" value="130" />Que c'est une
                    diva
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio131" value="131" />Qu'il est bon
                    comédien
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio132" value="132" />Qu'il n'a plus
                    aucune chance de gagner
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse33" class="response"></p>
              <h4>
                34. Qu'est que Loki n'arrive pas à faire à Tony Stark ?
              </h4>
              <div class="formulaire">
                <form id="form34">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio133" value="133" not(:checked
                      ) />Le mettre sous son contrôle
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio134" value="134" />Le balancer du
                    toit de la tour Stark
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio135" value="135" />Lui voler son
                    armure
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio136" value="136" />Lui faire peur
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse34" class="response"></p>

              <h4>
                35. Par quoi le cube est protégé en haut de la tour Stark ?
              </h4>
              <div class="formulaire">
                <form id="form35">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio137" value="137" not(:checked
                      ) />Une énergie mystèrieuse
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio138" value="138" />Un mur
                    quantique
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio139" value="139" />Un champ
                    d'énergie pure
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio140" value="140" />Les Chitauris
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse35" class="response"></p>

              <h4>
                36. Quel est le secret du Dr Banner pour se changer en Hulk?
              </h4>
              <div class="formulaire">
                <form id="form36">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio141" value="141" not(:checked
                      ) />Il n'a jamais cessé d'être en colère
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio142" value="142" />Il n'a pas
                    besoin de se mettre en colère
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio143" value="143" />C'est Hulk qui
                    se met en colère
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio144" value="144" />Il a des tas
                    de
                    raison d'être en colère
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse36" class="response"></p>
              <h4>
                37. Qui explique à Black Widow comment arrêter le cube et
                fermer le passage ?
              </h4>
              <div class="formulaire">
                <form id="form37">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio145" value="145" not(:checked
                      ) />Jarvis
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio146" value="146" />Iron Man
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio147" value="147" />Dr Erik Selvig
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio148" value="148" />Thor
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse37" class="response"></p>
              <h4>
                38.Qui rattrape Iron Man quand il tombe de la brèche?
              </h4>
              <div class="formulaire">
                <form id="form38">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio149" value="149" not(:checked
                      ) />Thor
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio150" value="150" />Captain
                    America
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio151" value="151" />Hulk
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio152" value="152" />Jarvis
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse38" class="response"></p>

              <h4>
                39. Qui a la charge du cube une fois l'armée Chitauri vaincu?
              </h4>
              <div class="formulaire">
                <form id="form39">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio153" value="153" not(:checked
                      ) />Thor
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio154" value="154" />Iron Man
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio155" value="155" />Le SHIELD
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio156" value="156" />Le Dr Banner
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse39" class="response"></p>
              <h4>
                40. Avec qui part le Dr Banner à la fin?
              </h4>
              <div class="formulaire">
                <form id="form40">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio157" value="157" not(:checked
                      ) />Le SHIELD
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio158" value="158" />Tony Stark
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio159" value="159" />Captain
                    America
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio160" value="160" />Il part seul
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse40" class="response"></p>
            </article>
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
<script src="./script.js/scriptAvengers1.js"></script>
<!--<script src="./script.js/cookies.js"></script>-->
</body>

</html>