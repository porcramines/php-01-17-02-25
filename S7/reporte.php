<?php
$cursos=$_POST['cursos'];
$materia=$_POST['materia'];
$apellido=$_POST['apellido'];
$fecha=$_POST['fecha'];
$resultado=$_POST['resultado'];
$observaciones=$_POST['observaciones'];

print "<h1>reporte general</h1> <br>	";
print $cursos.$materia.$apellido.$fecha.$resultado.$observaciones;
?>