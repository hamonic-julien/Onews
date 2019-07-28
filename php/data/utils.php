<?php

//définition de la fonction : récupérer un extrait de $text
//$size = parametre facultatif, qui vaudra 100 par défaut
function getSummary ($text, $size = 100) { //couper un petit extrait du texte et le retourner
    return substr($text, 0, $size);     //https://secure.php.net/manual/fr/function.substr.php
};
?>