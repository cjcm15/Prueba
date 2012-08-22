<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t�tulo</title>
</head>

<body>
<?php

  $ar=fopen("archivoTextoDatos.txt","a") or
    die("Problemas en la creacion");
  fputs($ar,$_REQUEST['nombre']);
  fputs($ar,"\n");
  fputs($ar,$_REQUEST['comentarios']);
  fputs($ar,"\n");
  fputs($ar,"--------------------------------------------------------");
  fputs($ar,"\n");
  fclose($ar);
  echo "Los datos se cargaron correctamente.";
  ?>
</body>
</html>

En primer lugar creamos o abrimos el archivo de texto "archivoTextoDatos.txt". 
El segundo par�metro de la funci�n fopen indica la forma de apertura de archivo "a" (lo crea o si ya existe el archivo lo abre para a�adir datos al final), "w" (crea el archivo de texto, si existe borra su contenido) y la �ltima forma de apertura del archivo es "r" (abre el archivo para su lectura).
Como en este problema nos interesa que el archivo vaya creciendo con los datos que aportan los visitantes al sitio lo abrimos para a�adir, par�metro "a".
La funci�n retorna una referencia al archivo, la almacenamos en una variable que llamamos $ar
Si el archivo no se puede abrir, se ejecuta la instrucci�n que se encuentra luego del operador "or" en nuestro caso llamamos a la funci�n die que finaliza la ejecuci�n del programita PHP mostrando como mensaje el texto que le pasamos a dicha funci�n.

  $ar=fopen("datos.txt","a") or
    die("Problemas en la creacion");


Para la grabaci�n de datos utilizamos la funci�n fputs que tiene dos par�metros: la referencia al archivo donde grabamos y el string a grabar.

  fputs($ar,$_REQUEST['nombre']);
  fputs($ar,"\n");


Para el salto de l�nea en el archivo de texto, usamos los caracteres \n.De esta forma cuando leamos el archivo de texto lo haremos l�nea a l�nea. Cuando dejamos de trabajar con el archivo llamamos a la funci�n fclose.

Hay que tener muy presente que el archivo se almacena en el servidor y no en la m�guina de la persona que est� navegando. Es decir, no vaya al explorador de archivos para ver donde se almacen� "datos.txt", tenga en cuenta que est� en la m�quina donde se ejecut� el script de PHP. Luego veremos como leer el contenido del archivo y mostrarlo en otra p�gina del sitio.