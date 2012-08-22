<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin título</title>
</head>

<body>
<?php
class pagina_web 
{
	var $titulo;
	function setTitulo($titulo = "Titulo por defecto") 
	{
		$this->titulo = $titulo;
	}
	function getTitulo() 
	{
		return $this->titulo;
	}
	function cabecera()
	{
		echo ("<html><head><title>");
		echo $this->titulo;
		echo ("</title></head><body>");
	}
	function cuerpo()
	{
	echo("Este es el cuerpo de la p‡gina web");
	}
	function pie()
	{
		echo ("</body></html>");
	}
	function mostrar_pagina()
	{
		echo $this->cabecera();
		echo $this->cuerpo();
		echo $this->pie();
	}
}
class pagina_web_formulario extends pagina_web 
{
	function formulario_inicio($accion)
	{
		echo ("<form action=\"$accion\">");
	}
	function formulario_fin()
	{
		echo ("</form>");
	}
	function formulario_caja_texto($nombre)
	{
		echo ("$nombre <input type=\"text\" name=\"$nombre\">");	
	}
	function formulario_boton()
	{
		echo ("<input type=\"submit\" name=\"Submit\" value=\"Enviar\">");
	}
	function mostrar_pagina()
	{
		$this->cabecera();
		$this->formulario_inicio("index.php");
		$this->formulario_caja_texto("Nombre");
		$this->formulario_boton();
		$this->formulario_fin();
		$this->pie();
	}
}

$pagina = new pagina_web_formulario();
$pagina->mostrar_pagina();
?>
<?php

class nombreClase
{
function nombreClase($param)
{
echo "Constructor llamado con el parámetro $param <br>";
}
}
$a = new nombreClase(“Primero”);
$b = new nombreClase(“Segundo”);
@$c = new nombreClase();


?>

</body>
</html>