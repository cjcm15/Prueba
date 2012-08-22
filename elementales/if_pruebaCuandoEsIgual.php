<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin título</title>
</head>

<body>

<?php
$num_resultados = 14;
if ($num_resultados == 0)
{ 
      echo "Debe especificar una cadena a bucar"; 
      exit;
} 
else
{
echo "Debe especificar una cadena a bucar xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"; 
}
?> 
<p>
Otra prueba
<p>

<?php 
$i = 0;
do{
if ($i <> 4)
{
echo "Titulo $i<br>";
}
$i = $i+1;
}while ($i<=5);
?>

</body>
</html>