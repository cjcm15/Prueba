<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t�tulo</title>
</head>

<body>

<?php
$conn=mysql_connect ("localhost","usuario","password");
$ssql = "SELECT * FROM usuarios WHERE user='$user' and password='$password'";
$rs=mysql_db_query ("basededatos",$ssql);
$valido = mysql_num_rows($rs)!=0;
mysql_free_result($rs);
mysql_close($conn);
if ($valido){
session_start();
session_register("autentificado");
$autentificado = "SI";
header ("Location: aplicacion.php");
}else {
header("Location: http://www.miotraweb.com");
exit;
}
?> 

</body>
</html>