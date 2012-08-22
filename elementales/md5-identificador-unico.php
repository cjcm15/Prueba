<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin título</title>
</head>

<body>

<?php 

$i = 0;
do {
$base = rand().time().date("YmdGis");
$unico = md5($base);
echo date("YmdGis");
echo "<br>";
echo $unico;
echo "<p>&nbsp;</p>";
$i++;
} while ($i < 100);
?>
8d33817cb85f984e65ddbce8417c9ffb  32 caracteres

<?php 
//esto es lo que hay que usar. Genera un nro de 32 caracteres
$base = rand().time().date("YmdGis");
$unico = md5($base);
?>


</body>
</html>