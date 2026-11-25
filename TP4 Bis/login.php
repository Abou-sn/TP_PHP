<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') { //si
    if(isset($_POST['login'],$_POST['password'])) {
        $login = $_POST['login'];
        $password = sha1($_POST['password']);

        $connexion=mysqli_connect("localhost","root","");
        $database="users";
        $table="logins";
        $ok=mysqli_select_db($connexion,$database);
        $sql="SELECT * FROM $table WHERE login=? AND password=?";
        $req_prepare=mysqli_prepare($connexion,$sql);
        // $ok liaison bind des paramètres avec la requête SQL
        $ok=mysqli_stmt_bind_param($req_prepare,'ss',$login,$password);
        $ok=mysqli_stmt_execute($req_prepare);
        $result=mysqli_stmt_get_result($req_prepare);
        if(mysqli_num_rows($result) == 1) {
            session_start();
            $_SESSION['login'] = $login;
            $_SESSION['password'] = $password;
            $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
            $_SESSION['date'] = date('d-m-Y H:i:s');
            header('Location: page1.php');
            exit();
        }else{
            header("Location: accueil.php?error=1002");
            exit();
        }
    }
} else {
    header('Location: accueil.php?error==1001');
    exit();
}