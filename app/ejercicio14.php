<?php
/*primer funcion de f° a C° (1 param) retorma valor
segunda C a F  C° a f° (1 param) retorma valor
tercera mostrartemperatura (param que sea necesaria)
cuarta transformar (una temp, a que la quiere llevar)
*/
include_once "trans_F_C.php";
$temperatura = rand(-20, 125);
$select = rand(1, 200) % 2;

if($select){
	$operacion = "celsius";
}else{
	$operacion	= "fahrenheit";
}

mostrarTemperatura($temperatura, $operacion);



?>