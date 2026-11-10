<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['login'],$_POST['mdp'])){
        $login = $_POST['login'];
        $mdp = $_POST['mdp'];
        if ($login == "admin" && $mdp == "admin"){
            session_start();
            $_SESSION['login'] = $login;
            $_SESSION['mdp'] = md5($mdp);
            $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
            header('Location: admin.php');
            exit(0);

        } else {
            header('Location: formulaire.php?error');
            exit(0);

        }
    } else {
        header('Location: formulaire.php?error');
        exit(0);
    }
} else {
    header('Location: formulaire.php?error');
    exit(0);
}
