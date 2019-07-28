<?php


echo 'merci pour votre message ' . $_POST["user_first_name"] . ', nous vous répondrons prochainement à l\'adresse : ' . $_POST["user_mail"];

//si la personne à connu le site grâce au JT de JP P , afficher "old school!";

if($_POST["Liste"] = "JT de 13h") {
    echo "<br>old school!<br>";
}
?>