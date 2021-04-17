<?php
	echo "<h1>3-al ingresar un mes del año informar si es invierno, verano, otoño o primavera. </h1>";
	
	$mes = rand(1, 12);
	switch ($mes) {
		case '1':
			echo "Mes de enero.";
			echo "<br>";
			echo "Es verano";
			break;
		case '2':
			echo "Mes de febrero. ";
			echo "<br>";
			echo "Es verano";
			break;	
		case '3':
			echo "Mes de marzo.";
			echo "<br>";
			echo "Es verano y otoño";
			break;	
		case '4':
			echo "Mes de abril.";
			echo "<br>";
			echo "Es otoño";
			break;
		case '5':
			echo "Mes de mayo.";
			echo "<br>";
			echo "Es otoño";
			break;
		case '6':
			echo "Mes de junio.";
			echo "<br>";
			echo "Es otoño e invierno";
			break;
		case '7':
			echo "Mes de julio.";
			echo "<br>";
			echo "Es invierno";
			break;	
		case '8':
			echo "Mes de agosto.";
			echo "<br>";
			echo "Es invierno";
			break;	
		case '9':
			echo "Mes de septiembre.";
			echo "<br>";
			echo "Es invierno y primavera";
			break;
		case '10':
			echo "Mes de Octubre.";
			echo "<br>";
			echo "Es primavera";
			break;
		case '11':
			echo "Mes de Noviembre.";
			echo "<br>";
			echo "Es primavera";
			break;
		case '12':
			echo "Mes de Diciembre.";
			echo "<br>";
			echo "Es primavera y verano";
			break;	
		default:
			# code...
			break;
	}


?>