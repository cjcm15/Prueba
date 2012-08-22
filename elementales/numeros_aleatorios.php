<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Documento sin título</title>
</head>

<body>


<?php //Numero aleatorio entre 50 y 100
$numero = rand(50,100);
echo "El numero aleatorio es: $numero";

echo "<p>&nbsp;</p>";
$i = 1;
do {
    $i = $i + 1;
$numero = rand(50,100);
echo "El numero aleatorio es: $numero </br>";
} while ($i < 7);
?>





</body>
</html>