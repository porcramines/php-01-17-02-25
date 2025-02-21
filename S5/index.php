<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
$tacna="Tacna";
$tarata="Tarata";
$candarave="Candarave";
$jorgebasadre="Jorge Basadre";
$aceituna="Aceituna";
$oregano="Oregano";
$papa="Papa";
$tuna="Tuna";
$doscientos="200";
$setenta="70";
$ceintosetenta="170";
$dies="10";
?>
<h1>TABLA DE PRODUCCION</h1>
<table border="1px">
	<tr><!-- fila -->
		<th>PROVINCIA</th><!-- columna -->
		<th>PRODUCCION</th><!-- columna -->
		<th>TONELADAS</th><!--columna -->
	</tr>
	<tr><!-- fila -->
		<td><?php print $tacna  ?> </td><!-- columna -->
		<td><?php print $aceituna ?></td><!-- columna -->
		<td><?php print $doscientos ?></td><!--columna -->
	</tr>

</table>

<?php
print "<h1>REPORTE DE PRODUCCION </h1> <BR>";
print "La provincia de ".$tacna." tiene una produccion de ".$doscientos." toneladas de. ".$aceituna;
?>



</body>
</html>