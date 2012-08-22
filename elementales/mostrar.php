<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Mostrar datos</title>
</head>

<body>
<?php 
  echo "<p>Estos son tus datos:"; // Start printing order 
  echo "<p>Tu nombre es:";
  echo "<br>";
  $camponombre = $_POST['camponombre'];
  echo $camponombre;
  echo "<p>Tu dirección es:";
  echo "<br>";
  $campodireccion = $_POST['campodireccion'];
  echo $campodireccion;
 ?>
</body>
</html>
