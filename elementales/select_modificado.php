<html>
<body>
<?php
   
   $seleccionado = "";
   
   if($_SERVER['REQUEST_METHOD']=='GET')
   {
      $seleccionado = $_GET['opciones'];
   }

?>
<form method=GET>
  <select name='opciones'>
    <option value=''>-- Seleccione --</option>
    <?php
      
         $datos = array("Revista","TV","Internet");
         
         for($i=0; $i<count($datos); $i++)
         {
            if($i==$seleccionado)
            {
               echo "<option value='".$i."' selected>".$datos[$i]."</option>";
            }
            else
            {
               echo "<option value='".$i."'>".$datos[$i]."</option>";
            }
         }
      
      ?>
  </select>
  &nbsp;&nbsp;
  <input type=submit>
</form>
<?php 
echo $datos[0]. "<br>";
echo $datos[1]. "<br>";
echo $datos[2]. "<br>";

echo "Seleccionado = ".$seleccionado. "<br>";

$seleccionado = 0;

echo $datos["$seleccionado"]. "<br>";


?>



</body>
</html>
