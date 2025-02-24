<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form action="reporte.php" method="post">
	<table border="1px">
		<h1>RELACION DE PAGOS</h1>
		<tr><!--FILA 1 -->
			
			<th>ESTUDIANTE</th><!-- LA PRIMERA COLUMNA -->
			<th>FECHA DE PAGO</th>
		</tr>
		<tr><!--FILA 2 -->
			<td>Juan</td><!-- COLUMNA1 DE LA FILA 2 -->
			
			<td><input type="text" value="25/02/2023" name="fechajuan"></td>
		</tr>
		<tr>
			<td>Pablo</td>
			<td><input type="text" value="21/01/2023" name="fechapablo"></td>
		</tr>
		<tr>
			<td>Lucas</td>
			<td><input type="text" value="16/01/2023" name="fechalucas"></td>
		</tr>
		<tr>
			<td colspan="2">
			<input type="submit" value="enviar" name="">		
			</td>
			
		</tr>
		
	</table>

</form>
</body>
</html>