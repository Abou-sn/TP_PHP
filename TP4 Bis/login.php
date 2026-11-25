<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['login'],$_POST['password'])) {
        $login = $_POST['login'];
        $password = sha1($_POST['password']);

        $connexion=mysqli_connect("localhost","root","");
        $database="users";
        $table="logins";
        $ok=mysqli_select_db($connexion,$database);
        $sql="SELECT * FROM $table WHERE login='$login' AND password='$password'";
        $result=mysqli_query($connexion,$sql);
        $resultCheck=mysqli_num_rows($result);
        if($resultCheck > 0){
            echo "<h1>Bonjour $login</h1>";
        }else{
            echo "<h1>Login ou mot de passe incorrect</h1>";
        }
    }
} else {
    header('Location: accueil.php?error');
    exit();
}