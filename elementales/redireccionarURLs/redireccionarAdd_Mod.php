<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Documento sin título</title>
</head>

<body>

<?php  $updateGoTo = "secciones.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  //header(sprintf("Location: %s", $updateGoTo));
  echo '1 = '.$updateGoTo;
 
 echo '<p></p>'; 
  
echo '2 = '.'SERVER_NAME = '.$_SERVER['SERVER_NAME'];

echo '<p></p>'; 
echo '3 = '.'PHP_SELF = '.$_SERVER['PHP_SELF'];

echo '<p></p>'; 
echo '4 = '.'QUERY_STRING = '.$_SERVER['QUERY_STRING'];


echo '<p></p>'; 
echo '5 = '.$_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF'];

echo '<p></p>'; 
echo '6 = '.$_SERVER['SCRIPT_FILENAME']; 


echo '<p></p>'; 
$S7 = $_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF'];
echo '<p></p>'; 
echo '$S7 = '. $S7;
echo '<p></p>'; 

$final = strrchr($S7, "/");

echo '$final = '. $final;

echo '<p></p>'; 

$long = strlen($final);
$XX = $long - 1;
$ssss = substr_replace($S7, $updateGoTo, -$XX);
?> 

<script type="text/javascript"> window.location="index.php"; </script> 


<?php 
echo '<p></p>'; 

// Se puede buscar el caracter sin tener en cuenta los caracteres anteriores 
// al desplazamiento
$nueva_cadena = '/disenoparavos/redireccionar.php';
$posicion = strpos($nueva_cadena, '/', 1); // $posicion = 7, no 0

echo 'posicion = '.$posicion;


$cadena="cualqasdasduiercosahttp://informatica-practica.net/index.phpterminando";
$maximo = strlen($cadena);
$cadena_comienzo = "http://";
$cadena_fin = ".php";
$total = strpos($cadena,$cadena_comienzo);
$total2 = strpos($cadena,$cadena_fin);
$total3 = ($maximo - $total2 - 4);
$final = substr ($cadena,$total,-$total3);
echo $final; //Imprime http://informatica-practica.net/index.php

$rest = substr("abcdef", -1);    // devuelve "f"
echo '$rest 1 = '.$rest;
echo '<p></p>'; 
$rest = substr("abcdef", -2);    // devuelve "ef"
echo '$rest 2 = '.$rest;
echo '<p></p>'; 
$rest = substr("abcdef", -3, 1); // devuelve "d"
echo '$rest 3 = '.$rest;

?> 

  
   
<!--<script type="text/javascript"> window.location="http://cmanera.com.ar/disenoparavosnuevo/adm/secciones.php"; </script>-->

<!--<script type="text/javascript"> window.location="http://www.disenioparavos.com.ar/adm/secciones.php"; </script>-->


<!--<script type="text/javascript"> window.location="http://localhost/disenoparavos/adm/secciones.php"; </script>
-->


</body>
</html>