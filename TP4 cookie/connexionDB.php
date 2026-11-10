<?php
function connecter($host=NULL,$user=NULL,$pass=NULL){
    if (func_num_args()==0) {
        $connexion = @mysqli_connect();
    } else {
        $connexion = @mysqli_connect($host,$user,$pass);
    }
    if ($connexion){
        echo "<p>Connexion réussie</p>";
        echo "<p> information sur le serveur : ".mysqli_get_host_info($connexion)."</p>";
        echo "<p> version du serveur : ".mysqli_get_server_info($connexion)."</p>";
        echo "<p> jeu de caractère : ".mysqli_character_set_name($connexion)."</p>";
    } else {
        echo "<p>Erreur lors de la connexion</p>";
        echo "<p> numéro de l'erreur : ".mysqli_connect_errno()."</p>";
        echo "<p> message : ".mysqli_connect_error()."</p>";
    }
    return $connexion;
}

function deconnecter($connexion){
    if ($connexion){
        $ok=@mysqli_close($connexion);
        if ($ok){
            echo "<p> Déconexion réussie</p>";
        } else {
            echo "<p>Erreur lors de la déconnexion</p>";
        }
    } else {
        echo "<p>Connexion n'est pas ouverte</p>";
    }
}

$connexion=connecter("localhost","root","");
deconnecter($connexion);
