<?php
session_start();
if (isset($_SESSION['login'])){
    $login = $_SESSION['login'];
    if ($login == "admin"){
        echo "<p>Bienvenue sur le site Admin</p>";
        echo "<p>Toi t'est le boss</p>";
    }
    if ($login == "user"){
        echo "<p>Bienvenue sur le site User</p>";
        echo "<p>Toi t'est un user lambda</p>";
    }
    if ($login == "toto"){
        echo "<p>Bienvenue sur le site Toto</p>";
        echo "<p>Toi t'est juste Toto...</p>";
    }
}
