<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin título</title>
</head>

<body>

<?php $j = 5; ?>

"boton<?php echo $j ?>" <!--queda en html como  "boton5"--> 

<p>

<?php $archivos = array("prueba1", "prueba2");
$i = 1;
?>
"<?php echo $archivos[$i] ?>.php"     <!--queda en html como  "prueba2.php"-->                                   

<p>

<?php $textos = array("prueba100", "prueba200");

$i = 1;
?>
<?php echo $textos[$i] ?>   <!--queda en html como  prueba200  --> 



</body>
</html>