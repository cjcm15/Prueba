<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Documento sin título</title>
</head>

<body>

<p><img src="../uploads/images/emmebrid08_2.jpg" alt="" width="313" height="400" />This is some example text that you can edit inside the <strong>TinyMCE editor</strong>.</p>

<?php
$str = "Is your name / O'reilly \?";

// Outputs: Is your name O\'reilly?
echo addslashes($str);

echo '<br>';

echo stripslashes($str);
?>



<?php

$str = "Is your name O\'reilly?";

// Salida: Is your name O'reilly?
echo stripslashes($str);
?>


</body>
</html>