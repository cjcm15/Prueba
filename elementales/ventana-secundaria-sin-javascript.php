<html> 
<head> 
   <title>Ventana para carga de una imagen</title> 
<script type='text/javascript' src='x_core.js'></script> 
<script type='text/javascript'> 

function muestra_imagen(archivo,ancho,alto){ 
   xWidth ('ampliacion',ancho + 6) 
   xHeight ('ampliacion',alto + 6 + 20) 
   xWidth ('c1',ancho) 
   xHeight ('c1',alto) 
xWidth ('cerrarampliacion',ancho) 

   xInnerHtml('c1','<img src="' + archivo + '" width="' + ancho + '" height="' + alto + '" border="0">')
   xShow('ampliacion'); 
} 

function muestra_texto(archivo,ancho,alto){ 
   xWidth ('ampliacion',ancho + 6) 
   xHeight ('ampliacion',alto + 6 + 20) 
   xWidth ('c1',ancho) 
   xHeight ('c1',alto) 
xWidth ('cerrarampliacion',ancho) 

   xInnerHtml('c1','' + archivo + '')
   xShow('ampliacion'); 
} 

function cerrar_ampliacion(){ 
   xHide('ampliacion'); 
} 
</script> 
</head> 

<body> 

<div id="ampliacion" style="padding:2 2 2 2px; position:absolute; left: 200px; top: 100px; visibility: hidden; border: 1px solid #666666; background-image: url(images/cargando.gif); background-repeat: no-repeat;"> 
<div id="c1"> 

</div> 
<div id="cerrarampliacion" style="background-color:333333; font-family:arial,verdana; font-size:8pt; line-height:20px; text-align:right;float:right; height: 20px; padding-right:5px;"> 
<a href="javascript:cerrar_ampliacion()" style="color:#ffffff;">[X] Cerrar</a> 
</div> 
</div> 

<a href="javascript:muestra_imagen('images/ancares.jpg',155,80)">Ver imagen Ancares</a> 
<br> 
<br> 

<a href="javascript:muestra_imagen('images/basel.jpg',155,80)">Ver imagen Basilea</a> 
<br> 
<br> 

<a href="javascript:muestra_imagen('images/dwlogo-blanco-6.jpg',97,40)">Ver logo de desarrolloweb</a> 
<br> 
<br> 

<a href="javascript:muestra_imagen('images/cabra.jpg',266,250)">Ver una cabrita</a> 
<br> 
<br> 
<a href="javascript:muestra_imagen('images/madridbanco.jpg',252,207)">Imagen de Madrid</a> 

<br> 
<a href="javascript:muestra_texto('Aqui mostramos un texto',500,207)">Muestra un texto</a>

</body> 
</html> 

