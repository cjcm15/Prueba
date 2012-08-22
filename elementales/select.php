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

</body>
</html>
