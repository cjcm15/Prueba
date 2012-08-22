<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin título</title>
</head>
<body>
<p>La informacion proveniente de la base de datos, se mostrara en una celda </p>

<table width="300" border="1" cellpadding="0" bordercolor="#003399">
<?php
$i = 0;
$columna = 5; //Cantidad de comunas que tendra la tabla
do {
if ($i%$columna==0)   

/*  $i%$columna  es el resto de la division entre $i y $columna, es decir $i dividido $columna
Si la division es exacta el resto es igual a cero. En el arranque $i es cero y se envia un tr, luego envia  una cantidad de <td> y </td> en funcion de la cantidad de columnas y luego envia un tr para cerrar la fila*/


{?>
<tr>
<?php }?>

			<td>
					<?php echo "Titulo $i";?>&nbsp;
			</td>

<?php $i=$i+1;?>
<?php
if ($i%$columna==0)
{?>
</tr>
<?php }?>
<?php
} while ($i<=11);
?>
</table>


<p>La informacion proveniente de la base de datos, se mostrara en una tabla</p>
<table width="300" border="1" cellpadding="0">
<?php
$i = 0;
$columna = 2; //Cantidad de comunas que tendra la tabla
do {
if ($i%$columna==0)
{?>
<tr>
<?php }?>
<td><table width="300" border="1" cellpadding="0">
  <tr>
    <td><?php echo "Titulo $i";?>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</td>
<?php $i=$i+1;?>
<?php
if ($i%$columna==0)
{?>
</tr>
<?php }?>
<?php
} while ($i<=11);
?>

<?php
echo "xxxxxxxxxxxxxxxxx1\n";
echo "xxxxxxxxxxxxxxxxxxx2\n";
echo "xxxxxxxxxxxxxxxxxxxxxxxx3\n";
?>

</table>

Resto de una operacion

<?php

$i=2;
$columna=3;
$resto = $i%$columna;   /*  $i%$columna  es el resto de la division entre $i y $columna, es decir $i dividido $columna*/
echo $resto;


?>







</body>
</html>



