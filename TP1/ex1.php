<!doctype html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title> Index </title>
</head>

<body>



<h1> Première page Web PHP </h1>

<?php

echo "<p> Bonjour tout le monde </p>";




?>


<h2> Un autre Script </h2>
<?php
$a=5;
$b=14;
$c=$a%$b;
echo  "<p> La Valeur de $c est : $c</p>";

?>

<form action="" method="GET">
<label for="message"> Message : </label>
<input type="text" id="message" name="message">
<input type="submit" value="OK" name="OK">

</form>

<?php
if (isset($_GET['message'],$_GET['OK'])){
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
}

?>


<h2>Nouveau formulaire</h2>

<form action="" method="POST">
<label for="message"> Message : </label>
<input type="text" id="message" name="message">
<input type="submit" value="OK" name="OK">

</form>

<?php
if (isset($_POST['message'],$_POST['OK'])){
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
}

?>





<h2>Tableau en PHP </h2>

<?PHP

$tab[]='bonjour';
$tab[]='bye';
echo "<pre>";
print_r($tab);
echo "</pre>";

$tab2=array(0=>"toto",1=>"titi","tata"=>"tata");


echo "<pre>";
print_r($tab2);
echo "</pre>";



?>
</body>
</html> 
