<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin título</title>
</head>

<body>

<?php 
// Definimos un array con solo cargar los valores
//No es necesario identificar con un numero de indice. El indice se genera auto comenzando por el cero
$pruebaNuevo[] = '<br> Elemento 0';
$pruebaNuevo[] = '<br> Elemento 1';
$pruebaNuevo[] = '<br> Elemento 2';

//para mostrar todos los valores de un array
for($i=0;$i<count($pruebaNuevo);$i++){
	echo $pruebaNuevo[$i];
	}
	
echo "<p>&nbsp;</p>";	
//Puede ser necesario identificar con un numero de indice
$pruebaNuevo[3] = '<br> Elemento 3';
$pruebaNuevo[24] = '<br> Elemento 24';
$pruebaNuevo[10] = '<br> Elemento 10';
$pruebaNuevo[14] = '<br> Elemento 14';
echo $pruebaNuevo[3];
echo $pruebaNuevo[14];
echo $pruebaNuevo[24];
echo $pruebaNuevo[10];
echo "<p>&nbsp;</p>";


$prueba[1] = 'primer elemento del array identificado con 1';
echo $prueba[1];

echo "<p>&nbsp;</p>";

$prueba[0] = 'primer elemento del array identificado con 0';
echo $prueba[0];

echo "<p>&nbsp;</p>";

//ahora usamos la funcion array, creamos el array y asignarle valores
//Primera posicion corresponde a indice cero
$prueba = array('Primera posicion corresponde a indice cero <br> ', 14, 28); 
$suma = $prueba[1] + $prueba[2];
echo $prueba[0];
echo 'Resultado de la suma = ' . $suma;

echo "<p>&nbsp;</p>";
// podemos hacer que el indice no empiece desde cero
$prueba = array(1 => 'Primera posicion corresponde a indice uno <br>', 14, 28); 
$suma = $prueba[2] + $prueba[3];
echo $prueba[1];
echo '<br>' . 'Resultado de la suma = ' . $suma;


echo '<h3>Funciona igual con comillas dobles que simples, pero conviene usar comillas simples</h3>';

//podemos usar identificadores alfa numericos

$nuevo['a'] = 'Otra forma de defimir un array con identificador alfanumerico a </br>';
$nuevo['axz28'] = 'Otra forma de defimir un array con identificador alfanumerico axz28 </br> ';

echo $nuevo['a'];
echo $nuevo['axz28'];
echo"<br></br>";

//en un array podemos cargar una serie de valores alfanumericos

$alfanumerico[] = '(128, Cadena de texto, 12.58)';
$alfanumerico[] = '(Otra cadena, 1200, 12.58)';
//$alfanumerico[] = ('Google', 'http://www.google.com', '#C3D9FF'); //Esto no anda
echo 'Array alfanumerio 1 = '.$alfanumerico[0];
echo"<br></br>";
echo 'Array alfanumerio 2 = '.$alfanumerico[1];
echo"<br></br>";
$ArrayPrueba = array('a' => 'Blanco', "b"=> "azul"); /*Aqui cargamos el array*/

echo "<h3> Extraemos los valores del array </h3>";

echo "<p>";
echo $ArrayPrueba["a"]; 
echo "<p>"; 
echo $ArrayPrueba["b"];
echo "<p>"; 



echo "<h3> En un array puede incluirse una variable </h3>";
$var1 = "blanco";
$ArrayPrueba = array("a"=> $var1, "b"=> "azul");
echo "<p>"; 
echo $ArrayPrueba["a"];

echo "<p>"; 




?>
</body>
</html>