<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin título</title>
</head>
<body>
<?php 
echo("<table width=\"300\" border=\"1\" cellspacing=\"2\" cellpadding=\"2\">
  <tr>
    <td>Aqui cualquier texto</td>
  </tr>
</table>");
?>
<?php 
//colocar todas las barras delante de las comillas dobles en el codigo html. Luego echo (" todo el codigo html ");
echo ("											
<form action=\"echo_html.php\" method=\"GET\">
<select name=\"selector\">
  <option value=\"valorselec1\">selec1</option>
  <option value=\"valorselec2\">selec2</option>
</select>
<input name=\"enviar\" type=\"submit\" value=\"Cargar\" />
</form>
");

$nombre = @$_GET['selector'];
echo $nombre;
?>
</body>
</html>