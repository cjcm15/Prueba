<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="cjcm151515" />

	<title>Sin título 2</title>
</head>

<body>

<?php

$destino = "cjcm15@yahoo.com.ar";
$asunto = "Prueba envio mail php";
$cuerpo = "Esto en una prueba de envio desde Rostravel.";
$cabeceras = "Content-type: text/html";
//en alguns servidores se necesita la siguiente linea de codigo
ini_set(sendmail_from, 'info@rostravel.com.ar'); //el mail debe ser uno registrado en el sitio

mail($destino, $asunto, $cuerpo, $cabeceras);

echo "Se ha enviado el mensaje correctamente";
?>  





</body>
</html>