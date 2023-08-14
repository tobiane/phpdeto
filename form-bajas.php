<?php
include 'menu.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario de Bajas</title>
	<link rel="stylesheet" href="css/formAltas.css">
</head>
<body style="font-family: Verdana, Geneva, Tahoma, sans-serif;">

<div class="container">
	<h3 class="altaTitulo">FORMULARIO DE BAJA</h3>
	<form class="altaInput" action="bajas.php" method="POST" >
	    <div class="grupoInputs">
		<label for="apellido">Apellido:</label>
        <input type="text" name="apellido"><br>	
        </div>

		<div class="grupoInputs">
		<label for="apellido">Correo:</label>
        <input type="text" name="correo"><br>	
        </div>

		<div class="grupoInputs">
		<label for="apellido">Contraseña:</label>
        <input type="text" name="contraseña"><br>	
        </div>
		
		<div class="btn-submit">
		<input type="submit" value="Eliminar"><br>
        </div>
	</form>
</div>
	
</body>
</html>