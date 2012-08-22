<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin título</title>
<style type="text/css">
<!--
.titulo {
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 16px;
	color: #039;
}
-->
</style></head>

<body>


<p><img src="img/validez_c.gif" width="84" height="81" /></p>
<p>
  
  <?php $imagen = "validez_c.gif";?>
  
  <a href="echo_final.php"><img src="img/<?php echo $imagen ; ?>" width="80" height="80" /></a> Imagen enlace Con Borde</p>
<p><a href="echo_final.php"><img src="img/<?php echo $imagen ; ?>" width="80" height="80" border="0" /></a> Imagen enlace Sin Borde</p>
<p>NOTA Se puede ajustar el tama&ntilde;o de la imagen y los espacios V y H</p>

<a href="echo_final.php"><img src="img/<?php echo $imagen ; ?>" width="80" height="80" border="0" /></a><a href="echo_final.php"><img src="img/<?php echo $imagen ; ?>" width="80" height="80" border="0" /></a><br />
<a href="echo_final.php"><img src="img/<?php echo $imagen ; ?>" width="80" height="80" border="0" /></a><a href="echo_final.php"><img src="img/<?php echo $imagen ; ?>" width="80" height="80" border="0" /></a>
<p>
<a href="echo_final.php"><img src="img/<?php echo $imagen ; ?>" width="40" height="40" hspace="10" vspace="10" border="0" /></a><a href="echo_final.php"><img src="img/<?php echo $imagen ; ?>" width="40" height="40" hspace="10" vspace="10" border="0" /></a><br />
<a href="echo_final.php"><img src="img/<?php echo $imagen ; ?>" width="40" height="40" hspace="10" vspace="10" border="0" /></a><a href="echo_final.php"><img src="img/<?php echo $imagen ; ?>" width="40" height="40" hspace="10" vspace="10" border="0" /></a>
<h1 class="titulo">En definitiva lo que interesa es:</h1>
<p>

<?php $imagen = "validez_c.gif";?>
<a href="echo_final.php"><img src="img/<?php echo $imagen ; ?>" width="40" height="40" hspace="10" vspace="10" border="0" /></a>


<p>
</body>
</html>