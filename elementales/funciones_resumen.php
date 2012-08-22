<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin título</title>
</head>

<body>
<p>&nbsp;</p>
<p>&nbsp;</p>
Funciones propias de PHP
<p>Funciones con 0, 1 ó 2 parametros de entrada<br />
<?php 
echo sqrt(9)."<br>";
echo rand (10, 20)."<br>";
echo pi()."<br>";
?>
<p>
 Funciones de fecha
 <?php 
 
 echo date(dmy);
 
 ?> 
  
  <?php
// Asumiendo que hoy es: March 10th, 2001, 5:16:18 pm

echo date("F j, Y, g:i a")."<br>";                 // March 10, 2001, 5:16 pm
echo date("m.d.y")."<br>";                         // 03.10.01
echo date("d./m./y")."<br>";                         // 25/03/01
echo date("j, n, Y")."<br>";                       // 10, 3, 2001
echo date("Ymd")."<br>";                           // 20010310
echo date('h-i-s, j-m-y, it is w Day z ')."<br>";  // 05-16-17, 10-03-01, 1631 1618 6 Fripm01
echo date('\i\t \i\s \t\h\e jS \d\a\y.')."<br>";   // It is the 10th day.
echo date("D M j G:i:s T Y")."<br>";               // Sat Mar 10 15:16:08 MST 2001
echo date('H:m:s \m \i\s\ \m\o\n\t\h')."<br>";     // 17:03:17 m is month
echo date("H:i:s")."<br>";                         // 17:16:17
?> 

<p>

 
</p>
<h3>Un ejemplo para entender el uso de funciones es el siguiente: Función que realice la suma de dos números y muestre el resultado</h3>
<p><br />
  <?php function sumar1($sumando1, $sumando2)
{ 
  $suma = ($sumando1 + $sumando2);
  echo "(sin return) El resultado de $sumando1 + $sumando2 = $suma"; 
} 
$resultado = sumar1(5,6); //con echo podemos mostrar los parametros y el resultado
?>
  <br />
  <br />
  <?php function sumar($sumando1, $sumando2)
{ 
  $suma = ($sumando1 + $sumando2);
  return $suma; //devuelve la variable suma para que pueda ser utilizada
} 
//$resultado = sumar(5,6); con return no se pueden visulizar los valores de las varialbles $sumando1 + $sumando2

// echo "El resultado de $sumando1 + $sumando2 = $resultado"; ELIMINADO PORQUE DA ERROR PORQUE NO PUEDE RECUPERAR LOS VALORES DE LOS PARAMETROS PORQUE NO ESTAN EXPLICITADOS EN LA LLAMADA A LA FUNCION

//PODEMOS HACER ESTO
$resultado = sumar(5,6); 

echo "Con return sin poder mostrar los paremetros El resultado es $resultado";

?>
  <br />
  
   <br />
  <?php function sumar2($sumando1, $sumando2)
{ 
  $suma = ($sumando1 + $sumando2);
  return $suma; //devuelve la variable suma para que pueda ser utilizada
} 
$resultado = sumar2($sumando1=5,$sumando2=6); //EXPLICITAMOS LOS VALORES DE LOS PARAMETROS $sumando1 Y $sumando2

echo "con return ahora si se pueden mostrar los parametros El resultado de $sumando1 + $sumando2 = $resultado  <br />"; 
echo $resultado;
?>
</p>

</p>
<h3>Muy importante &iquest;usar return o echo?</h3>
<p>Veamos un ejemplo</p>
<?php 
function suma7($valor1, $valor2){
$suma = $valor1 + $valor2;
return $suma; //interesa devolver un valor que se usara despues. No interesa saber el resultado de este valor. Con echo no lo podemos hacer. En otros casos casi da lo mismo usar echo o return.
}
$suma=suma7(3,4);

$promedio=$suma/2;
echo "el promedio es ".$promedio;?>


<h3><br>      
  Return con if else
  <br>
</h3>
<p>
  <?php
function mayor($a, $b)
{
	if ($a > $b)
		return $a;
	else
		return $b;
}

$x=6;
$y=8;
$c = mayor($x,$y);
echo "\$x = $x <br>";
echo "\$y = $y <br>";
echo $c;
?>
  </p>
</p>
<h3>Calcula la superficie de un circulo<br>   
  <?php 
function circulo($r)
{
$superficie = 3.14 * $r * $r;
return ($superficie);	
}
$r = 2;
$resultado = circulo($r);
echo "$resultado";
?>         
  <br>

</h3>
<h3>   Calcula la semisuma de 2 numeros<br>
</h3>
  
<?PHP
function semisuma($a,$b)
{//Definición de la función semisuma
	$result=($a+$b)/2;
	return $result; // La función devuelve la semisuma de $a y $b
}
$a=3;
$b=13;
$semi=semisuma($a,$b);/*Llamada a la función semisuma. 
El valor devuelto por la función se almacena en la variable $semi*/ 
echo("La semisuma de $a y $b es: ".$semi);
?> 

<p>
  
  
<p>Para declara una funcion debemos utilizar la instrucción function seguido del nombre que le vamos a dar, y después entre parentesis la lista de argumentos separados por comas, aunque también habrá funciones que no recogan ningún argumento.
  function nombre_de_funcion (arg_1, arg_2, ..., arg_n) 
  {
  bloque de código
  }
  Cualquier instrucción válida de PHP puede aparecer en el cuerpo (lo que antes hemos llamado bloque de código) de una función, incluso otras funciones y definiciones de clases.
  En PHP no podemos redefinir una función previamente declarada, y además en PHP3, las funciones deben definirse siempre antes de que se invoquen, en PHP4 este requerimiento ya no existe. 
  La instrucción RETURN
  Cuando invocamos una función, la ejecución del programa pasa a ejecutar las líneas de código que contenga la función, y una vez terminado, el programa continua su ejecución desde el punto en que fué llamada la función.
  Existe una manera de terminar la ejecución de la función aunque aún haya código por ejecutar, mediante el uso de la instrución return terminamos la ejecución del código de una función y devolvemos un valor. Podemos tener varios return en nuestra función, pero por lo general, cuantos más return tengamos menos reutilizable será nuestra función.
  <br />

  <?php

function mayor1($x, $y)
{
if ($x > $y) 
{
return "\$x = $x es el mayor";
} 
else 
{
return "\$y = $y es el mayor";
}
}
$x=500;
$y=100;
$ax = mayor1($x, $y);
echo "$x<br>";
echo "$y<br>";
echo "$ax<br>";
?>
</p>

  <p>  Con la instrución return puede devolverse cualquier tipo de valor, incluyendo tablas y objetos.  <br />
    PHP solo permite a las funciones devolver un valor, y para solventar este pequeño problema, si queremos que nuestra función devuelva varios tenemos que utilizar una tabla (array). 
  
</p>


<h3>Parámetros de las funciones</h3>
Existen dos formas de pasar los parámetros a una función, por valor o por referencia.
Cuando pasamos una variable por valor a una funcion, ocurra lo que ocurra en ésta en nada modificará el contenido de la variable. 
Mientras que si lo hacemos por referencia, cualquier cambio acontecido en la función sobre la variable lo hará para siempre.
En PHP, por defecto, las variables se pasan por valor. Para hacerlo por referencia debemos anteponer un ampersand (&) a la variable.
<br />
<?php
function suma4($x, $y)
{
$x = $x + 1;
return $x+$y;
}
$a = 1;
$b = 2;
?> 
La variable se pasa por valor imprimirá 4 en la linea siguiente:<br>
<?php
echo suma4($a, $b)."<br>";    // 
//la variable conserva en valor primitivo, aun cuando cambio dentro de la funcion.
echo "\$a = $a<br>";    // imprimirá 1
 
echo "la variable se pasa por referencia <br>";
echo suma4(&$a, $b)."<br>";    // imprimirá 4
echo "La variable no conserva el valor, sino que toma en valor resultante de operaciones dentro de la funcion. Ahora resulta \$a = $a<br>";      //imprimirá 2
?>
</p>
<!--Warning: Call-time pass-by-reference has been deprecated; If you would like to pass it by reference, modify the declaration of suma(). If you would like to enable call-time pass-by-reference, you can set allow_call_time_pass_reference to true in your INI file in D:\wamp\www\elementales\funciones_resumen.php on line 130-->

<p>Si queremos que un parámetro de una función se pase siempre por referencia debemos anteponer un ampersand (&) al nombre del parámetro en la definición <br />
</p>
<p>Valores por defecto para los parámetro de una función  
  En PHP podemos definir valores por defecto para los parámetro de una función. Estos valores tienen que ser una expresión constante, y no una variable o miembro de una clase. Además cuando usamos parámetros por defectos, éstos deben estar a la derecha de cualquier parámetro sin valor por defecto, de otra forma PHP nos devolverá un error.</p>
<p>
  <?php /*?><!--<?php
function suma ($x=1, $y)
{
$x = $x + 1;
return $x+$y;
}
?>--><?php */?>
</p>
<p> Si ejecutarmos esta función nos daría error, ya que hemos dado a $x el valor 1 por defecto y la hemos colocado a la izquierda de un parámetro que no tiene valor por defecto. La forma correcta es:<br />
  <?php
function suma6($yy, $xx=1)
{
$xx = $xx + 1;
return $xx+$yy;
}

echo suma6($yy, $xx=1)."<br>";
echo "Ahora asignamos a $yy el valor 100 <br>";
$yy=100;
echo suma6($yy, $xx=1);
 ?> 



</body>
</html>