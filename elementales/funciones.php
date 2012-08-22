
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
{//Definición de la función semisuma
	$result=($a+$b)/2;
	return $result; // La función devuelve la semisuma de $a y $b
}
?>
AQUI TERMINA EL HEAD
</head>
<body>
<p>Las funciones deben ser colocadas siempre antes de realizar la llamada a la función (como es lógico). La sintaxis de una función es la siguiente: 
  
  function nombre(parámetros)
  { 
  instrucciones de la función
  } 
  
  para llamar a la función sería de la siguiente forma: 
  nombre(parámetros)
  
  Un ejemplo para entender el uso de funciones es el siguiente: 
Crearemos una función que realice la suma de dos números y muestre el resultado</p>
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
<p>Un hecho relevante que cabe destacar es que las variables que declaremos dentro de la función solo existirán o tendrán dicho valor dentro de la función. 
 
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
$semi=semisuma($a,$b);/*Llamada a la función semisuma. 
El valor devuelto por la función se almacena en la variable $semi*/ 
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
function cafe($tipo="cappucino") /*El valor por defecto del parámetro $tipo es cappucino*/
{
return "Haciendo una taza de $tipo.<br>";
}
echo cafe();/*Llamada a la función sin parámetro. El parámetro tomará su valor por defecto: cappucino*/ 
echo cafe("espresso");//El parámetro tomará el valor espresso
?>
  
  
<p>
  <?PHP
function cafe1($temp,$tipo="con leche") 
{
return "Haciendo café $tipo $temp.<br>";
}
echo cafe1("caliente"); //Escribe: 'Haciendo café con leche caliente'
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
   
<p>Un ejemplo simple de una función sin parámetros:

  <br>
  <?php 
function TradicionalHolaMundo (){ 
echo "hola mundo"; 
} 
TradicionalHolaMundo(); // que sorpresa ! imprime "hola mundo" 
?> 
  
<p>Por lo general puedes usar tu nueva función antes o despues de crearla:
    El código de la función es leido al cargar la página el interprete PHP, pero no es ejecutado hasta que la función no es llamada. No existe tampoco inconveniente en que mantengas las definiciones de tus funciones en un archivo aparte, llamado en tu script mediante require o include
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