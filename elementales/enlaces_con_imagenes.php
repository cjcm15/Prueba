<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin título</title>
<link href="estilos_enlaces1.css" rel="stylesheet" type="text/css" />
</head>

<body>

<img src="img/t1.gif" alt="Texto alternativo" width="20" height="40" border="4"/>
<p> 

border="4" actua sobre el borde de la imagen.(En Internet Explorer)<br />
<a href="echo_final.php"><img src="img/t1.gif" width="40" height="40" border="4"/></a>
<p>class="menu_link1" no actua sobre la imagen (En Internet Explorer)<br />
<a href="echo_final.php" class="menu_link1"><img src="img/t1.gif" alt="Texto alternativo" width="20" height="40" border="5"/>    Ir a la pagina echo final.php</a>
  
<p>Este es un enlace comun sin imagen<br />
  <a href="echo_final.php">Ir a la pagina echo final.php</a>
<p> 

  
<a href="echo_final.php" class="menu_link1"><img src="img/t1.gif" alt="Texto alternativo" width="20" height="40" border="5"/>    Ir a la pagina echo final.php</a>
<p>Esto es realmente lo que interesa
<p>
  
  
  <?php $imagen = "validez_c.gif";?>
  <a href="echo_final.php"><img src="img/<?php echo $imagen ; ?>" width="40" height="40" hspace="10" vspace="10" border="0" /></a>
  
  <p>Esto es realmente lo que interesa
<p>
   <?php $imagen = "validez_c.gif";?>
   
  <a href="echo_final.php"><?php echo '<img src='."img/$imagen".'>'?></a>
  
  
  
  
</body>
</html>