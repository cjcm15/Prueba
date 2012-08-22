<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Documento sin título</title>
</head>

<body>
<h2>Envia los datos por la URL, pero no los muestra porque el formulario es metodo post </h2>
<form action="valores_form_recibe_variosValores.php" method="post" name="valor1" id="valor1">
  <p>
    <input name="valor1" type="hidden" id="valor1" value="valor del valor 1" >
    <input name="valor2" type="hidden" id="valor2" value="valor del valor 2" >
    <input name="valor3" type="hidden" id="valor2" value="valor del valor 3" >
    <input name="enviar" type="submit" value="Enviar Parametro">
  </p>
  
  <h4>  Inseramos un Campo de imagen que cumple la misma funcion que el boton, es decir envia el formulario </h4>
    <input type="image" name="imageField" id="imageField" src="img/t1.gif">
 
</form>
</body>
</html>