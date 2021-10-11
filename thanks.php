<?php

echo "Merci  " . htmlspecialchars($_POST["User_firstname"]) . " "  .

htmlspecialchars ($_POST["User_lastname"]) . " de nous avoir contacté à propos de " . 

htmlspecialchars ($_POST["User_sujet"]) . ".   Un de nos conseiller vous contactera soit à l'adresse " .

$_POST["User_email"] . " ou par téléphone au " .

htmlspecialchars($_POST["User_phone"]) . "  dans les plus brefs délais pour traiter votre demande : " .

$_POST["User_message"]; 


?>

