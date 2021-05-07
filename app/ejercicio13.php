<?php
include_once "calcular.php";
$primerNumero = rand(-25, 25);
$segundoNumero = rand(-25, 25);
$eligeOperacion = rand(1, 3);

switch($eligeOperacion){
	case 1:
		$operacion = '+';
		break;
	case 2:
		$operacion = '/';
		break;
	case 3:
		$operacion = '$';
}


calcular($primerNumero, $operacion,$segundoNumero);
?>