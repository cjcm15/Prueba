<?php require_once('Connections/postales.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO tu_lugar (Lugar, Contacto, Direccion, Mail, Telefono, Ciudad, Comentarios, fecha_registro) VALUES (%s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['Lugar'], "text"),
                       GetSQLValueString($_POST['Contacto'], "text"),
                       GetSQLValueString($_POST['Direccion'], "text"),
                       GetSQLValueString($_POST['Mail'], "text"),
                       GetSQLValueString($_POST['Telefono'], "text"),
                       GetSQLValueString($_POST['Ciudad'], "text"),
                       GetSQLValueString($_POST['Comentarios'], "text"),
                       GetSQLValueString($_POST['fecha_registro'], "date"));

  mysql_select_db($database_postales, $postales);
  $Result1 = mysql_query($insertSQL, $postales) or die(mysql_error());

  $insertGoTo = "gracias_tulugar.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Postales Para Vos</title>
<link href="estilo.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
<!--
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' debe ser una direccion de e-mail.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' deben ser solo numeros.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+'.\n'; }
    } if (errors) alert('Se deben completar los siguientes campos:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
//-->
</script>
</head>
<body>
<div id="contenedor">
   <?php 
  include("cabecera.php")
  ?>
   
</div>
<div class="contenido">
      <div align="center">
        <?php 
  include("menu.php")
  ?> 
</div>
<div id="banner_texto" align="left"><img src="img/postales.jpg" />
  <p class="titulo">CIRCUITOS</P>
    <p><span class="subtitulo"><strong>Propon&eacute; tu lugar para el circuito  de postales</strong></span><br />
      <label></label>
</p>

<font color="#FF0000" face="Verdana, Geneva, sans-serif" size="4">Formulario</font>
<form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1" onsubmit="MM_validateForm('Lugar','','R','Contacto','','R','Mail','','RisEmail','Telefono','','RisNum','Ciudad','','R');return document.MM_returnValue">
  <table align="center">
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Lugar:</td>
      <td><input name="Lugar" type="text" id="Lugar" value="" size="32" />
      *</td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Contacto:</td>
      <td><input name="Contacto" type="text" id="Contacto" value="" size="32" />
      *</td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Direccion:</td>
      <td><input type="text" name="Direccion" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Mail:</td>
      <td><input name="Mail" type="text" id="Mail" value="" size="32" />
      *</td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Telefono:</td>
      <td><input name="Telefono" type="text" id="Telefono" value="" size="32" />
      *</td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Ciudad:</td>
      <td><input name="Ciudad" type="text" id="Ciudad" value="" size="32" />
      *</td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right" valign="top">Comentarios:</td>
      <td><textarea name="Comentarios" cols="50" rows="5"></textarea></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="Enviar" /></td>
    </tr>
  </table>
  <input type="hidden" name="fecha_registro" value="<?php echo date("Ymd");?>" />
  <input type="hidden" name="MM_insert" value="form1" />
</form>
<p>&nbsp;</p>

    <p><br />
    </p>
</div>
</div>
<div id="abajo">
  <div align="center"><img src="img/exhibidor_home.jpg" width="137" height="287" border="0" /><img src="img/postales_home.jpg" width="763" height="287" /></div>
</div>
<div id="footer">
    <div align="center"><a href="http://www.vmcrear.com.ar" target="_blank" class="top">Idea y Desarrollo: VMCREAR</a></div>
</div>
<!-- Start of StatCounter Code -->
<script type="text/javascript">
var sc_project=4433886; 
var sc_invisible=1; 
var sc_partition=55; 
var sc_click_stat=1; 
var sc_security="65c94607"; 
</script>

<script type="text/javascript" src="http://www.statcounter.com/counter/counter.js"></script><noscript><div class="statcounter"><a title="blogger visitor counter" href="http://www.statcounter.com/blogger/" target="_blank"><img class="statcounter" src="http://c.statcounter.com/4433886/0/65c94607/1/" alt="blogger visitor counter" ></a></div></noscript>
<!-- End of StatCounter Code -->

<?php   
//Estoy recibiendo el formulario, compongo el cuerpo 
// ENVIA UN MAIL AL ADMINISTRADOR DEL SITIO CON LOS DATOS DEL QUE SE INSCRIBIO, CON COPIA A QUIEN SE DESEE 
//Se toman los datos del formulario                
$nombre = $_POST['Contacto'];
$mail = $_POST['Mail'];
if (isset($_POST['Contacto'])) {
if ($_POST['Contacto']<>"" AND $_POST['Mail']<>"") { 
// Enviar
$administrador = "vmanera@arnet.com.ar"; //El Administrador del sitio recibe un mail avisando que alquien solicita informacion.
//Se puede enviar copia del mail avisando que alguien se registro a:
$copia="cmanera@arnet.com.ar";
//$copia2="cjcm15@yahoo.com.ar";
$asunto1 = "Popone lugar Postales para Vos";
//Con este cuerpo sale algo mas simple pero que se ve bien en todos los correos
$cuerpo1 = "<font color=\"#0033CC\" face=\"Verdana, Geneva, sans-serif\" size=\"2\">
Nombre y apellido: ".$HTTP_POST_VARS["Contacto"]."<br>".
"e-mail: ".$HTTP_POST_VARS["Mail"]."<br>".
"Comentarios: ".$HTTP_POST_VARS["Comentarios"]."<br>".
"<a href=\"http://200.49.145.11/postalesparavos.com.ar\">Para ver sobre el lugar Postales para Vos entra a www.postalesparavos/adminleon</a>
</font>";
$remitente1 = $mail;
$encabezado1 = "MIME-Version: 1.0\r\n";
$encabezado1 .= "Content-type: text/html; charset=iso-8859-1\r\n";
$encabezado1 .= "From:".$remitente1. "\r\n";
$encabezado1 .= "Bcc:".$copia.",".$copia2."\r\n"; // BCCs copia oculta
//Envio del mail del solicitante al administrador del sitio con copia oculta
mail($administrador,$asunto1,$cuerpo1,$encabezado1);

//A CONTINUACION UN MAIL DEL ADMINISTRADOR AL QUE SE REGISTRO AVISANDOLE QUE LOS DATOS SE RECIBIERON CORRECTAMENTE
$asunto2 = "Ya hemos recibido su propuesta por el lugar. Postales para vos";
//$cuerpo2 = "Ya hemos recibido tu consulta. Complejo de Caba&ntilde;as &quot;Algarrobo Luz.&quot;.";
$cuerpo2 = "<font color=\"#0033CC\" face=\"Verdana, Geneva, sans-serif\" size=\"2\">
Gracias por su colaboracion en proponer un lugar. Lo evaluaremos de inmediato."."<br>"."<br>".
"A la brevedad, nos pondremos en contacto."."<br>"."<br>".
"Para una recepci&oacute;n segura de nuestra respuesta, le recomendamos agregar a su lista de contactos el e-mail: info@postalesparavos.com.ar"."<br>"."<br>".
"Saludos!"."<br>"."<br>".
"Postales para Vos."."<br>".
"www.postalesparavos.com.ar"."<br>
</font>";
/*$remitente2 = "cm@cm10.com.ar\r\n"; *//*El administrador del sitio envia un mail al solicitante de la informacion*/
$encabezado2 = "MIME-Version: 1.0\r\n";
$encabezado2 .= "Content-type: text/html; charset=iso-8859-1\r\n";
$encabezado2 .= "From:".$administrador. "\r\n";
/*$encabezado2 .= "Bcc:".$copia.",".$copia2."\r\n";*/ // BCCs activar si se desea enviar copia oculta
mail($remitente1,$asunto2,$cuerpo2,$encabezado2);
}
}
?>





</body>
</html>
