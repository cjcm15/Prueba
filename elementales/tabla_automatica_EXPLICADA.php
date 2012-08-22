<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin título</title>
</head>

<body>

<p> $i%$columna  es el resto de la division entre $i y $columna, es decir $i dividido $columna.
<p> Si la division es exacta el resto es igual a cero. En el arranque $i es cero y se envia un &lt;tr&gt;, luego envia  una cantidad de &lt;td&gt; y &lt;/td&gt;

en funcion de la cantidad de columnas y finalmente envia un tr para cerrar la fila </p>

<table border="1" cellpadding="10" bordercolor="#003399">
<?php
$i = 0;
$columna = 5; //Cantidad de comunas que tendra la tabla
do {
if ($i%$columna==0)   

/*  $i%$columna  es el resto de la division entre $i y $columna, es decir $i dividido $columna
Si la division es exacta el resto es igual a cero. En el arranque $i es cero y se envia un tr, luego envia  una cantidad de <td> y </td> en funcion de la cantidad de columnas y luego envia un tr para cerrar la fila*/


{?>
<tr width="50">
<?php }?>

			<td>
					<?php echo "Celda $i <br />";
					
					echo "Columna $columna <br />";
					
					$cociente = $i / $columna;
					
					echo "Cociente  $cociente <br />";
					
					$resto = $i%$columna;
					
					echo "RESTO  $resto ";
					
					?>&nbsp;
                    
                    
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




</body>
</html>