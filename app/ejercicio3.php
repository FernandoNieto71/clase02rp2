<?php
	echo "<h1>3-al ingresar un mes del año informar si es invierno, verano, otoño o primavera. </h1>";
	
	$mes = 3;
	switch ($mes) {
		case '1':
			echo "Mes de enero. \n Es verano";
			break;
		case '2':
			echo "Mes de febrero. \n Es verano";
			break;	
		case '3':
			echo "Mes de marzo. \n Es verano y otoño";
			break;	
		case '4':
			echo "Mes de abril. \n Es otoño";
			break;
		case '5':
			echo "Mes de mayo. \n Es otoño";
			break;
		case '6':
			echo "Mes de junio. \n Es otoño e invierno";
			break;
		case '7':
			echo "Mes de julio. \n Es invierno";
			break;	
		case '8':
			echo "Mes de agosto. \n Es invierno";
			break;	
		case '9':
			echo "Mes de septiembre. \n Es invierno y primavera";
			break;
		case '10':
			echo "Octubre. \n Es primavera";
			break;
		case '11':
			echo "Noviembre. \n Es primavera";
			break;
		case '12':
			echo "Diciembre. \n Es primavera y verano";
			break;	
		default:
			# code...
			break;
	}


?>