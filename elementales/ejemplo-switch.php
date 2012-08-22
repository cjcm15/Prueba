<html>
<title>ejemplo.switch.php3</title>
<body>

<form action="ejemplo-switch.php" method="get" name="form1">
  <p>Control:
    <input name="control" type="text" value="12345">
  </p>
  <input name="enviar" type="submit" value="Enviar">
</form>
<p>Muestra lo que se ingresa en control: <?php echo $_GET['control']; ?><br>
  Cuando se cargar el formulario, lo que esta en control no se carga. Recien lo hace cuando damos Enviar.</p>
<p>&nbsp;</p>

<h3>Ejemplo utilizando un switch controlado por un n&uacute;mero que se ingresa en un formulario
</h3>
<form action="ejemplo-switch.php" method="get" name="form1">
<p>Control:
    <input name="controlX" type="text" value="1">
  </p>
  <input name="enviar" type="submit" value="Enviar">
</form>
<p>$b = <?php echo $_GET['controlX']; ?></p>
<p>Cuando se cargar el formulario,  se carga lo que esta en case 0.</p>
<p>
  <?php $b = $_GET['controlX'];?>
</p>
<p>
  <?php

switch($b)
{
	case 0:
		echo "Se ha generado un CERO<br>"; //cuando se carga el formulario aparece este caso
		break;
	case 1:
		echo "Se ha generado un UNO<br>";
		break;
	case 2:
		echo "Se ha generado un DOS<br>";
		break;
	case 3:
		echo "Se ha generado un TRES<br>";
		break;
	case 4:
		echo "Se ha generado un CUATRO<br>";
		break;
}

?>
</p>
<h3>Ahora usaremos un menu para controlar el switch</h3>
<p>
<form action="ejemplo-switch.php" method="get" name="formulario2">
<select name="controlM" size="1">
	<option value="0">Cero</option>
    <option value="1">Primero</option>
    <option value="2">Segundo</option>
  </select>
  <input name="enviarM" type="submit" value="EnviarM">
</form>

<p>$c = <?php echo $_GET['controlM']; ?></p>
</p>
<p>Cuando se cargar el formulario,  se carga lo que esta en case  0. </p>
<p>
  <?php $c = $_GET['controlM'];?>
</p>
<p>
  <?php
switch($c)
{
	case 0:
		echo "Se ha generado un CERO<br>"; //cuando se carga el formulario aparece este caso
		break;
	case 1:
		echo "Se ha generado un UNO<br>";
		break;
	case 2:
		echo "Se ha generado un DOS<br>";
		break;
	case 3:
		echo "Se ha generado un TRES<br>";
		break;
	case 4:
		echo "Se ha generado un CUATRO<br>";
		break;
}
?>
</p>
</p>
</body>
</html>
