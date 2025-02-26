<?php
/*
Si la compra del cliente es inferior a 20 soles podrán requerir 2 cosas:
• Si los productos son de mascotas se mostrará un mensaje: "No se puede realizar el envío".
• Si los productos son de ropa se le mostrará el siguiente mensaje: "Los gastos de envío son 5 soles".
*/
$compra=19;
$producto="ropa";//ropa
print "compra:S/.".$compra."<br>";
print "producto: ".$producto."<br>";

if ($compra<20)
{
	print "mensaje: ";
	print "Los gastos de envío son 5 soles";
}
 
if ($producto=="mascota")
{
	print "mensaje: ";
	print "No se puede realizar el envío";
	print "<br>";
}
if ($producto=="ropa")
	 {
			//Si la compra tiene un importe entre 20 y 30 soles se le indicará el mensaje: "Los gastos de envío son 5 soles".
			if (($compra>20) and ($compra <30) ) 
			{
			print "mensaje: ";
			print "Los gastos de envío son 5 soles";
			}

			//Si la compra supera los 40 soles debemos indicar un mensaje de que los portes de envío son gratis.
			if ($compra >40) 
			{
			print "mensaje: ";
			print "los portes de envío son gratis";
			}



	}



?>