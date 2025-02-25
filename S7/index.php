<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<form method="post" action="reporte.php">
	<table border="1px">

		<tr>
			<th colspan="4">registro de calificaciones</th>

		</tr>
		<tr>
			<td colspan="4">cursos:

				<input type="text" value="Access" name="cursos">
			</td>
		</tr>
		<tr>
			<td colspan="4">materia:
				<input type="text" value="computacion" name="materia"></td>
		</tr>
		<tr>
			<td>apellido y nombre</td>
			<td>fecha</td>
			<td>resultado</td>
			<td>observaciones</td>
		</tr>
		<tr>
			<td><input type="text" value="vizcarra lucas" name="apellido"></td>
			<td><input type="text" value="25/02/2025" name="fecha"></td>
			<td><input type="text" value="aprobado" name="resultado"></td>
			<td><input type="text" value="sin observaciones" name="observaciones"></td>
		</tr>
		<tr>
			<td>boton enviar
				<input type="submit" value="Enviar" name="">
			</td>
		</tr>
	</table>

</form>

</body>
</html>


<?php

?>


