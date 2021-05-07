<?php
include_once "calcular.php";
$primerNumero = rand(-25, 25);
$segundoNumero = rand(-25, 25);
$operacion = '/';

calcular($primerNumero, $operacion,$segundoNumero);
?>