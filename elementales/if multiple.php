<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin título</title>
</head>

<body>
Ejemplo 1 Al no usar else sale un resultado no deseado<br />
<?php $a = 4; 
$b = 5;
if ($a== 4 and $b == 5){
echo "VERDADERO a = 4 y b = 5";
}
echo "a = 4 y b = 14";
?>
<p></p>

Ejemplo 2 Usamos else y sale todo bien<br />
<?php $a = 4;
$b = 5;
if ($a== 4 and $b == 5)
{
echo "VERDADERO a = 4 y b = 5";
}
else {echo "a = 4 y b = 14";}
?>
<p></p>

Ejemplo 3 Usamos else y sale todo bien<br />
<?php $a = 4;
$b = 14;
if ($a == 4 and $b == 5){
echo "VERDADERO a = 4 y b = 5";
}
else {echo "FALSO a = 4 y b = 14";}
?>
<p></p> 

Ejemplo 4 <br />
<?php $a = 5;
$b = 14;
if ($a == 4 or $b == 5){
echo "VERDADERO a = 4 y b = 5";
}
else {echo "FALSO a = 7 y b = 14";}
?>
</body>
</html>