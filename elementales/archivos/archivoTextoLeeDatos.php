<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t�tulo</title>
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

Para la lectura de un archivo de texto contamos con la funci�n fgets. Adem�s debemos habrir el archivo para lectura.
Lo primero que debemos identificar es la forma de apertura del archivo:

  $ar=fopen("archivoTextoDatos.txt","r") or
  die("No se pudo abrir el archivo");

El segundo par�metro de fopen es "r" es decir read (apertura para lectura), si el archivo no existe por ejemplo se ejecuta la funci�n die que finaliza el programa mostrando el string correspondiente.
La funci�n feof retorna true si se ha llegado al final del archivo en caso contrario retorna false. Para que se impriman todas las l�neas del archivo se plantea una estructura repetitiva que se ejecuta mientras no se llegue al final de archivo:

  while (!feof($ar))

Dentro de la estructura repetitiva leemos una l�nea completa del archivo de texto con la funci�n fgets:

  $linea=fgets($ar);

La variable $linea contiene una l�nea completa del archivo de texto, inclusive el salto de l�nea (\n)
Como el navegador no hace un salto de l�nea con este caracter, debemos convertir dicho caracter a la marca <br> propia de HTML. La funci�n que realiza esta actividad se llama nl2br (new line to br)
El resultado se almacena en una nueva variable que es la que realmente imprimimos:

  $lineasalto=nl2br($linea);
  echo $lineasalto;
