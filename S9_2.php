<?php
//llanas= 200 unidades
//motos=60unidades
//cascos=60 unidades

$producto="mascotas";//llantas/motos/cascos
print "<h1>reporte de cantidades </h1>";
print "<br>";
print "el producto seleccionado es: ".$producto;
print "<br>";
switch ($producto) {
	case 'llantas':
		print "la cantidad correspondiente es: 200 UNIDADES";
		break;
	case 'motos':
		print "la cantidad correspondiente es: 60 UNIDADES";
		break;
	case 'cascos':
		print "la cantidad correspondiente es: 60 UNIDADES";
		break;
	default:
		print "el producto no existe, favor de indicar bien";
		break;
}
?>