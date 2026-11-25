<?php
echo "<h1>Formulaire</h1>";
echo "
<form action='action.php' method='post'>
    <label for='login'>Login</label>
    <input type='text' name='login' id='login'>
    <label for='mdp'>Mot de passe</label>
    <input type='password' name='mdp' id='mdp'>
    <input type='submit' name='valider' value='Valider'>
</form>";

if (isset($_GET['error'])) {
    echo "<p> Tu dois remplir le formulaire</p>";
}
