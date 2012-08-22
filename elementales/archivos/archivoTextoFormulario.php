<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin título</title>
</head>
<body>
<form action="archivoTextoGuardaDatos.php" method="post">
  Ingrese su nombre:
  <input type="text" name="nombre">
  <br>
  Comentarios: <br>
  <textarea name="comentarios" rows="10" cols="40">  

</textarea>
  <br>
  <input type="submit" value="Registrar">
</form>
</body>
</html>

Una actividad fundamental es poder guardar información en el servidor.
Para guardar datos en el servidor disponemos de dos herramientas que se complementan en muchos casos (archivos de texto y bases de datos).
En este apartado veremos como crear un archivo de texto y añadir datos al mismo.
Lo presentaremos al tema resolviendo un problema: Implementación de un libro de visitas.
Para resolver este problema plantearemos dos páginas, un formulario para realizar la carga del nombre del visitante y sus comentarios (disponemos un objeto de tipo "text" y otro de tipo "textarea").