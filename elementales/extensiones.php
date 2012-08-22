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

mysql_select_db($database_postales, $postales);
$query_rsPostalesEnvio = "SELECT * FROM postales_envio";
$rsPostalesEnvio = mysql_query($query_rsPostalesEnvio, $postales) or die(mysql_error());
$row_rsPostalesEnvio = mysql_fetch_assoc($rsPostalesEnvio);
$totalRows_rsPostalesEnvio = mysql_num_rows($rsPostalesEnvio);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin título</title>
</head>

<body>
<strong>fdsafds<p>&nbsp;</p>
</strong>
<p><strong>afdsfdsafdsa
  </strong>
</p>
<p>&nbsp;</p>
<p><?php echo strrev($row_rsPostalesEnvio['nombre_recibe']); ?></p>
<p>&nbsp;</p>
</body>
<?php
mysql_free_result($rsPostalesEnvio);
?>
