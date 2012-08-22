<?php $pagina = "http://www.cm10.com.ar";
header("Location: $pagina");
//Esto funciona solo en la cabecera
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin título</title>
</head>

<body>
<style>
      body { font-family: Arial, Helvetica, sans-serif; font-size: 13px }
      li, td { font-family: Arial, Helvetica, sans-serif; font-size: 13px }
      hr { color: #3333cc; width=300; text-align=left}
      a { color: #000000 }
    </style>
  </head>
  <body>
    <img src="file:///D|/wamp/www/CursoPHPMySQL/33 ejercicios/marcador.gif" alt="PHPbookmark logo" border=0
       align=left valign=bottom height = 50 width = 150>
  <h1>&nbsp;CompartElinks</h1>
  <hr>
texto html
<?php 
function do_html_URL($url, $name) 
{ 
// output URL as link and br 
?> 
<a href="<?php echo $url; ?>"><?php echo $name; ?></a><br> 
<?php 
} 
?> 
<?php do_html_URL("http://www.cm10.com.ar", "Carlos");?>



</body>
</html>