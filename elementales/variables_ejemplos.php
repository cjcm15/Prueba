
<html>
<title>ejemplo_variables.php3</title>
<body>
<p>En este ejemplos las variables conservan los valores alcanzados dentro de la pagina donde fueron declaradas<br>
  <?php
	$i=0;
    echo "\$i Valor inicial = $i <p>";
	while ($i<5)
	{
		$j=0;
        echo "\$j Valor inicial = $j <p>";
		while ($j<3)
		{
			$a=$i*$j;
			echo "$i x $j = $a <BR>";
			$j++;
		}
		echo "<br>";
		$i++;
	}
	
	echo "Vemos que conservan el valor aun fuera del ambiente \"while\" donde fueron declaradas<br>";
	echo "i=$i <br>";
	echo "j=$j <br>";
	echo "a=$a <br>";
?>
</p>
<p>REITERAMOS: Conservan los valores dentro de la misma pagina en la que fueron declaradas y fuera del ambiente while donde fueron declaradas
  <br>
  <?php 	
	echo "i=$i <br>";
	echo "j=$j <br>";
	echo "a=$a <br>";
?>
</p>
Otro ejemplo con for en lugar de while<br>
<?php
	$i=0;
	while ($i<5)
	{
		$j=0;
		for ($j=0;$j<3;$j++)
		{
			$a=$i*$j;
			echo "$i x $j = $a <BR>";
			$j++;
		}
		echo "<br>";
		$i++;
	}
	echo "i=$i <br>";
	echo "j=$j <br>";
	echo "a=$a <br>";

?>

</body>
</html>	