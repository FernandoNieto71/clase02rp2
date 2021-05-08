<?php
/*primer funcion de f° a C° (1 param) retorma valor
segunda C a F  C° a f° (1 param) retorma valor
tercera mostrartemperatura (param que sea necesaria)
cuarta transformar (una temp, a que la quiere llevar)
*/
//include_once "calcular.php";
$temperatura = rand(-20, 125);
$select = rand(1, 200) % 2;

if($select){
	$operacion = "celsius";
}else{
	$operacion	= "fahrenheit";
}

mostrartemperatura($temperatura, $operacion);

function fahrenheitCelsius($temperatura){
	return ($temperatura-32)*5/9;
}

function celsiusFahrenheit($temperatura){
	return ($temperatura * 9/5) + 32;
}

function mostrarTemperatura($valortermico, $operacion){
	$valor = transformarA($valortermico, $operacion);
	$otraop;
	if($operacion == "celsius"){
		$otraop = "fahrenheit";
	}
	else{
		$otraop = "celsius";
	}
	echo "La temperatura $valortermico en $otraop es igual a $valor en $operacion";
}

function transformarA($valortermico, $operacion){
	if($operacion=="celsius"){
			return fahrenheitCelsius($valortermico);
		} else{
				return celsiusFahrenheit($valortermico);
		}
		
}

?>