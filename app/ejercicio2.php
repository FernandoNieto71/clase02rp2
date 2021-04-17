<?php
	echo "<h1>2- al ingresar un precio se muestra el precio más IVA  </h1>";
	
	$precio = 1555.55;
	$precioiva = $precio * 1.21;
	$formatnumero1 = number_format($precio, 2);
 	 
		echo "el precio sin iva es ", $formatnumero1;
		echo "<br>";
		$formatnumero2 = number_format($precioiva, 2);
		echo "el precio con iva es ", $formatnumero2;


?>