<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin título</title>
</head>

<body>
Separ una cadena generando un array
<?php

    $email = explode("@","usuario@email.dom");

    echo "<br>$email[0]<br>"; // Imprime "usuario"
    echo "$email[1]<br>"; // Imprime "email.dom"

?>
<p>
Separar una cadena asignado los valores a distintas variable
<?php
    $fecha = "12-01-2005";
    list($dia,$mes,$anyo) = explode("-",$fecha);
    echo "<br>\$dia = $dia<br>"; // Imprime 12
    echo "\$mes = $mes<br>"; // Imprime 01
    echo "\$año = $anyo<br>"; // Imprime 2005
?>

</body>
</html>