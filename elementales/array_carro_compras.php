<?php session_start();?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Documento sin título</title>
</head>

<body>

  <?php 
$lugar = 'Lugar 1';
$precio = 'Precio 1';
//creo un array
$carrito_mio[] = array("lugar"=>$lugar,"precio"=>$precio); //es una array

echo 'Primer elemento del array '.$carrito_mio[0]["lugar"];

// agrego elementos al array
$lugar = 'Lugar 2';
$precio = 'Precio 2';

$carrito_mio[]=array("lugar"=>$lugar,"precio"=>$precio);

// agrego elementos al array
$lugar = 'Lugar 3';
$precio = 'Precio 3';

$carrito_mio[]=array("lugar"=>$lugar,"precio"=>$precio);



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

$_SESSION['carrito']=$carrito_mio; 

?>  
 
</table>

<a href="array_carro_compras_recibe.php">Pasa la variable carrito_mio</a>



</body>
</html>