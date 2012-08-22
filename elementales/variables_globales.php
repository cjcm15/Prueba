<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin título</title>
</head>

<body>

Variables globales

<?php

$i=5;
$j=10;


if (empty($i))
	$i="valor inicial de \$i";
	
if (empty($j))
	$j="valor inicial de \$j";
	
echo "\$i vale ' $i '<br>";
echo "\$j vale ' $j '<br>";

$i="nuevo valor de \$i ";
$j="nuevo valor de \$j ";

echo $GLOBALS['i'];;

echo "<br>";
?>

<a href="variables_globales.php">Recargar</a>

</body>
</html>