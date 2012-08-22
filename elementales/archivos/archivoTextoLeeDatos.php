<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin título</title>
</head>
<body>
<?php
  $ar=fopen("archivoTextoDatos.txt","r") or
    die("No se pudo abrir el archivo");
  while (!feof($ar))
  {
    $linea=fgets($ar);
    $lineasalto=nl2br($linea);
    echo $lineasalto;
  }
  fclose($ar);
  ?>
</body>
</html>

Para la lectura de un archivo de texto contamos con la función fgets. Además debemos habrir el archivo para lectura.
Lo primero que debemos identificar es la forma de apertura del archivo:

  $ar=fopen("archivoTextoDatos.txt","r") or
  die("No se pudo abrir el archivo");

El segundo parámetro de fopen es "r" es decir read (apertura para lectura), si el archivo no existe por ejemplo se ejecuta la función die que finaliza el programa mostrando el string correspondiente.
La función feof retorna true si se ha llegado al final del archivo en caso contrario retorna false. Para que se impriman todas las líneas del archivo se plantea una estructura repetitiva que se ejecuta mientras no se llegue al final de archivo:

  while (!feof($ar))

Dentro de la estructura repetitiva leemos una línea completa del archivo de texto con la función fgets:

  $linea=fgets($ar);

La variable $linea contiene una línea completa del archivo de texto, inclusive el salto de línea (\n)
Como el navegador no hace un salto de línea con este caracter, debemos convertir dicho caracter a la marca <br> propia de HTML. La función que realiza esta actividad se llama nl2br (new line to br)
El resultado se almacena en una nueva variable que es la que realmente imprimimos:

  $lineasalto=nl2br($linea);
  echo $lineasalto;
