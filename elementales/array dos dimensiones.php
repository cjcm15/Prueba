<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Documento sin título</title>
</head>

<body>

<?php 
// Definimos un array con solo cargar los valores. Los indices pueden ser numeros.
$pruebaNuevo['Lunes'] ['desayuno'] = '<br> Cafe <br>';
$pruebaNuevo['Lunes'] ['almuerzo'] = '<br> Pastas <br>';
$pruebaNuevo['Martes'] ['desayuno'] = '<br> Cafe Martes <br>';
$pruebaNuevo['Martes'] ['almuerzo'] = '<br> Pastas Martes <br>';
$pruebaNuevo[] = '<br> Elemento 2';

echo 'Primer elemento'.$pruebaNuevo['Lunes'] ['desayuno'];
echo 'Segundo elemento'.$pruebaNuevo['Lunes'] ['almuerzo'];

echo "<p>&nbsp;</p>";

echo 'Primer elemento'.$pruebaNuevo['Martes'] ['desayuno'];
echo 'Segundo elemento'.$pruebaNuevo['Martes'] ['almuerzo'];
echo "<p>&nbsp;</p>";


$arr = array('Lunes' => array('desayuno' => 'Cafe', 'almuerzo' => 'Pastas'));

echo $arr['Lunes']['desayuno'];  

echo "<br>&nbsp;</br>";
echo $arr['Lunes']['almuerzo'];


$arr2 = array
('Lunes' => array
	('desayuno' => 'Cafe', 'almuerzo' => 'Pastas'
	),
	'Martes' => array
	('Cafe', 'almuerzo' => 'Pastas Martes')
	);

echo $arr2['Lunes']['desayuno'];  

echo "<br>&nbsp;</br>";
echo $arr2['Martes']['almuerzo'];

echo "<br>&nbsp;</br>";
//Otro ejemplo igual al anterior
$pais=array
(
"espana" =>array
   (
   "nombre"=>"España",
   "lengua"=>"Castellano",
   "moneda"=>"Peseta"
   ),
"francia" =>array
   (
   "nombre"=>"Francia",
   "lengua"=>"Francés",
   "moneda"=>"Franco"
   )
);
echo $pais["espana"]["moneda"]; //Saca en pantalla: "Peseta"


echo "<br>&nbsp;</br>";

//CON IDICES NUMERICOS

$pruebaNuevo[1] [1] = '<br> Cafe <br>';
$pruebaNuevo[1] [2] = '<br> Pastas <br>';
$pruebaNuevo[2] [1] = '<br> Cafe Martes <br>';
$pruebaNuevo[2] [2] = '<br> Pastas Martes <br>';

echo $pruebaNuevo['1'] ['1'] ;

echo $pruebaNuevo['2'] ['2']








?>


</body>
</html>