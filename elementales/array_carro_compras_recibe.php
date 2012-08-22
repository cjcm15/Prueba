<?php session_start();?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Documento sin título</title>
</head>

<body>

  <?php 
$carrito_mio=$_SESSION['carrito'];

?>
<h4>Elementos contenidos en el array</h4>
<table width="200" border="1">

<?php for($i=0;$i<=count($carrito_mio)-1;$i ++){?>

  <tr>
  <td><?php echo $i;?></td>
    <td><?php echo $carrito_mio[$i] ["lugar"];?></td>
    <td><?php echo $carrito_mio[$i] ["precio"];?></td>
  </tr>
  
<?php 
}
//$carrito_mio = $carrito_mio[];
//
//
//$carrito_mio_nuevo[0] = $carrito_mio;
//
//echo 'Carrito nuevo '.$carrito_mio_nuevo[0]['lugar'];


?>  
 
</table>





</body>
</html>