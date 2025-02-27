<?php
//dias de la semana (01=Lunes; 02:martes:....07:domingo)


$dias="07";//lunes/martes/miercoles../domingo
print " el numero marcado es :".$dias."<br>";

switch ($dias) {
	case '01':
		print "el dia es : LUNES";
		break;
	case '02';
		print "el dia es : MARTES";
		break;
	case '03':
		print "el dia es : MIERCOLES";
		break;
	case '04';
		print "el dia es : JUEVES";
		break;
	case '05':
		print "el dia es : VIERNES";
		break;
	case '06';
		print "el dia es : SABADO";
		break;		
	case '07':
		print "el dia es : DOMINGO";
		break;
	default:
		print "TIENE QUE INDICAR CORRECTAMENTE EL NUMERO DEL DIA";
		break;
}

?>