<?php
include("fragments/entete.html");

echo "<form action='' method='post'>";
echo "<label for='nbColonnes'>Colonnes</label>";
echo "<input id='nbColonnes' type='number' min='0' max='20' placeholder='Nombre de colonnes' name='nbColonnes'>";

echo "<label for='nbLignes'>Lignes</label>";
echo "<input id='nbLignes' type='number' min='0' max='20' placeholder='Nombre de lignes' name='nbLignes'>";

echo "<label for='couleur1'>Couleurs Principale </label>";
echo "<input id='couleur1' type='color' name='couleur2'>";
echo "<label for='couleur2'>Couleurs Secondaire </label>";
echo "<input id='couleur2' type='color' name='couleur2'>";

echo "<label for='valider'></label>";
echo "<input id='valider' type='submit' name='Valider' value='Valider'>";

echo "</form>";

if (isset($_POST['nbColonnes'],$_POST['nbLignes'],$_POST['couleur1'],$_POST['couleur2'])) {
    $nbLignes = $_POST['nbLignes'];
    $nbColonnes = $_POST['nbColonnes'];
    $color1 = $_POST['couleur1'];
    $color2 = $_POST['couleur2'];

echo "<table>";
    for($i=1;$i<=$nbLignes;$i++){
        echo "<tr>";

        for($j=1;$j<=$nbColonnes;$j++){

            if(($i+$j)%2==1){
                $colorChoisie = $color1;
            }
            else {
                $colorChoisie = 'white';
            }

            echo "<td style='background-color: $colorChoisie' > </td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}