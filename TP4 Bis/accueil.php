<?php
echo "<h1>Formulaire</h1>";
echo "
<form action='login.php' method='post'>
    <label for='login'>Login</label>
    <input type='text' name='login' id='login'>
    <label for='mdp'>Mot de passe</label>
    <input type='password' name='password' id='password'>
    <input type='submit' name='valider' value='Valider'>
</form>";

if (isset($_GET['error'])) {
    $error = $_GET['error'];
    switch ($error){
        case 1001 :
            echo "<p>Il faut remplir le formulaire Monsieur</p>";
        case 1002 :
            echo "<p>Le login ou le mdp est incorrect</p>";


    }
}
