<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin título</title>
</head>

<body>
<?php

$VariablesURL = $_GET['VariablesURL'];
 echo "Las variables que se reciben estan contenidas en \$VariablesURL = $VariablesURL <br>";

 echo "Las variables que se reciben son VariablesURL es: $_GET[VariablesURL]<br>";

echo "Separamos lo recibido en dos variables<br>";
   list($var1,$var2) = explode(",",$VariablesURL);
    echo "<br>\$var1 = $var1<br>"; 
    echo "\$var2 = $var2<br>"; 
?>
	
	
<br />
<br />
<font color="#0000CC" size="3">En forma directa sin explicar el codigo seria:</font><br />
 <?php
 $VariablesURL = $_GET['VariablesURL'];
    list($var1,$var2) = explode(",",$VariablesURL);
    echo "<br>\$var1 = $var1<br>"; 
    echo "\$var2 = $var2<br>"; 
?>

</body>
</html>