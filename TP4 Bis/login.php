<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['login'],$_POST['password'])) {
        $login = $_POST['login'];
        $password = $_POST['password'];
    }
} else {
    header('Location: accueil.php?error');
    exit();
}