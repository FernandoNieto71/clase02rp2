<?php
/*
funciones para transformar temperatura de celsius a fahrenheit
*/
function fahrenheitCelsius($temperatura){
	return ($temperatura-32)*5/9;
}

function celsiusFahrenheit($temperatura){
	return ($temperatura * 9/5) + 32;
}

function mostrarTemperatura($valortermico, $operacion){
	$valor = transformarA($valortermico, $operacion);
	
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