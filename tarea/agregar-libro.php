<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Agregar Libro</title>
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
		<form action="insertar.php" method="POST">
			<legend>Datos del libro</legend>
			<div class="form-group">
				<label for="inputTitulo">Título</label><input type="text" class="form-control" name="titulo">
			</div>
			<div class="form-group">
				<label for="inputAutor">Autor</label><input type="text" class="form-control" name="autor">
			</div>
			<div class="form-row">
				<div class="form-group col-md-8">
					<label for="inputEditorial">Editorial</label><input type="text" class="form-control" name="editorial">
				</div>
				<div class="form-group col-md-4">
					<label for="inputAnio">Año de publicación</label><input type="number" class="form-control" name="anio_publicacion">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="inputGenero">Género</label><input type="text" class="form-control" name="genero">
				</div>
				<div class="form-group col-md-3">
					<label for="inputPaginas">Número de páginas</label><input type="number" class="form-control" name="num_paginas">
				</div>
				<div class="form-group col-md-3">
					<label for="inputPrecio">Precio</label><input type="number" class="form-control" name="precio">
				</div>
			</div>
			<div class="form-group">
				<label for="inputDescripcion">Descripción</label><input type="text" class="form-control" name="descripcion">
			</div>
			<div class="form-group">
				<label for="inputPortada">Imagen de la portada</label><input type="file" class="form-control-file" name="imgPortada">
			</div>
			<button type="submit" class="btn btn-primary btn-lg btn-block" name="btnAgregar">Agregar</button>
		</form>

		<br>
		<a href="index.html">Regresar</a>
		<hr>
	</div>

	<footer class="container">
		<p>© Ileana Aguilar</p>
	</footer>
	
</body>
</html>