<?php
echo "Hola Mundo";
echo "<br>";
echo "Este texto se extiende\n
por varias lineas. Los saltos de linea\n
tambien se envian"; // Se imprime en una sola linea pero en el codigo html aparece en varias lineas

echo "<p>******************************************<p>";

echo "Este texto se extiende" . "<br>" .
"por varias lineas. Los saltos de linea" . "<br>" .
"tambien se envian"; // Se imprime en varias  lineas de acuerdo a los <br> que se han utilizado


echo "<br>";
echo "Este texto se extiende\npor varias lineas. Los saltos de linea\ntambien se envian.";
echo "<br>";
echo "Para escapar caracteres, se debe indicar \"de esta forma\".";
echo "<br>";
// Se pueden usar variables dentro de una sentencia echo
$saludo = "que tal";
$despedida = "hasta luego";
echo "<br>";
echo "hola, $saludo"; // hola, que tal
echo "<br>";
// Tambien se pueden usar arrays
$cadena = array("valor" => "saludo desde un array");

echo "Esto es un {$cadena['valor']} "; // Esto es un saludo desde un array

// Si se emplean comillas simples, se muestra el nombre de la variable, no su valor
echo 'hola, $saludo'; // hola, $saludo
echo "<br>";
// Si no se anade ningun caracter, tambien es posible emplear echo para mostrar el valor de las variables
echo $saludo; // que tal
echo $saludo,$despedida; // que talhasta luego
echo "<br>";
// El uso de echo con multiples parametros es igual que realizar una concatenacion
echo 'Esta ', 'cadena ', 'esta ', 'construida ', 'con muchos parametros.', chr(10);
echo 'Esta ' . 'cadena ' . 'esta ' . 'construida ' . 'empleando concatenacion.' . "\n";
echo "<br>";
echo <<<FIN
Este texto utiliza una sintaxis especial que
permite mostrar varias lineas de texto.
La etiqueta que indica el final del bloque de texto
(y que en este caso es "FIN") debe aparecer en una
linea que contenga solamente el valor de la etiqueta
y un caracter de punto y coma (ni siquiera puede
contener espacios en blanco).
FIN;
echo "<br>";
// Como echo no es una funcion, el siguiente codigo no es valido
//  ($una_variable) ? echo 'verdadero' : echo 'falso';
echo "<br>";
// Sin embargo, los siguientes ejemplos si que funcionan.
$una_variable = true;

echo "<br>";

($una_variable) ? print('verdadero'): print('falso'); // print es una funcion

echo "<br>";
$una_variable = false;
echo $una_variable ? 'verdadero': 'falso'; // se modifica la sentencia a mostrar en funcion del valor de $una_variable
?>