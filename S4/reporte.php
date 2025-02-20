
<?php
//variales recibidas con el metod post
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$notaaccess=$_POST['access'];
$notaword=$_POST['word'];
$notapowerpoint=$_POST['powerpoint'];
$promedio=($notaaccess+$notaword+$notapowerpoint)/3;
print "<h1>REPORET DE NOTAS </h1>";
print "<br>";
print "Estimado sr".$nombre."según los cursos que están actualmente activos, sus notas son: <br>";
print "ACCESS: ".$notaaccess;
print "word: ".$notaword;
print "POWERPOINT: ".$notapowerpoint;
print "Su promedio es: ".$promedio;
print "GRACIAS........";

?>