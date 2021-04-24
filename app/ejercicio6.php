<?php
	echo "<h1>6 (switch) En una empresa de viajes me dan la opcion de viajar a Bariloche o Ushuaia
o Cataratas, informar si hace frio o calor en la opcion seleccionada
 </h1>";
	
	
	$destino = "Cataratas";
	

	
	switch($destino){
		case "Bariloche":
			echo "En el destino ", $destino, " hace frio";
			break;
		case "Ushuaia":
			echo "En el destino ", $destino, " hace frio";
			break;
		case "Cataratas":
			echo "En el destino ", $destino, " hace calor";
			break;			
	}

?>