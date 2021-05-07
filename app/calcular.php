<?php
function sumar($numero1, $numero2){
	$suma=$numero1 + $numero2;
	return $suma;
}

function dividir($numero1, $numero2){
//uso retornarSiEsCero, si es cero retornar infinito
	$division=$numero1/$numero2;
	return $division;
}

function retornarSiEsCero($numeroingresado){
	//si es cero retorna true sino true
	if($numeroingresado==0){
		return 1;
	}
	else{
		return 0;
	}
}

function calcular($numero1, $operador, $numero2){
//si operando es igual al + suma, si / dividir
	switch($operador){
		case '+':
			mostrarResultado(sumar($numero1, $numero2));
			break;
		case '/':
			if(!retornarSiEsCero($numero2)){
				mostrarResultado(dividir($numero1,$numero2));
			} else {
				echo "no se puede dividir por cero";
			}
			break;
		case '$':
			echo "Operacion no permitida";
			break;
	}
}

function mostrarResultado($resultado){
//mostrar resultado
	echo "el resultado es  $resultado";
}

?>