<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin título</title>
</head>

<body>

<p>
Año mes dia<br />
<?php 
echo date("Ymd");
echo "<br>";
echo "Lo siguiente no funciona en la base de datos <br>";
echo date("d-m-Y");
?>

</p>
<p>Usar lo siguiente:<br />
  <input type="hidden" name="fechaConsulta" value="<?php echo date("Ymd");?>" />
</p>
</body>

</html>