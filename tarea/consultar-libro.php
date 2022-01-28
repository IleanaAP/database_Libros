<?php
include("conn/conexion.php");

$sql = "SELECT * FROM libros";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Consulta de libros</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		<a class="navbar-brand" href="index.html">Libros</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu" adia-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarMenu">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="consultar-libro.php">Consultar</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="agregar-libro.php">Agregar</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="modificar-libro.php">Modificar</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="eliminar-libro.php">Eliminar</a>
				</li>
				<li class="nav-item dropdown-active">
					<a class="nav-link dropdown-toggle" href="portafolio.html" id="dropdownPortafolio" data-toggle="dropdown" aria-expanded="false">Portafolio</a>
					<div class="dropdown-menu" aria-labelledby="dropdownPortafolio">
						<a class="dropdown-item" href="portafolio.html">General</a>
						<a class="dropdown-item" href="calculadora.html">Calculadora</a>
						<a class="dropdown-item" href="divisas.html">Divisas</a>
						<a class="dropdown-item" href="personal2.html">Página personal</a>
						<a class="dropdown-item" href="areas.html">Áreas</a>
					</div>
				</li>
			</ul>

			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="text" placeholder="Buscar libro" aria-label="Busqueda">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="btnBuscar">Buscar</button>
			</form>
		</div>
	</nav>

	<br><br><br>
		<div class="container">
			<br>
			<table class="table table-striped table-bordered table-hover table-sm">
				<thead class="thead-dark">
					<tr>
						<th scope="col">Id</th>
						<th scope="col">Título</th>
						<th scope="col">Autor</th>
						<th scope="col">Editorial</th>
						<th scope="col">Año de publicación</th>
						<th scope="col">Género</th>
						<th scope="col">Número de páginas</th>
						<th scope="col">Precio</th>
						<th scope="col">Descripción</th>
						<th scope="col">Portada</th>
					</tr>
				</thead>

				<tbody>
					<?php
					if (mysqli_num_rows($result) > 0){
						while ($row = mysqli_fetch_assoc($result)) {
							echo "<tr><td>".$row["id"]."</td><td>".$row["titulo"]."</td><td>".$row["autor"]."</td><td>".$row["editorial"]."</td><td>".$row["anio_publicacion"]."</td><td>".$row["genero"]."</td><td>".$row["num_paginas"]."</td><td>".$row["precio"]."</td><td>".$row["descripcion"]."</td><td>".$row["img_portada"]."</td>";
						}
					} else {
						echo "0 results";
					}
					mysqli_close($conn);
					?>
				</tbody>
			</table>

			<br>
			<a href="index.html">Regresar</a>
			<hr>
		</div>
	
	<footer class="container">
		<p>© Ileana Aguilar</p>
	</footer>

</body>
</html>