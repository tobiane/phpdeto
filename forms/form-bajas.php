<?php
include '../forms/menu.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario de Bajas</title>
	<link rel="stylesheet" href="../css/formAltas.css">
</head>
<body style="font-family: Verdana, Geneva, Tahoma, sans-serif;">

<div class="container">
	<h3 class="altaTitulo">FORMULARIO DE BAJA</h3>
	<form class="altaInput" action="../funcionalidad/bajas.php" method="POST" >
	    <div class="grupoInputs">
		<label for="pin">PIN:</label>
        <input type="number" name="pin"><br>	
        </div>

		
		<div class="btn-submit">
		<input type="submit" value="Eliminar"><br>
        </div>
	</form>
</div>
	
</body>
</html>