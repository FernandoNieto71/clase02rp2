<?php
	echo "<h1>(IF) de tres numeros indicar el numero del medio o informar si No hay numero del medio  </h1>";
	
	/*$numero1 = rand(1, 49);
	$numero2 = rand(1, 25);
	$numero3 = rand(1, 75);*/
	$numero1 = 7;
	$numero2 = 5;
	$numero3 = 3;

	
	if(($numero1 > $numero2 && $numero1 < $numero3) || ($numero1 < $numero2 && $numero1 > $numero3))
		{
			echo "El numero ", $numero1 ," es el del medio";
		}
	else
		{
		if(($numero2 < $numero3 && $numero2 > $numero1) || ($numero2 > $numero3 && $numero2 < $numero1))
			{
				echo "El numero ", $numero2, " es el del medio";
			}
		else
			{
				if(($numero3 > $numero1 && $numero3 < $numero2) || ($numero3 < $numero1 && $numero3 > $numero2)){
						echo "El numero ", $numero3, " es el del medio";
					}
				else{
						echo "No tiene numero del medio";
					}
			}
		}

?>