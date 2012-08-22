<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Documento sin título</title>
</head>

<body>


<?php
	echo 'Cuenta los caracteres de una cadena = '.strlen("12345"),"<br>";
	
	
	//substr(cadena,comienzo,longitud)
	$nuevaCadena = substr("Devuelve una subcadena de otra",9,3);
	
	echo '$nuevaCadena = '.$nuevaCadena;
	
	echo '<p>';

		
	echo '<p>';
	$tiny = '<img src="../img_tiny_mce/Invierno_1.jpg" alt="" width="400" height="300" />';
	echo '$tiny = '. $tiny.'<p>';
	
	echo '<p>';
	$nuevaCadena = substr("<img src=\"../img_tiny_mce/Invierno_1.jpg\"",10);
	echo '<p>';
	echo '$nuevaCadena = '.$nuevaCadena;
	
		echo '<p>';
	$nuevaCadena = substr("'<img src=\"../img_tiny_mce/Invierno_1.jpg\" alt=\"\" width=\"400\" height=\"300\" />'",10);
	echo '<p>';
	echo '$nuevaCadena = '.$nuevaCadena;
	$armada = '\'<img src=\"'.$nuevaCadena;
	echo '<p>';
	
	echo '$armada'.$armada;
	
?>






</body>
</html>