<?php
//track_vars siempre est� activado
session_start();
// Use $HTTP_SESSION_VARS con PHP 4.0.6 o inferior
if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
} else {
    $_SESSION['count']++;
}
//Ejemplo 2127. Borrar una variable con $_SESSION. 

// Use $HTTP_SESSION_VARS con PHP 4.0.6 o inferior
unset($_SESSION['count']);


//Si est� usando $_SESSION y desactiva register_globals, no use session_register(), session_is_registered() ni session_unregister(). 

//session.name especifica el nombre de la sesi�n que se usa como nombre de la cookie. S�lo deber�a contener caracteres alfanum�ricos. Por defecto vale PHPSESSID

//nota: Si utiliza $_SESSION, use isset() para comprobar si una variable est� registrada en $_SESSION. 

//Ejemplo 2493. Ejemplos de isset()

$var = '';

// Esto evaluar� a TRUE as� que el texto se imprimir�.
if (isset($var)) {
    echo "Esta variable est� definida, as� que se imprimir� esto.<p>" ;
}
else{
echo "Esta variable NO est� definida, as� que se imprimir� esto.<p>";
}


// En los siguientes ejemplos usaremos var_dump para imprimir
// el valor devuelto por isset().

$a = "prueba";
$b = "otraprueba";

var_dump(isset($a));      // TRUE  var_dump � Vuelca informaci�n sobre una variable
echo "<p>";
var_dump(isset($a, $b));  // TRUE
echo "<p>";
unset ($a);

var_dump(isset($a));
echo "<p>";     // FALSE
var_dump(isset($a, $b)); // FALSE
echo "<p>";
$foo = NULL;
var_dump(isset($foo));   // FALSE

?> 


