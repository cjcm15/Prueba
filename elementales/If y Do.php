<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin título</title>
</head>

<body>

<p>
  <?php
/*if (condición)
{
Instrucción 1;
Instrucción 2;
...
}
else
{
Instrucción A;
Instrucción B;
...
} */
?>
</p>
<p>
  <?php $a = 4; ?>

</p>
<p>
  <?php if ($a == 2) {
    echo "\$a es igual a 2 ";
}
?>
aqui sigue el codigo html
<p>

  <?php if ($a == 2) {
    echo "\$a es igual a 2 ";
}
?>
<p> aqui sigue el codigo html



</p>
<p>
  <?php
if ($a == 2) {
    echo "\$a es igual a 2";
} else {
    echo "como \$a = 4 sale esto <p>";
    echo "\$a NO es igual a 2";
}
?>
</p>

<p>

<?php
/*while (condición)
{
sentencias a ejecutar
}*/
?>
<p>
while<p>
<?php

$b = 1;

while ($b < 5) {
    /* echo "Variable b =".$b; lo de abajo en mas facil de escribir*/
    echo "Variable b = $b <br>";
    $b = $b + 1;
}


?>

   <p>
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
<p>
do
  <?php
$i = 1;
do {
    $i = $i + 1;
    if ($i % 2 == 0) {
        /*echo " tr apertura = ". $i;   */
        echo " tr apertura = $i";
    }

    echo " td " . $i;

    if ($i % 2 == 0) {
        /*echo " tr cierre = ". $i;*/
        echo " tr cierre = $i";
    }

} while ($i < 7);
?>

</p>


Imprime COLUMNA 5 veces
<br>
<?php
$b = 0;
while ($b < 5) {
    echo "COLUMNA <br>";
    $b = $b + 1;
}
?>

<p>
  <?php $brush_price = 5;
$counter = 10;

echo "<table border=\"1\" align=\"center\">";
echo "<tr><th>Quantity</th>";
echo "<th>Price</th></tr>";
while ($counter <= 100) {
    echo "<tr><td>";
    echo $counter;
    echo "</td><td>";
    echo $brush_price * $counter;
    echo "</td></tr>";
    $counter = $counter + 10;
}
echo "</table>"; ?>

</p>
<p>Ver si un numero es par
<p>
  <?php
$numero = 55; //Pueden poner lo que quieran, incluso una variable traida desde un formulario
/* Php utiliza el operador % para calcular el resto de una división. En este caso, lo que realizamos es: Si $numero dividido 2, tiene resto 0...*/
if ($numero % 2 == 0) {
    echo $numero . " es par";
} //escribo Par
else //Sino


{
    echo $numero . " es impar";
} //Escribo impar



?>

   <?php
$numero = 54;
if ($numero % 2 == 0) {
    echo $numero . " es par";
} //escribo Par



?>

<p>
Otra prueba
<p>

<?php
$i = 0;
do {
    if ($i <> 4) {
        echo "Titulo $i<br>";
    }
    $i = $i + 1;
} while ($i <= 5);
?>

<?php if ($a > $b) {
    print "a es mayor que b";
} elseif ($a == $b) {
    print "a es igual que b";
} else {
    print "a es mayor que b<br>";
} ?>


<?php
$nombre_archivo = "custodia1";

if ($nombre_archivo == "index") {
    print "imagen1Over<br>";
    print "imagen1<br>";
    print "imagen1<br>";
    print "imagen1<br>";
} elseif ($nombre_archivo == "custodia") {
    print "imagen1<br>";
    print "imagen1Over<br>";
    print "imagen1<br>";
    print "imagen1<br>";
} elseif ($nombre_archivo == "custodia1") {
    print "imagen1<br>";
    print "imagen1<br>";
    print "imagen1Over<br>";
    print "imagen1<br>";

} else {
    print "imagen1<br>";
    print "imagen1<br>";
    print "imagen1<br>";
    print "imagen1Over<br>";
} ?>




</body>
</html>
</p>
