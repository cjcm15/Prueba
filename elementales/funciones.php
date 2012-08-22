
<html>
<title>ejemplo_variables.funcion.php3</title>
<head>
ESTO ESTA EN EL HEAD<p>
las funciones las puse en la cabecera y en el body llame a las funciones, que es lo normal, aun cuando tambien funciona cuando la funcion y la llamada estan en el body uno a continuacion del otro.
<p>
<?php
function mayor($a, $b)
{
	if ($a > $b)
		return $a;
	else
		return $b;
}
?>
Calcula la superficie de un circulo<br>
<?php 
function circulo($r)
{
$superficie = 3.14 * $r * $r;
return ($superficie);	
}
?>
CaLcula la semisuma de 2 numeros<br>
<?PHP
function semisuma($a,$b)
{//Definici�n de la funci�n semisuma
	$result=($a+$b)/2;
	return $result; // La funci�n devuelve la semisuma de $a y $b
}
?>
AQUI TERMINA EL HEAD
</head>
<body>
<p>Las funciones deben ser colocadas siempre antes de realizar la llamada a la funci�n (como es l�gico). La sintaxis de una funci�n es la siguiente: 
  
  function nombre(par�metros)
  { 
  instrucciones de la funci�n
  } 
  
  para llamar a la funci�n ser�a de la siguiente forma: 
  nombre(par�metros)
  
  Un ejemplo para entender el uso de funciones es el siguiente: 
Crearemos una funci�n que realice la suma de dos n�meros y muestre el resultado</p>
<p>
  <?php function sumar($sumando1, $sumando2)
{ 
  $suma = ($sumando1 + $sumando2);
  return $suma;
} 
$resultado = sumar(5,6); //podemos poner directamente los parametro pero en este caso no se asignan valores a las varialbles $sumando1 + $sumando2
echo "El resultado de \$sumando1 + \$sumando2 = $resultado </p>"; 
echo 'El resultado de $sumando1 + $sumando2 = $resultado </p>'; 
echo 'El resultado de $sumando1 + $sumando2 = '.$resultado. '</p>'; 
?>
  
</p>
<p>Un hecho relevante que cabe destacar es que las variables que declaremos dentro de la funci�n solo existir�n o tendr�n dicho valor dentro de la funci�n. 
 
<p>
  <?php function sumar1($sumando1, $sumando2) //el nombre de la funcion no puede ser sumar 
{ 
  $suma1 = ($sumando1 + $sumando2);
  return $suma1;
} 
$sumando1 = 12;
$sumando2 = 6;
$resultado = sumar1($sumando1, $sumando2); //en este caso logicamente las variables toman los valores definidos
echo "El resultado de $sumando1 + $sumando2 = $resultado"; 
?>
  
</p>
  
  <p>
  <?php function sumar2($sumando1, $sumando2) //el nombre de la funcion no puede ser sumar1 
{ 
  $suma1 = ($sumando1 + $sumando2);
  return $suma1;
} 
$sumando1 = 5;
$sumando2 = 6;
$resultado = sumar2($sumando1, $sumando2); //en este caso logicamente las variables toman los valores definidos
echo "El resultado de $sumando1 + $sumando2 = $resultado"; 
?>
  
</p>
  
   
  
</p>
<p>
Esto esta en el body<br>
<?php
$x=6;
$y=8;
$c=mayor($x,$y);
echo "\$x = $x <br>";
echo "\$y = $y <br>";
echo $c;
?>
<br>
Calcula la superficie de un circulo<br>
<?php 
$r = 2;
$resultado = circulo($r);
echo "$resultado";
?>
<br>
Calcula la semisuma de 2 numeros<br>
<?PHP
$a=3;
$b=13;
$semi=semisuma($a,$b);/*Llamada a la funci�n semisuma. 
El valor devuelto por la funci�n se almacena en la variable $semi*/ 
echo("La semisuma de $a y $b es: ".$semi);
?>
<p>

En el ejemplo siguiente, la funcion y la llamada estan en el body

<?PHP
function calcular_Cuadrado($numero) 
{
       $calculo2 = $numero * $numero;
       return $calculo2;
}
function calcular_Cubo($numero) 
{
       $calculo3 = $numero * $numero * $numero;
       return $calculo3;
}
echo "<p>";
echo "Aqui comienza la parte que llama a la funcion para efectuar los calculos<br/>";
$numero2 = calcular_Cuadrado(20);
echo "El cuadrado de 20 es: $numero2 <br/>";
$numero3 = calcular_Cubo(20);
echo "El cubo de 20 es: $numero3<br/>";
?>
<p>
Parametros por defecto.
<p>
  <?PHP
function cafe($tipo="cappucino") /*El valor por defecto del par�metro $tipo es cappucino*/
{
return "Haciendo una taza de $tipo.<br>";
}
echo cafe();/*Llamada a la funci�n sin par�metro. El par�metro tomar� su valor por defecto: cappucino*/ 
echo cafe("espresso");//El par�metro tomar� el valor espresso
?>
  
  
<p>
  <?PHP
function cafe1($temp,$tipo="con leche") 
{
return "Haciendo caf� $tipo $temp.<br>";
}
echo cafe1("caliente"); //Escribe: 'Haciendo caf� con leche caliente'
?>
    
<p>


  <?php
   $ciudad  = "Granada";
    function miCiudad(){
        global $ciudad;
         mostrarCiudad($ciudad);
    }

    function mostrarCiudad($nombre){
        echo "La ciudad seleccionada es :".$nombre."<br>";
    }

    function OtraCiudad(){
        $ciudad = "Sevilla";
        mostrarCiudad($ciudad);
    }

     miCiudad();
     OtraCiudad();
?>
   
<p>Un ejemplo simple de una funci�n sin par�metros:

  <br>
  <?php 
function TradicionalHolaMundo (){ 
echo "hola mundo"; 
} 
TradicionalHolaMundo(); // que sorpresa ! imprime "hola mundo" 
?> 
  
<p>Por lo general puedes usar tu nueva funci�n antes o despues de crearla:
    El c�digo de la funci�n es leido al cargar la p�gina el interprete PHP, pero no es ejecutado hasta que la funci�n no es llamada. No existe tampoco inconveniente en que mantengas las definiciones de tus funciones en un archivo aparte, llamado en tu script mediante require o include
    <br>
<?php 
TradicionalHolaMundo1();  // aqui tambien le agregamos 1 al nombre de la funcion anterior
function TradicionalHolaMundo1 (){ 
echo "hola mundo nuevamente"; 
} 
?> 
<p>  No existe tampoco inconveniente en que mantengas las definiciones de tus funciones en un archivo aparte, llamado en tu script mediante require o include<br>
<?php include_once("funciones/calcular_cuadrado.php");  
$numero2 = calcular_Cuadrado1(20);
echo "El cuadrado de 20 es: $numero2 <br/>";   
?>   
    
</body>
</html>	