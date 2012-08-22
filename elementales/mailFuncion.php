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





