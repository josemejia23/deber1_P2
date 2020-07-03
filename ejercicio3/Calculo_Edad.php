<!DOCTYPE html>
<?php
$Fecha_Nacimiento = $_POST["Fecha_Nacimiento"];
$fecha_actual = date("d-m-Y");
$res = strtotime($fecha_actual) - strtotime($Fecha_Nacimiento);
$edad = intval($res / 60 / 60 / 24 / 365.25);

?>
<html>

<head>
	<title>Calcula tu edad</title>
</head>

<body>
	<div align="center">
		<h1> Edad actual </h1>
		<p> Desde <?= $Fecha_Nacimiento ?> hasta hoy tienes una edad de <?= $edad ?> años</p>
		<button class="enlace" role="link" onclick="window.location='../index.html'">Volver Al Menú Principal</button>
	</div>

</body>

</html>