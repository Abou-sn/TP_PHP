<?php
setcookie("cookie1","Bonjour tout le monde");
if(isset($_COOKIE["cookie1"])){
    echo "<p> le cookie est : ".$_COOKIE["cookie1"]."</p>";
} else {
    echo "<p> le cookie est inconnu</p>";
}
echo "<h1>Page 2</h1>";
echo "<p>Vous êtes bien sur la page 2</p>";
echo "<a href='page1.php'>Page 1</a>";

