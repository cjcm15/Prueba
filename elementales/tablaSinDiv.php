<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin título</title>
</head>

<body>

<table width="300" border="1" cellpadding="0">
  <tr>
    <td>Titulo</td>
    <td width="100" rowspan="3" align="center" valign="middle" bgcolor="#99FF66"><img src="img/validez_c.gif" width="84" height="81" /></td>
  </tr>
  <tr>
    <td valign="top"><p>Texto</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p></td>
  </tr>
  <tr>
    <td align="center">
    
    
<?php 
$t = "t1.gif"; 
$t = "0.gif";
if ($t <> "0.gif") 
{?>
<img src="img/<?php echo $t; ?>" width="20" height="40" hspace="5" />
<?php }?>
    
    <img src="img/t2.gif" width="20" height="40" hspace="5" /><img src="img/t3.gif" width="20" height="40" hspace="5" /><img src="img/t4.gif" width="20" height="40" hspace="5" /><b></b></td>
  </tr>
</table>


</body>
</html>