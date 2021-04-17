<?php
	echo "<h1>4- pedir tres números informar el mayor de los tres  </h1>";
	
	$numero1 = rand(1, 49);
	$numero2 = rand(1, 25);
	$numero3 = rand(1, 75);
	
	if($numero1 > $numero2 && $numero1 > $numero3)
		{
			echo "El numero ", $numero1 ," es el mayor de ", $numero2, " y de ", $numero3;
		}
	else
		{
		if($numero2 > $numero1 && $numero2 > $numero3)
			{
				echo "El numero ", $numero2, " es el mayor de ", $numero1, " y de ", $numero3;
			}
		else
			{
				echo "El numero ", $numero3, " es el mayor de ", $numero2, " y de ", $numero1;	

			}
		}
			
		
		
	


?>