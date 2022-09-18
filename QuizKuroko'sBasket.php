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
          <h1 class="text-center">Quiz Kuroko's basket</h1>
        </div>

        <article class="col">
          <p id="resume">
            Résumé :<a target="_blank" href="https://kurokosbasket.fandom.com/fr/wiki/Tetsuya_Kuroko">Kuroko Tetsuya</a>
            ancien membre du club de basket du collège <b>Teiko</b> aime le
            basket par-dessus tout. Suite à une incompréhension il quitte le
            club avant la fin de la saison avec une idée en tête prouver à
            ses anciens partenaires, que le basket n'est pas comme ils
            conçoivent mais un sport d'équipe avant tout.À son entrée au
            lycée il s'inscrit au club de basket du lycée Seirin. Le club de
            basket du lycée Seirin qui est composé de :
            <em>Junpei Hyūga, Shun Izuki, Rinnosuke Mitobe, Teppei Kiyoshi,
              Shinji Koganei, Satoshi Tsuchida, Kōki Furihata</em>
            et leur <u>entraineur Riko Aida.</u> Il y a deux nouveaux
            joueurs cette saison Tetsuya Kuroko et Taïga Kagami. Taïga sera
            la lumière de Kuroko qui l'aidera à déployer son talent qui est
            de faire des passes dans l'ombre au cours des matchs Kuroko
            deviendra de plus en plus fort et étoffera son éventail de
            technique pour amener le club de basket de
            <a target="_blank" href="https://kurokosbasket.fandom.com/fr/wiki/Lyc%C3%A9e_Seirin">Seirin</a>
            à la victoire.
          </p>
        </article>
        <div class="row">
          <div class="col">
            <article id="questionReponse">
              <h4>1. Qui conseille Riko au club de basket de Seirin ?</h4>

              <div class="formulaire">
                <form id="form1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio1" value="1" not(:checked ) />
                    Taisuke Ōtsubo
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio2" value="2" />
                    Maître Takeda
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio3" value="3" />
                    Kazuya Hara
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio4" value="4" />
                    Maître Mibuchi
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                </form>
              </div>
              <p id="goodResponse1" class="response"></p>

              <h4>2. Quel est le surnom de Kuroko ?</h4>
              <div class="formulaire">
                <form id="form2">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio5" value="5" not(:checked ) />Le
                    joueur de l'ombre
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio6" value="6" />Le joueur miracle
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio7" value="7" />Le joueur au
                    drible
                    invisible
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio8" value="8" />Le joueur fantôme
                    <label class="form-check-label"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse2" class="response"></p>

              <h4>
                3. Pour être admis au club de basket de Seirin où les joueurs
                doivent-ils rendre leur formulaire ?
              </h4>
              <div class="formulaire">
                <form id="form3">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio9" value="9" not(:checked
                      ) />Dans
                    le gymnase
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio10" value="10" />Sur le toit du
                    lycée
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio11" value="11" />Dans la cour
                    avant
                    l'appel du matin
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio12" value="12" />En classe
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse3" class="response"></p>
              <h4>
                4. Au début de l'année qui veut débaucher Kuroko de Seirin
                alors que les matchs n'ont pas commencés ?
              </h4>
              <div class="formulaire">
                <form id="form4">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio13" value="13" not(:checked
                      ) />Daiki Aomine
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio14" value="14" />Shintarō
                    Midorima
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio15" value="15" />Ryōta Kise
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio16" value="16" />Taiga Kagami
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse4" class="response"></p>

              <h4>
                5. Comment Kuroko veut faire pour battre Kise lors de son
                premier match face à lui ?
              </h4>
              <div class="formulaire">
                <form id="form5">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio17" value="17" not(:checked
                      ) />Avec des passes vortex
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio18" value="18" />Avec l'aide
                    Hyūga
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio19" value="19" />Avec son drible
                    invisible
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio20" value="20" />En unissant ses
                    forces à celle de Taiga
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse5" class="response"></p>

              <h4>
                6.Qui est l'amateur de blague pourri du lycée Seirin ?
              </h4>
              <div class="formulaire">
                <form id="form6">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio21" value="21" not(:checked
                      ) />Shun Izuki
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio22" value="22" />Rinnosuke Mitobe
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio23" value="23" />Teppei Kiyoshi
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio24" value="24" />Shinji Koganei
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse6" class="response"></p>
              <h4>
                7. Quel joueur de Seirin ne parle jamais ?
              </h4>
              <div class="formulaire">
                <form id="form7">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio25" value="25" not(:checked
                      ) />Satoshi Tsuchida
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio26" value="26" />Kōki Furihata
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio27" value="27" />Rinnosuke Mitobe
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio28" value="28" />Yukio Kasamatsu
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse7" class="response"></p>
              <h4>
                8. Seirin VS Kaijô premier match amical ?
              </h4>
              <div class="formulaire">
                <form id="form8">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio29" value="29" not(:checked
                      ) />120
                    à 118
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio30" value="30" />100 à 98
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio31" value="31" />102 à 106
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio32" value="32" />90 à 88
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse8" class="response"></p>

              <h4>
                9. Quel est le premier joueur qui blaisse Kuroko pendant un
                match ?
              </h4>
              <div class="formulaire">
                <form id="form9">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio33" value="33" not(:checked
                      ) />Daiki Aomine
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio34" value="34" />Makoto Hanamiya
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio35" value="35" />Ryōta Kise
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio36" value="36" />Atsushi
                    Murasakibara
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse9" class="response"></p>
              <h4>
                10. Quelle est la capacité spéciale de Shintarō Midorima ?
              </h4>
              <div class="formulaire">
                <form id="form10">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio37" value="37" not(:checked
                      ) />Les
                    dunks
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio38" value="38" />Les passes
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio39" value="39" />les tirs à 3
                    points
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio40" value="40" />Les fautes
                    pendants les tirs
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse10" class="response"></p>
              <h4>
                11. Quel surnom l'équipe de Seirin donne au joueur étranger de
                l'équipe de Shinkyō?
              </h4>

              <div class="formulaire">
                <form id="form11">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio41" value="41" not(:checked ) />
                    La perche
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio42" value="42" />
                    L'animal
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio43" value="43" />
                    Le géant
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio44" value="44" />
                    le paternel
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                </form>
              </div>
              <p id="goodResponse11" class="response"></p>

              <h4>
                12. Quel est le signe astrologique de Shintarō Midorima?
              </h4>
              <div class="formulaire">
                <form id="form12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio45" value="45" not(:checked
                      ) />Cancer
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio46" value="46" />Bélier
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio47" value="47" />Taureau
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio48" value="48" />
                    Gémeaux
                    <label class="form-check-label"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse12" class="response"></p>

              <h4>
                13. Quelle technique utilisent les joueurs de Seihô ?
              </h4>
              <div class="formulaire">
                <form id="form13">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio49" value="49" not(:checked
                      ) />Le
                    run and gun
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio50" value="50" />Il blesse les
                    autres joueurs
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio51" value="51" />Les arts
                    martiaux
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio52" value="52" />Les tirs à trois
                    points
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse13" class="response"></p>
              <h4>
                14.Combien de fautes fait Taiga Kagami dans le match Seirin VS
                Seihô ?
              </h4>
              <div class="formulaire">
                <form id="form14">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio53" value="53" not(:checked ) />2
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio54" value="54" />3
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio55" value="55" />4
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio56" value="56" />5
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse14" class="response"></p>

              <h4>
                15. Quel joueur arrive à marquer Kuroko et l'empêche de
                développer son jeux ?
              </h4>
              <div class="formulaire">
                <form id="form15">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio57" value="57" not(:checked
                      ) />Yukio Kasamatsu
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio58" value="58" />Shōichi Imayoshi
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio59" value="59" />Kentaro Seto
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio60" value="60" />Kazunari Takao
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse15" class="response"></p>

              <h4>
                16. Quel numéro porte Shintarō Midorima à Shûtoku ?
              </h4>
              <div class="formulaire">
                <form id="form16">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio61" value="61" not(:checked ) />5
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio62" value="62" />6
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio63" value="63" />7
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio64" value="64" />11
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse16" class="response"></p>
              <h4>
                17. Comment les joueurs de Seirin appellent le chien trouvé
                par Kuroko qui devient leur mascotte ?
              </h4>
              <div class="formulaire">
                <form id="form17">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio65" value="65" not(:checked
                      ) />Kuroko junior
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio66" value="66" />Shooting star
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio67" value="67" />Taiga junior
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio68" value="68" />hamsuke
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse17" class="response"></p>
              <h4>
                18. Qui est amoureuse de Kuroko depuis le collège ?
              </h4>
              <div class="formulaire">
                <form id="form18">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio69" value="69" not(:checked
                      ) />Riko Aida
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio70" value="70" />Mikasa
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio71" value="71" />Ayumi
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio72" value="72" />Satsuki Momoi
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse18" class="response"></p>

              <h4>
                19. Comment Junpei Hyūga surnomme le numéro 9 de Tôô?
              </h4>
              <div class="formulaire">
                <form id="form19">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio73" value="73" not(:checked
                      ) />Figure de champignon
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio74" value="74" />Tête de
                    champignon
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio75" value="75" />Tête rigolote
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio76" value="76" />Le paternel
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse19" class="response"></p>
              <h4>
                20. Dans le premier match opposant Tôô à Seirin à quel moment
                arrive Daiki Aomine?
              </h4>
              <div class="formulaire">
                <form id="form20">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio77" value="77" not(:checked
                      ) />Dès
                    le début du match
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio78" value="78" />3ème quart-temps
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio79" value="79" />2ème quart-temps
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio80" value="80" />Fin du premier
                    quart-temps
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse20" class="response"></p>
              <h4>
                21. Quel numéro porte Daiki Aomine dans l'équipe de Tôô?
              </h4>

              <div class="formulaire">
                <form id="form21">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio81" value="81" not(:checked ) />
                    4
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio82" value="82" />
                    5
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio83" value="83" />
                    6
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio84" value="84" />
                    12
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                </form>
              </div>
              <p id="goodResponse21" class="response"></p>

              <h4>
                22.Après sa défaite contre Tôô, Meisei et Senshinkan, Seirin
                rate la compétition de ?
              </h4>
              <div class="formulaire">
                <form id="form22">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio85" value="85" not(:checked
                      ) />Winter-cup
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio86" value="86" />Inter-Lycée
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio87" value="87" />Tournoi d'été
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio88" value="88" />Tournoi d'hiver
                    <label class="form-check-label"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse22" class="response"></p>

              <h4>
                23. Quelle est la particualarité de Riko en cuisine ?
              </h4>
              <div class="formulaire">
                <form id="form23">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio89" value="89" not(:checked
                      ) />Elle cuisine le curry comme personne
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio90" value="90" />Elle ne sait pas
                    cuisiner
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio91" value="91" />Elle ne sait
                    faire
                    que les oeufs durs
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio92" value="92" />Elle est
                    végétarienne
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse23" class="response"></p>
              <h4>
                24. Commbien de matchs amicaux perd Seirin face à Shûtoku
                pendant le stage d'été ?
              </h4>
              <div class="formulaire">
                <form id="form24">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio93" value="93" not(:checked
                      ) />Aucun
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio94" value="94" />1
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio95" value="95" />2
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio96" value="96" />3
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse24" class="response"></p>

              <h4>
                25. Pendant le stage d'été Shintarō Midorima et Taiga Kagami
                font un contre un et ?
              </h4>
              <div class="formulaire">
                <form id="form25">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio97" value="97" not(:checked ) />9
                    à
                    12 pour Kagami
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio98" value="98" />Kagami n'arrive
                    pas à mettre un seul panier
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio99" value="99" />12 à 9 pour
                    Shintarō Midorima
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio100" value="100" />12 à 12
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse25" class="response"></p>

              <h4>
                26. Qui a été le tuteur de Ryōta Kise au collège Teiko?
              </h4>
              <div class="formulaire">
                <form id="form26">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio101" value="101" not(:checked
                      ) />Shintarō Midorima
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio102" value="102" />Atsushi
                    Murasakibara
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio103" value="103" />Seijūrō Akashi
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio104" value="104" />Tetsuya Kuroko
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse26" class="response"></p>
              <h4>
                27. Selon Daiki Aomine le seul joueur capable de le battre
                c'est ?
              </h4>
              <div class="formulaire">
                <form id="form27">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio105" value="105" not(:checked
                      ) />Akashi Seijūrō
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio106" value="106" />Atsushi
                    Murasakibara
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio107" value="107" />Ryōta Kise
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio108" value="108" />Lui même
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse27" class="response"></p>
              <h4>
                28. Quel numéro porte Ryōta Kise à Kaijô ?
              </h4>
              <div class="formulaire">
                <form id="form28">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio109" value="109" not(:checked
                      ) />5
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio110" value="110" />6
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio111" value="111" />7
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio112" value="112" />22
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse28" class="response"></p>

              <h4>
                29. Que veulent faire les joueurs novices de Seirin (ceux qui
                restent toujours sur le banc) de leur jour de repos?
              </h4>
              <div class="formulaire">
                <form id="form29">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio113" value="113" not(:checked
                      ) />Un match amical contre Shûtoku
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio114" value="114" />Un tournoi de
                    street basket
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio115" value="115" />Du vélo
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio116" value="116" />Une course
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse29" class="response"></p>
              <h4>
                30. Dans quel club jouent Atsushi Murasakibara et Tatsuya
                Himuro?
              </h4>
              <div class="formulaire">
                <form id="form30">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio117" value="117" not(:checked
                      ) />Teiko
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio118" value="118" />Tôô
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio119" value="119" />Kirisaki
                    Daiichi
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio120" value="120" />
                    Yôsen
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse30" class="response"></p>
              <h4>
                31. Pourquoi Daiki Aomine ne joue pas les derniers matchs de
                l'inter lycée?
              </h4>

              <div class="formulaire">
                <form id="form31">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio121" value="121" not(:checked
                      ) />
                    Seijūrō Akashi lui a demandé
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio122" value="122" />
                    Il est blessé au coude
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio123" value="123" />
                    Il est blessé à la cheville
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio124" value="124" />
                    Il n'a pas envie de jouer
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                </form>
              </div>
              <p id="goodResponse31" class="response"></p>

              <h4>
                32.Quel est le joueur de la génération miracle qui ne veut
                jamais venir à l'entrainement?
              </h4>
              <div class="formulaire">
                <form id="form32">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio125" value="125" not(:checked
                      ) />Daiki Aomine
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio126" value="126" />Shintarō
                    Midorima
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio127" value="127" />Ryōta Kise
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio128" value="128" />Rinnosuke
                    Mitobe
                    <label class="form-check-label"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse32" class="response"></p>

              <h4>
                33. Quel est le surnom de Teppei Kiyoshi ?
              </h4>
              <div class="formulaire">
                <form id="form33">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio129" value="129" not(:checked
                      ) />Roi sans couronne
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio130" value="130" />Main d'acier
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio131" value="131" />Coeur d'acier
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio132" value="132" />L'indomptable
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse33" class="response"></p>
              <h4>
                34. Combien de ballons de basket Kuroko a usé pour
                perfectionner son drible invisible avant de le montrer à
                Kagami?
              </h4>
              <div class="formulaire">
                <form id="form34">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio133" value="133" not(:checked
                      ) />3
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio134" value="134" />4
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio135" value="135" />5
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio136" value="136" />6
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse34" class="response"></p>

              <h4>
                35. Match Seirin VS Shûtoku qualification pour la Winter-Cup à
                quel quart-temps Kuroko utilise son drible invisible pour la
                première fois en compétition?
              </h4>
              <div class="formulaire">
                <form id="form35">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio137" value="137" not(:checked
                      ) />1
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio138" value="138" />2
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio139" value="139" />3
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio140" value="140" />4
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse35" class="response"></p>

              <h4>
                36.Match Seirin VS Shûtoku qualification pour la Winter-Cup
                qui doit tirer deux lancés francs juste avant la fin du match
                ?
              </h4>
              <div class="formulaire">
                <form id="form36">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio141" value="141" not(:checked
                      ) />Taiga Kagami
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio142" value="142" />Teppei Kiyoshi
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio143" value="143" />Junpei Hyūga
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio144" value="144" />Satoshi
                    Tsuchida
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse36" class="response"></p>
              <h4>
                37. Pourquoi Junpei Hyūga ne voulait pas jouer au basket avec
                Teppei Kiyoshi quand il est arrivé à Seirin ?
              </h4>
              <div class="formulaire">
                <form id="form37">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio145" value="145" not(:checked
                      ) />Il avait subit trop de défaite au collège
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio146" value="146" />Il était nul
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio147" value="147" />Il n'aimait
                    pas
                    Teppei Kiyoshi
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio148" value="148" />Il jouait dans
                    un autre club
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse37" class="response"></p>
              <h4>
                38.Qui propose que Junpei Hyūga soit le capitaine de l'équipe
                du lycée Seirin?
              </h4>
              <div class="formulaire">
                <form id="form38">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio149" value="149" not(:checked
                      ) />Tous les joueurs
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio150" value="150" />Teppei Kiyoshi
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio151" value="151" />Riko Aida
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio152" value="152" />Shun Izuki
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse38" class="response"></p>

              <h4>
                39.Avec quoi se déplacent Shintarō Midorima et Kazunari Takao?
              </h4>
              <div class="formulaire">
                <form id="form39">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio153" value="153" not(:checked
                      ) />Avec le bus
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio154" value="154" />Ils marchent
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio155" value="155" />En vélo
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio156" value="156" />En
                    pousse-pousse
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse39" class="response"></p>
              <h4>
                40. Quel est le surnom de Makoto Hanamiya du Lycée Kirisaki
                Daiichi?
              </h4>
              <div class="formulaire">
                <form id="form40">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio157" value="157" not(:checked
                      ) />Général sans couronne
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio158" value="158" />Le malin
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio159" value="159" />le bad boy
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio160" value="160" />Le déjanté
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

<script src="bootstrap.bundle.min.js "></script>
<script src="jquery-3.6.0.min.js "></script>
<script src="./script.js/scriptkuroko40q.js "></script>
<!--<script src="./script.js/cookies.js"></script>--></body>

</html>