<HTML>
<TITLE>PHPBuddy getting screen resolution</TITLE>
<!--
(c) http://www.phpbuddy.com (Feel free to use this script but keep this message intact)
Author: Ranjit Kumar (Cheif Editor phpbuddy.com)
-->
<HEAD>
<script language="Javascript">
<!--
document.write('<br>Su resoluci�n es de '.screen.width+'x'+screen.height)
//-->
</script>



De este modo es posible pasar el par�metro a un script PHP por medio de una redirecci�n en JavaScript.

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

// C�digo a mostrar en caso que se detecte la resoluci�n de la pantalla
     if(isset($_GET['Ancho']) && isset($_GET['Alto'])) {
               // Resoluci�n detectada
     }
     else {
               // Resoluci�n no detectada
     }
}

?>


</BODY>
</HTML>
