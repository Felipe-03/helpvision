<?php
$escolha = $_POST['escolha'];

switch($escolha){
case "Protanopia":
header("Location:protanopia.html");
break;

case "Acromático":
header("Location:acromatico.html");
break;

case "Deuteranopia":
header("Location:deuteranopia.html");
break;

case "Tritanopia":
header("Location:tritanopia.html");
break;

}


?>