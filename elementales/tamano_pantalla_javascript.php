<HTML>
<TITLE>PHPBuddy getting screen resolution</TITLE>
<!--
(c) http://www.phpbuddy.com (Feel free to use this script but keep this message intact)
Author: Ranjit Kumar (Cheif Editor phpbuddy.com)
-->
<HEAD>
<script language="Javascript">
<!--
document.write('<br>Su resolución es de '.screen.width+'x'+screen.height)
//-->
</script>



De este modo es posible pasar el parámetro a un script PHP por medio de una redirección en JavaScript.

<?
if(!isset($_GET['r']))
{
echo "<script language=\"JavaScript\">
<!-- 
document.location=\"$PHP_SELF?r=1&Ancho=\"+screen.width+\"&Alto=\"+screen.height;
//-->
</script>";
}
else {    

// Código a mostrar en caso que se detecte la resolución de la pantalla
     if(isset($_GET['Ancho']) && isset($_GET['Alto'])) {
               // Resolución detectada
     }
     else {
               // Resolución no detectada
     }
}

?>


</BODY>
</HTML>
