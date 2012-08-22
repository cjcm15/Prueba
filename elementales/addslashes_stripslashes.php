<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin título</title><form action="addslashes_stripslashes.php" method="GET">
    
    aaa\bbb"cc'c>www<rrrr**eeee*yyyy/ no funciona debido a la pesencia de "<"  >
    <p>
    aaa\bbb"cc'c>www<>rrrr**eeee*yyyy/
    
   <p>
    aaa\bbb"cc'c>www**rrrr**eeee*yyyy/
    
    <table border=0>
      <tr><td>Introducir string a probar</td><td><input type=text name=isbn maxlength=50 size=50><br></td></tr>
      <tr><td colspan=2><input type=submit value="Enviar"></td></tr>
    </table>
  </form>
<?php
$isbn = $_GET['isbn'];
echo "<p>";
echo $isbn;
echo "<p>";
$isbn = addslashes($isbn);//agrega barras delante de caracteres que pueden original problemas[\ "  ']
echo "<p>";
echo $isbn;
echo "<p>";
$isbn = stripslashes($isbn);//elimina las barras agregadas
echo $isbn;
?>






</head>

<body>



