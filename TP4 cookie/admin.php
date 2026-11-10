<?php
session_start();
if (isset($_SESSION['login'])){
    $login = $_SESSION['login'];
    if ($login == "admin"){
        echo "<h1> Bonjour Admin</h1>";
        echo "<p> Bienvenue sur mon site Admin</p>";
        echo "<p>Adresse IP du client ".$_SESSION['ip']." </p>";
        echo "<a href='logout.php'> Déconnexion </a>";
    } else {
        header("Location: formulaire.php?error");
        exit(0);
    }
} else {
    header("Location: formulaire.php?error");
    exit(0);
}