


<?php
session_start();
?>

<?php
$_SESSION["fotosAoM"] = "agregarFotos";
if ($_SESSION["fotosAoM"] == "agregarFotos") {
    echo "verdadero" . $_SESSION["fotosAoM"];
} else {
    echo "falso" . $_SESSION["fotosAoM"];
}
?>
<p></p>
<p></p>
Segundo bloque de codico
<p></p>
<p></p>

<?php
$_SESSION["fotosAoM"] = "agregarFotos";
if ($_SESSION["fotosAoM"] == "agregarFotos") {
?> 
"verdadero"
<?php
} else {
?> 						
"falso"
<?php
}
?>






