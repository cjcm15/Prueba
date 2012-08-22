<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Documento sin título</title>
</head>

<body>
<a href="clase1.php">clase1.php</a>
<script LANGUAGE="JavaScript">
function redireccionar() {
var url640x480 = "http://www.tu-sitio.com/640x480";
var url800x600 = "http://www.tu-sitio.com/800x600";
var url1024x768 = "http://localhost/elementales/echo_final.php";
if ((screen.width == 640) && (screen.height == 480))
window.location.href= url640x480;
else if ((screen.width == 800) && (screen.height == 600))
window.location.href= url800x600;
else if ((screen.width == 1024) && (screen.height == 768))
window.location.href= url1024x768;
else window.location.href= url640x480;
}
</script>
</head>
<body onLoad="redireccionar()">
</body>
</html>



