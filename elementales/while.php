<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin título</title>
</head>

<body>

<?php 
$i = 1;
while ($i < 5)
{
	echo $i ;
	$i++;
	
	echo "<p></p>";
}
?>

<p></p><p></p>

<?php 
$_SESSION["i"] = 1;
while ( $_SESSION["i"] < 5)
{
	echo $_SESSION["i"];
	$_SESSION["i"]++;
	echo "<p></p>";
}
?>


</body>
</html>