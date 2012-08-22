<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin título</title>
</head>
<body>
<p>
<?php
echo "Bienvenidos al mundo del PHP";
?>
</p>
<p>
  <?php
$MYVAR = "1234";
$myvar = "4321";

echo $MYVAR. "<br>"; //escribe el valor de la variable
echo $myvar."<br>"; //escribe el valor de la variable
echo '$myvar'.'<br>'; //no escribe el valor de la variable
echo "$myvar".'<br>'; //escribe el valor de la variable
?>
</p>
<p>
  <?php
$SUM1 = 12;
$SUM2 = 4;
$TOT = $SUM1 + $SUM2;
echo "La sumatoria de " . $SUM1." mas " .$SUM2." es igual a "  .$TOT;
// Este programa realiza la suma de 12 + 4 y lo presenta en pantalla
?>
<p></p>
<?php
$animales = array(); //con array() se declara que la variable es un vector
$animales[0] = "Gato";
$animales[1] = "Perro";
$animales[2] = "Elefante";

echo $animales[0].  ' NOTA: break funciona igual con comillas simples que dobles '. '<br>';

echo $animales[1]. " NOTA: break funciona igual con comillas simples que dobles ". '<br>';

echo $animales[2]
?> 

</p>
</body>
</html>