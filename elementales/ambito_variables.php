<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin título</title>
</head>

<body>
<?php
$i = 40;
echo "i Valor inicial = $i <br>";
	while ($i<100)
	{
		echo "i Valor dentor del while = $i <br>";
        $i = $i + 10;
	}
	
	
	echo "i Despues del while = $i <br>";
	
?>
<p></p>
<p></p>

<?php

$j = 40;
echo "j Valor inicial = $j <br>";
    while ($j<100)
    {
		echo "j Valor dentor del while = $j <br>";
        $j = $j + 10;
	}
	
	
	echo "j Despues del while = $j <br>";
	
?>


</body>
</html>