<?php
include '../forms/menu.php';
?>
<html lang="es">
	<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario de Altas</title>
	<link rel="stylesheet" href="../css/respuestas.css">
	</head>
	<body style="font-family: Verdana, Geneva, Tahoma, sans-serif;">
	<h3 class="tablatitulo">LISTADO DE LOS REGISTRO DE LA TABLA</h3>

	<table class="tabla">
		<caption class="ttitulo">Lista de usuarios</caption>
		<thead class="ttitulo">
			<tr>
			<th>id</th>
			<th>Apellido</th>
			<th>Nombre</th>
			<th>Edad</th>
			<th>Correo</th>
			<th>Contraseña</th>
			<th>Usuario</th>
			<th>PIN</th>
			<th>Archivo</th>
			
			</tr>
		</thead>
	<?php 

$base = "gestion";
$Conexion =  mysqli_connect("localhost","root","",$base);

$cadena= "SELECT * FROM personas ";

$consulta = mysqli_query($Conexion,$cadena);

while(  $registro = mysqli_fetch_row($consulta)   ){
	echo "<tr class='trmain'>";
	echo "<th>".$registro[0]."</th>"."<th>".$registro[1]."</th>"."<th>".$registro[2]."</th>"."<th>".$registro[3]."</th><th>".$registro[4]."</th>"."<th>".$registro[5]."</th>"."<th>".$registro[6]."</th>"."<th>".$registro[7]."</th>"."<th><img src='data:image/jpeg;base64,".base64_encode($registro[8])."'width='100px'/></th>";
	echo "</tr>";
}
 ?>
    </table>
	</body>
</html>




