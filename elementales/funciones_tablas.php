<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>

<?php 
function tabla()
{
	echo 
	'<table width="200" border="1">
	  <tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	  </tr>
		<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	  </tr>
	</table>';
}
?>
<p>Tabla</p>
<?php tabla();?>
<p>Tabla</p>


<p>Tabla 2</p>
<?php tabla2(3, 7)?>
<p>Tabla 2</p>

<?php 
function tabla2($i, $k) //i cantidad de columnas  k cantidad de filas
{
	echo '<table width="200" border="1">';
	 while (@$d < $k)
		{
			echo '<tr>';
						$j=0;
						  while ($j < $i)
						  {
							echo '<td>&nbsp;</td>';
							$j++;
						  }
			echo '</tr>';
			@$d++;
		}
	echo '</table>';
}
?>
<p>Tabla 2</p>
<?php tabla2(5, 7)?>
<p>Tabla 2</p>

<?php 
function tabla1($i)
{
echo '<table width="200" border="1"><tr>';
$j=0;
  while ($j < $i)
	{
		echo '<td>&nbsp;</td>';
		$j++;
	}
  '</tr>
</table>';
}
?>
<p>Tabla 1</p>
<?php //tabla1(14);?>
<p>Tabla 1sssssssssss</p>


<?php 
function tabla3($i, $k) //i cantidad de columnas  k cantidad de filas
{
	echo '<table width="200" border="1">';
	echo '<tr><td colspan='.$i.'>&nbsp;</td></tr>';
	 while (@$d < $k)
		{
			
			echo '<tr>';
						$j=0;
						  while ($j < $i)
						  {
							echo '<td>&nbsp;</td>';
							$j++;
						  }
			echo '</tr>';
			@$d++;
		}
	echo '</table>';
}
?>
<p>Tabla 3</p>
<?php tabla3(5, 7)?>
<p>Tabla 3</p>



</body>
</html>
