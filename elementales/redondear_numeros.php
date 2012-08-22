<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin título</title>


<?php

$numero = 1.1254784125417;
echo number_format($numero,2,',','.');
?>

</head>

<body>


 


  <?php 
 
//Ejemplos vaios
echo('<br />');
$numero = 1.1254784125417;
echo number_format($numero,2,',','.');
echo('<br />');
$numero = 3.56666;
echo number_format($numero,2,',','.');
echo('<br />');
$numero = 3.008;
echo number_format($numero,2,',','.');
echo('<br />');
$numero = 3.66;
echo number_format($numero,2,',','.');
echo('<br />');
$numero = 3.199;
echo number_format($numero,2,',','.');
echo('<br />');
$numero = 3.9999;
echo number_format($numero,2,',','.');
?>

<h1>Los numeros redondeados no se pueden usar para calculos matematicos</h1>

<?php
$stop_loss = 14.563289;
 echo '$stop_loss = '.$stop_loss;

echo('<p>&nbsp;</p>');
$stop_loss_redondeado = number_format($stop_loss,2,',','.');
echo('$stop_loss_redondeado = '. $stop_loss_redondeado);

echo('<p>&nbsp;</p>');
$operacion_con_valor_redondeado = 2 * $stop_loss_redondeado;

echo 'operacion_con_valor_redondeado = '.$operacion_con_valor_redondeado;


echo('<p>&nbsp;</p>');

$operacion_con_valor_NO_redondeado = 2 * $stop_loss;

echo 'operacion_con_valor_NO_redondeado = '.$operacion_con_valor_NO_redondeado;
echo('<p>&nbsp;</p>');
$numero = 1235326.235612541;
$numero_redondeado = number_format($numero,2,',','.');
echo 'numero_redondeado = '.$numero_redondeado;
?>



</body>
</html>