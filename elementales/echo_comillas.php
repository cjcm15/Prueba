<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin título</title>
</head>

<body>

<p>
Comillas simples. Las variables se escriben como texto.
<br />
Comillas dobles. Las variables imprimen su valor
<br />
<?php 
$numero = 15; //no se usan comillas
$cadena = ' (1) este es el contenido de la variable cadena<br>'; //String deben usarse comillas simples o dobles
$cadena = "  (2) este es el contenido de la variable cadena <br>"; //String deben usarse comillas simples o dobles
echo "<p>";
echo "(3)" . $numero . $cadena."<br>"; //SIN COMILLAS imprime el contenido de la variable. DEBE USARLE EN OPERADOR DE CONCATENACION .
echo '(4) $numero $cadena . <br>';  //COMILLAS SIEMPLES imprime el nombre de la variable.
echo "<p>";
echo " (5) $numero $cadena <br>"; //COMILLAS DOBLES imprime el contenido de la variable. NO DEBE USARLE EN OPERADOR DE CONCATENACION .

?>

<br />





  <?php
echo 'esta es una cadena simple'.'<br>';

echo 'Estos saltos de línea embebidos
en las cadenas de esta forma,
NO SON VALIDOS'.'<br>';
echo "<p>";

echo "Si utilizamos nl2br los break de html actuan en PHP como saltos de linea";
echo "<br>";
echo nl2br ("Puede tener saltos
		   	de línea embebidos
			en las cadenas de
			esta forma, ya que
			es válido");

echo "<p>";

echo 'Puede tener saltos' .'<br>'.'de línea embebidos'.'<br>'.
'en las cadenas de esta forma, ya que'.'<br>'.
'es válido'.'<br>';
echo "<p>";
echo "<p>";
echo "<p>";
// Imprime: Arnold dijo una vez: "I'll be back"
echo 'Arnold dijo una vez: "I\'ll be back"'.'<br>';

// Imprime: Ha eliminado C:\*.*?
echo 'Ha eliminado C:\\*.*?'.'<br>';

// Imprime: Ha eliminado C:\*.*?
echo 'Ha eliminado C:\*.*?'.'<br>';

// Imprime: Esto no va a expandirse: \n una nueva línea
echo 'Esto no va a expandirse: \n una nueva línea'.'<br>';

echo 'Esto no va a expandirse: \n una nueva línea'.'<br>';

// Imprime: Esto no va a expandirse: \n una nueva línea. Las comillas dobles no se pueden
//reemplazar por simples
echo nl2br ("Esto se va a expandirse: \n a una nueva línea")."<br>";

// Imprime: Las variables no se $expanden $tampoco
echo 'Las variables no se $expanden $tampoco'.'<br>';
?>
</p>
<p>

  <?php
echo "Ejemplo con salto. <br>";
echo "segunda linea.";
echo "____________________________";
echo "Ejemplo con salto. <br> \n";
echo "segunda linea.";
?>
</p>

<?php
//esto no funciona
echo 'linea 1\n';
echo 'linea 2';
echo "linea 1\n";
echo "linea 2";
echo 'linea 1'.'\n'.'linea 2';
?>
<?php
echo "<br>";
?>

Aqui deberia haber un salto de linea
<?php
echo "<br>";
echo nl2br("esto es una\nprueba");
    echo "<br>";

?>
<?php
echo nl2br("esto es una\nprueba");
?>
<br />
<?php
$texto = ssssssssssssssss;

echo "$texto";
?>
   <br />
Manual oficial
  <br />
<?php
 $saludo = "que tal";
$despedida = "hasta luego";

echo "hola, $saludo"; // hola, que tal
?>
   <br />
<?php
echo 'Esta ', 'cadena ', 'esta ', 'construida ', 'con muchos parametros.', chr(10);
echo 'Esta ' . 'cadena ' . 'esta ' . 'construida ' . 'empleando concatenacion.' . "\n";
echo "<br>";
echo "si quieres servir documentos XHTML o XML, haz como aqu&iacute;\n";
//El \n genera un salto delínea pero dentro del código del archivo generado,
//lo cual permite una mejor legibilidd del código, pero si realmente queremos un salto de linea
//se debe usar  <br>

   echo "Carlos \n";
   echo "Carlos \r";
   echo "Carlos \n";

      echo "<br>Carlos <br>";
   echo "Carlos <br>";
   echo "Carlos <br>";



?>
</body>
</html>