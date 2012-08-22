<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Documento sin título</title>
</head>

<body>
isset — Determine if a variable is set and is not NULL (Determinar si una variable está definida y no es nula)

<?php
if(isset ($_POST['lugar'])) // isset retorno TRUE si la variable esta definida y no es nula
{
$lugar= $_POST['lugar'];
}
?>

</body>
</html>