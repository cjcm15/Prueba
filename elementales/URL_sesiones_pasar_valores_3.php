<?php session_start();


if (!empty($_GET['XXX'])) 
	{
		$XXX = $_GET['XXX'];//lo que se recibe es LoQuePaso
		$_SESSION["XXX"] = $XXX;  
		echo "recibido por URL y guardado como variable de sesion = $XXX";
	}
else{
	 $novId= $_SESSION["XXX"];
	 echo "recibido por variable se sesion = $XXX";
	}?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin título</title>
</head>

<body>
<p>Llegando a la pagina 3<br />
vemos que recibimos el valor porque esta en una variable de sesion.</p>
<p> <?php echo "Valor pasado = $XXX";?> </p>
<p>Si volvemos a la pagina 2 el valor se conserva porque esta en la variable de sesion</p>
<p><a href="URL_sesiones_pasar_valores_2.php">pagina 2</a></p>
<p> Si vamos de la pagina 3 a la pagina 1 el valor se perdio porque la pagina 3 no pasa el valor por URL y la pagina 1 no recibe el valor por variable de sesion.</p>
<p><a href="URL_sesiones_pasar_valores_1.php">pagina 1</a></p>
<p>
</body>
</html>