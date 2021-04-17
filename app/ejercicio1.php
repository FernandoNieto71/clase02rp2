<?php
	echo "<h1>1-obtener la edad informar si es mayor adolescente o menor de edad  </h1>";
	
	$edad = rand(1, 25);

	
	if ($edad < 13) 
	{
		echo $edad." es menor";
	} 
	else
	{
		if ($edad > 17 ) 
		{
			echo $edad." es mayor";
		} 
		else 
		{
			echo $edad." es adolescente";
			
		}
	} 


?>