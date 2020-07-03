<!DOCTYPE html>
<?php
	$Fecha_Nacimiento = $_POST["Fecha_Nacimiento"];
	$fecha_actual = date("d-m-Y");
	$edad=edad_calculo($Fecha_Nacimiento,$fecha_actual);	
		
	function edad_calculo($fechaIN,$fechaFI){
		$inicio = date_create($fechaIN);
		$fin = date_create($fechaFI);
		$interval = date_diff($inicio,$fin);
		
		$tiempo=array();
		foreach($interval as $resp){
			$tiempo[]=$resp;
		}
		return $tiempo;
	}
?>
<html>

<head>
	<title>Calcula tu edad</title>
</head>

<body>
	<div align="center">
		<h1> Edad actual </h1>
		<p> Desde <?= $Fecha_Nacimiento?> hasta hoy tienes una edad de <?= $edad[0]?> años con <?= $edad[1]?> meses y <?= $edad[2]?> dias</p>
		<button class="enlace" role="link" onclick="window.location='../index.html'">Volver Al Menú Principal</button>
	</div>

</body>

</html>