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
<p>
<a href="URL_sesiones_pasar_valores_3.php">Pagina 3</a>
<p>
<?php echo "Valor pasado = $XXX";?>
</body>
</html>