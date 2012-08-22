<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin título</title>
</head>

<body>
<p>Con echo usar siempre comillas dobles (aun cuando parece que las simples tambien funcionan) </p>
<?php 
$a = "55 <br>"; // cuando se inicializa la variable si lleva el <br> se imprime sin necesidad de usar echo
// <br>; esto no funciona
$b = "144 <br>";
// echo "El resultado aparece arriba porque las variables incluyen <br> " . $a + $b; NO ANDA

echo "El resultado aparece arriba de las variables (no se porque) = " . ($a + $b). "<br>";


//echo variable $a. variable $b; Da error 
echo "variable \$a = $a variable \$b = $b";
?>
<br />
*************************************************** <br />
*************************************************** <br />
Esta es la forma de hacerlo <br />
<?php 
$a = 5; //sin comillas, con comillas dobles o simples da lo misno. No debe llevar <br>
// <br>; esto no funciona
$b = 14;
echo "imprime 514 " . "$a" . "$b" ."<br>"; //imprime 514. Si falta el . da error.
//echo variable $a. variable $b; Da error 
echo "variable \$a = $a variable \$b = $b <br>";

echo "variable \$a = " . $a . "<br>"; //debe llevar el operador de concatenacion .

echo "variable \$b = " . $b . "<br>";

echo "suma1 $a + $b = " ;

echo  $a + $b . "<br>";

echo "suma2 $a + $b = " . ($a + $b) ."<br>"; //Debe llevar parentesis

$suma = $a + $b;

echo "suma3 = " . $suma . "<br>";

// Si se emplean comillas simples, se muestra el nombre de la variable, no su valor
echo 'hola, $saludo'; // hola, $saludo
?>
</body>
</html>