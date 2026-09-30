<?php
include("fragments/entete.html");
require_once("func/func.php");
?>
<h1> TP Numero 2</h1>
<h2> Affectation par référence</h2>
<?php
$a=5;
$b=&$a;
//La variable $b est affectée par référence
echo "La valeur de \$a est ".$a;
echo "et la valeur de \$b est ".$b;
echo "<br>";
?>
<h2>Opérateur de fusion null ou NULL </h2>
<?php 
echo "la valeur de \$c est : ".($c ?? 'inconnue');
$c= "users";
echo "<br>";
echo "la valeur de \$c est : ".($c ?? 'inconnue'); 
echo "<br>";
echo "la valeur de \$d est : ".($d ?? $e ?? 'inconnue'); 
$e="toto";
echo "<br>" ;
echo "la valeur de \$d est : ".($d ?? $e ?? 'inconnue'); 

?>
<h2>Opérateur d'affectation de fusion null ou NULL </h2>
<?php

$f ??= "inconnu pour l'instant";
echo "la valeur de \$f est : ".$f;
$f="titi";
echo "<br>";
echo "la valeur de \$f est : ".$f;

?>

<h2>Opérateur ternaire </h2>

<?php
// Si ? ALORS : SINON
$nom="";
echo "Bonjour ".($nom=="" ? 'inconnu' : $nom);
$nom="Aboubacar";
echo "<br>" ;
echo "Bonjour ".($nom=="" ? 'inconnu' : $nom);

?>

<h2>Les tableaux en PHP </h2>
<?php
echo "<h3> Tableaux indexés </h3>";
$tab=array(1,5,4,3,6,8,9,"bonjour",1.25,True);
print_r($tab);
display($tab);
dump($tab);

// avec une boucle itérant sur les indices
for($i=0;$i<count($tab);$i++){
	echo $tab[$i];
	echo "<br>";
}

// avec une boucle for each

foreach($tab as $val){
	echo $val;
	echo "<br>";
}

echo "<h3> Tableaux associatifs </h3>";

$tab=array("lundi"=>"Tieb", "mardi"=>"Koz Kebab", "mercredi"=>"Jambon Beurre", "vendredi"=>"Couscous");
foreach($tab as $key=>$val){
	echo 'la clé est : '.$key;
	echo ' et la valeur est : '.$val;
	echo '<br>';
}
?>

<?php
include("fragments/pied.html")
?>