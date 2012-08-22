<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin título</title>
</head>
<body>
<p>If<br />
<?php
$a=15;
$b=14;
echo "\$a = $a<br>";
echo "\$b = $b<br>";
if ($a > $b) 
{
echo "a es mayor que b <br>"; //verdadero
}
?> 


</p>
<p>If else<br />
<?php
$a=10;
$b=14;
echo "\$a = $a<br>";
echo "\$b = $b<br>";
if ($a > $b) 
{
echo "a es mayor que b <br>"; //verdadero
} 
else 
{
echo "a es menor que b<br>"; // falso
}
?> 
</p>
<p>
  
  if else elseif
  If con elseif puede verificar varias condiciones simultaneamente. elseif actua solo si no se cumplen las otras condiciones (if o else), y ademas se cumple solo el primer elseif que cumpla la condicion especifica<br /> dicho de otro modo elseif es verdadero solo si lo que corresponde a if y a else son falsos y ademas se cumple solo para el primer elseif que sea verdadero.<br />
<?php
$a=1;
$b=40;
echo "\$a = $a<br>";
echo "\$b = $b<br>";
if ($a > $b) {
echo "a es mayor que b<br>"; //verdadero
} 
elseif ($a > 5) 
{
	echo "a es mayor a 5<br>"; //si $a = $b y ademas mayor que 5 se da esta condicion
}
elseif ($a == $b) 
{
	echo "a es igual que b<br>"; //si $a = $b y ademas menor que 5 se da esta condicion
} 
else {
echo "a NO es mayor que b<br>";
}
?> 

<p>While con break <br />
  <?php
$a=0;
while($a<10)
{
	echo "--$a--" ;
	if ($a==5)
		break;
	$a++;
}
echo "Final $a";
?>
</p>
<p> While sin break <br />
  <?php
$a=0;
while($a<10)
{
	echo "--$a--" ;
	$a++;
}
echo "Final $a";
?>

</p>
<p>For con break<br />
<?php
$a=0;
for(;$a<10;)
{
	echo "--$a--" ;
	if ($a==5)
		break;
	$a++;
}
echo "Final $a";
?>
 
<p>For sin break<br />
  <?php
$a=0;
for(;$a<10;)
{
	echo "--$a--" ;
	$a++;
}
echo "Final $a";
?>
</p>
<p>Switch con $a numerico
  <br />
  <?php
$a=rand()%5 ;
switch($a)
{
	case 0:
		echo "Se ha generado un CERO<br>";
		break;
	case 1:
		echo "Se ha generado un UNO<br>";
		break;
	case 2:
		echo "Se ha generado un DOS<br>";
		break;
	case 3:
		echo "Se ha generado un TRES<br>";
		break;
	case 4:
		echo "Se ha generado un CUATRO<br>";
		break;
}
?>
<p>Switch con $a texto<br />
<?php
$a=mapa ;
switch($a)
{
	case mapa:
		echo "Se selecciono MAPA<br>";
		break;
	case casa:
		echo "Se selecciono CASA<br>";
		break;
	case barco:
		echo "Se selecciono BARCO<br>";
		break;
}
?>
<p>Do con while
  <br />
  <?php 
$i = 0;
do 
{ 
  echo "el valor es ahora " . $i . "<br>"; 
  $i++; 
} 
while ($i <= 3);
?> 
<p>

echo (colillas simples y dobles)<br />
<?php 
echo "hola ","adios ","a todos";
// Mostrará -> hola adios a todos
?>
  
  <br />
  <?php
echo 'Esto es una cadena normal y corriente, tardo poco porque no me parseo';
echo "Aquí PHP mira a ver si tengo algo dentro que pueda interpretar, tardo un poco más";
?>
  <br />
  <?php
$var="php-hispano.net";
echo 'Me encanta $var'; // muestra: Me encanta $var
echo "Me encanta $var"; // muestra: Me encanta php-hispano.net
?>
<br />saltos de linea <br />
<?php
//los saltos de linea aparecen en el codigo html, pero no en el navegador.
echo "Hola mundo\n"; //Contiene el salto de línea esperado.
echo "php-hispano.net\n";
echo "Ven a $var\n"; // Produce "Ven a php-hispano.net" y hace un salto de linea
?>
<p>
<font color="#0000CC" size="3">los saltos de linea \n original un salto de linea en el codigo html, pero no en el navegador.</font>

<br />Si queremso que aparezcan en el navegador tenemos que usar br
<?php

echo " <br> Hola mundo <br>"; //Contiene el salto de línea esperado.
echo "php-hispano.net<br>";
echo "Ven a $var<br>"; // Produce "Ven a php-hispano.net" y hace un salto de linea
?>
<br />
  <?php
$var="php-hispano.net";
echo 'Me encanta $var<br>'; // muestra: Me encanta $var
echo "Me encanta $var"; // muestra: Me encanta php-hispano.net
?>

<p>
Verificar si una variable existe
  <br />
<?php 
$c=14;
$d=casa;
echo "\$c = $c<br>";
echo "\$d = $d<br>";
if ($c<>"" AND $d<>"")
{ 
echo "\$c y \$d existen";
}
else
{
echo "\$c o \$d NO existe<br>";

if ($c<>"")
{
echo "\$c existe<br>";	
}
else
{
echo "\$c NO existe<br>";
}

if($d<>"")
{
echo "\$d existe<br>";	
}
else
{
echo "\$d NO existe<br>";
}
}
?>
</body>
</html>