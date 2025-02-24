<?php
$juan=$_POST['fechajuan'];
$pablo=$_POST['fechapablo'];
$lucas=$_POST['fechalucas'];
$nombrejuan="JUAN";
$nombrepablo="PABLO";
$nombrelucas="LUCAS";
?>
<h1>REPORTE PAGOS</h1>
<table border="1px">
		<tr>
			<td>
				<?php print $nombrejuan; ?>

				<br>
				reporte de pagos del estudiante:
				<br>
				<?php print "FECHA:".$juan;?>
				
			</td>
		</tr>
		<tr>
			<td>
				<?php print $nombrepablo; ?>

				<br>
				reporte de pagos del estudiante:
				<br>
				<?php print "FECHA:".$pablo;?>
				
			</td>
		</tr>
				<tr>
			<td>
				<?php print $nombrelucas; ?>

				<br>
				reporte de pagos del estudiante:
				<br>
				<?php print "FECHA:".$lucas;?>
				
			</td>
		</tr>
</table>