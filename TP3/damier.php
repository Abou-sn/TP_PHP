<?php
include("fragments/entete.html");

echo "<form action='' method='post'>";
echo "<label for='nbColonnes'>Colonnes</label>";
echo "<input id='nbColonnes' type='number' min='0' max='20' placeholder='Nombre de colonnes' name='nbColonnes'>";

echo "<label for='nbLignes'>Lignes</label>";
echo "<input id='nbLignes' type='number' min='0' max='20' placeholder='Nombre de lignes' name='nbLignes'>";

echo "<label for='couleur'>Couleurs</label>";
echo "<input id='couleur' type='color' name='Couleur'>";

echo "<label for='valider'></label>";
echo "<input id='valider' type='submit' name='Valider' value='Valider'>";

echo "</form>";

if (isset($_POST['nbColonnes'],$_POST['nbLignes'],$_POST['couleur'])){
    $nbLignes = $_POST['nbLignes'];
    $nbColonnes = $_POST['nbColonnes'];
    $color = $_POST['couleur'];

echo "<table>";
    for($i=1;$i<=$nbLignes;$i++){
        echo "<tr>";

        for($j=1;$j<=$nbColonnes;$j++){

            if(($i+$j)%2==1){
                $color = $_POST['couleur'];
            }
            else {
                $color = 'white';
            }

            echo "<td style='background-color: $color'  > </td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}