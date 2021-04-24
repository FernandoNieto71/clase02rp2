<?php
	echo "<h1>(IF) de tres numeros indicar el numero del medio o informar si No hay numero del medio  </h1>";
	

	$numero1 = 3;
	$numero2 = 7;
	$numero3 = 5;

	
if($numero1 == $numero2 || $numero1 == $numero3 || $numero2 == $numero3){
						echo "No tiene numero del medio";
}
else{
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
				echo "El numero ", $numero3, " es el del medio";
			}
		}
}
	

?>