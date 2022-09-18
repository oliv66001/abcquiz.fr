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
          <h1 class="text-center">Overlord 3 premières saisons</h1>
        </div>

        <article class="col">
          <p id="resume">
            Résumé: Le grand maître du tombeau de Nazarick le seigneur Momonga rebatiser Ainz Ooal Gown a sous ces ordres de puissante créature. Il est le chef d'une des gildes les plus puissante du DMMORPG Yggdrasil, mais le jeu va prendre fin et ils se retrouve tous seul dans le hall de sa guilde attendant la fermeture du serveur. Il va etre projeter dans un nouveau lieu et découvrir que les pnj du grand tombeau de Nazarick sont vivants. Il va tout faire pour conquérir le monde dans le quel il a atérit aider par ces serviteurs loyaux et puissant. Au fur et à mesure de l'histoire il va prendre le contrôle de nombreux peuples afin de faire connaître son nom pour retrouver ces compagnons...
          </p>
        </article>
        <div class="row">
          <div class="col">
            <article id="questionReponse">
              <h4>1. Quel joueur rend visite à Momonga juste avant l'arrêt des serveur d'Yggdrasil ?</h4>
              <div class="formulaire">
                <form id="form1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio1" value="1" not(:checked ) />
                    Bocoubocou Chagamma
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio2" value="2" />
                   Héro Héro
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio3" value="3" />
                    Péronronchino
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio4" value="4" />
                    Pandorazactor
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                </form>
              </div>
              <p id="goodResponse1" class="response"></p>

              <h4>
                2. Quel gardien du grand tombeau de Nazarick déclenche sa compétence à sa mort ?
              </h4>
              <div class="formulaire">
                <form id="form2">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio5" value="5" not(:checked ) />Cosytus
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio6" value="6" />Demiurge
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio7" value="7" />Mare Bello Fiore
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio8" value="8" />Victime
                    <label class="form-check-label"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse2" class="response"></p>

              <h4>
                3. Quel est la première guilde avec qui l'aventurier Momon coopère ?
              </h4>
              <div class="formulaire">
                <form id="form3">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio9" value="9" not(:checked
                      ) />Les épées des ténèbres
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio10" value="10" />Foresight
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio11" value="11" />Les épées malhifiques
                    
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio12" value="12" />Heavy Masher
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse3" class="response"></p>
              <h4>
                4. Selon Cosytus le seigneur Ainz à combien de chance sur 7 de battre Shalltear Bloodfallen ?
              </h4>
              <div class="formulaire">
                <form id="form4">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio13" value="13" not(:checked
                      ) />2
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio14" value="14" />3
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio15" value="15" />4
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio16" value="16" />5
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse4" class="response"></p>

              <h4>
                5. Quelle est l'obsession d'éclair le majordome ?
              </h4>
              <div class="formulaire">
                <form id="form5">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio17" value="17" not(:checked
                      ) />Devenir le maître de Nazarick
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio18" value="18" />Nettoyer Nazarick de fond en comble
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio19" value="19" />Plaire à Albedo
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio20" value="20" />Aider Demiurge
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse5" class="response"></p>

              <h4>
                6. Comment le jeune Climb fait-il la rencontre de Sebas ?
              </h4>
              <div class="formulaire">
                <form id="form6">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio21" value="21" not(:checked
                      ) />Par hasard
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio22" value="22" />Il voit Sebas sauver un enfant
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio23" value="23" />Dans l'attaque du bordel de Re-Estize
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio24" value="24" />En affrontant les 8 doigts
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse6" class="response"></p>
              <h4>
                7. Que dit Zéro à Succulent avant d'affronter Brain Unglaus ?
              </h4>
              <div class="formulaire">
                <form id="form7">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio25" value="25" not(:checked
                      ) />Va t'en tu va me géner
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio26" value="26" />Pas de place pour les amateurs ici
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio27" value="27" />C'était bien lui tu avais aucune chance
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio28" value="28" />Débarrasse-nous des deux guignolent à moins que ce soit trop dur pour toi
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse7" class="response"></p>
              <h4>
                8. Quel membre des 8 doigts et prêt a tout pour ne pas retourner à Nazarick ?
              </h4>
              <div class="formulaire">
                <form id="form8">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio29" value="29" not(:checked ) />Succulent
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio30" value="30" />Hilma
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio31" value="31" />Prato
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio32" value="32" />Peshurian
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse8" class="response"></p>

              <h4>
                9. Qui combat Evileye de la rose bleue pendant que Demiurge discute avec le seigneur Ainz Ooal Gown pendant l'attaque de Jaldabaoht ?
              </h4>
              <div class="formulaire">
                <form id="form9">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio33" value="33" not(:checked
                      ) />Youri Alpha et CZ Delta
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio34" value="34" />Bi Oméga et CZ Delta
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio35" value="35" />Lupus Régina Beta et CZ Delta
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio36" value="36" />Solution et CZ Delta
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse9" class="response"></p>
              <h4>
                10. De quel éspèce est le serpent de l'ouest ?
              </h4>
              <div class="formulaire">
                <form id="form10">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio37" value="37" not(:checked
                      ) />Un réptile
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio38" value="38" />Un dzungari
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio39" value="39" />Un Naga
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio40" value="40" />Un troll
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse10" class="response"></p>
              <h4>
                11. Qui sauve la vie d'Elfirea en tuant le troll qui attaquait le village de Carné ?
              </h4>
              <div class="formulaire">
                <form id="form11">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio41" value="41" not(:checked ) />
                    Enri
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio42" value="42" />
                    Les gobelins
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio43" value="43" />
                    Ainz Ooal Gown
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio44" value="44" />
                    Lupus Regina
                    <label class="form-check-label" for="radio1"> </label>
                  </div>
                </form>
              </div>
              <p id="goodResponse11" class="response"></p>

              <h4>
                12. Qui Fluder Paradyne le mage le plus puissant de l'empire Baharth essaie en vains de soummettre avec sa magie ?
              </h4>
              <div class="formulaire">
                <form id="form12">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio45" value="45" not(:checked
                      ) />Un chevalier de la mort
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio46" value="46" />Un dragon
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio47" value="47" />Un elfe noir
                    <label class="form-check-label"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio48" value="48" />Un troll
                    <label class="form-check-label"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse12" class="response"></p>

              <h4>
                13. Combient de personne Jaldabaoht enlève à Re-Estize pendant son attaque ?
              </h4>
              <div class="formulaire">
                <form id="form13">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio49" value="49" not(:checked ) />plus de 5000
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio50" value="50" />plus de 1000
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio51" value="51" />Plus de 20000
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio52" value="52" />Plus de 10000
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse13" class="response"></p>
              <h4>
                14. Comment Hamsuke se débarrasse d'Erya Uzruth dans le grand tombeau de Nazarick ?
              </h4>
              <div class="formulaire">
                <form id="form14">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio53" value="53" not(:checked
                      ) />Avec sa pourfendeuse il le débarrasse de sa tête
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio54" value="54" />Avec ces pattes il le débarrasse de sa tête
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio55" value="55" />Avec sa queue il le débarrasse de sa tête
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio56" value="56" />Il le pousse violemment
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse14" class="response"></p>

              <h4>
                15. A quoi compare le seigneur Ainz Ooal Gown les membres de la guilde Foresight ?
              </h4>
              <div class="formulaire">
                <form id="form15">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio57" value="57" not(:checked
                      ) />Des vers de terre
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio58" value="58" />Des nuisibles
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio59" value="59" />Des microbes
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio60" value="60" />Des asticots
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse15" class="response"></p>

              <h4>
                16. Que le seigneur Ainz Ooal Gown fait de la tête du noble qui à soit disant envoyer les trimeurs ?
              </h4>
              <div class="formulaire">
                <form id="form16">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio61" value="61" not(:checked
                      ) />Il la donne a Demiurge
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio62" value="62" />Il la transforme en scelette
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio63" value="63" />Il en fait un chevalier de la mort
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio64" value="64" />Il la donne a Shalltear
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse16" class="response"></p>
              <h4>
                17. Quel nom prendra le seigneur Ainz Ooal Gown quand son royaume sera crée ?
              </h4>
              <div class="formulaire">
                <form id="form17">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio65" value="65" not(:checked
                      ) />Roi suprême
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio66" value="66" />Roi sorcier
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio67" value="67" />Roi des ténèbre
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio68" value="68" />Sage roi
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse17" class="response"></p>
              <h4>
                18. Quel mot prononce le seigneur Ainz Ooal Gown avant l'apparition des créatures invoquées avec le sort qui élimine d'un coup 70000 hommes pendant la bataille contre le Royaume de Re-Estize ?
              </h4>
              <div class="formulaire">
                <form id="form18">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio69" value="69" not(:checked
                      ) />Avec ce sort je fini la guerre
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio70" value="70" />Que viennent la terreur
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio71" value="71" />Fini de jouer
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio72" value="72" />Que surgissent le déssespoir
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse18" class="response"></p>

              <h4>
                19. Combien de personne du royaume le seigneur Ainz Ooal Gown veut'il épargner ?
              </h4>
              <div class="formulaire">
                <form id="form19">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio73" value="73" not(:checked
                      ) />3
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio74" value="74" />4
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio75" value="75" />5
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio76" value="76" />6
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                </form>
              </div>
              <p id="goodResponse19" class="response"></p>
              <h4>
                20. Quelle technique Gazef Stronoff a-t-il enseigné à Brian Unglaus ?
              </h4>
              <div class="formulaire">
                <form id="form20">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio77" value="77" not(:checked
                      ) />Renforcement accru
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio78" value="78" />Les lames de lumières
                    <label class="form-check-label" for="radio2"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio79" value="79" />Perception de possibilité
                    <label class="form-check-label" for="radio1"></label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio80" value="80" />Les lames lumineuses
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
<script src="./script.js/Overlord.js"></script>
<!--<script src="./script.js/cookies.js"></script>--></body>

</html>