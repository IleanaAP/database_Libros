<?php
include("conn/conexion.php");

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$editorial = $_POST['editorial'];
$anio_publicacion = $_POST['anio_publicacion'];
$genero = $_POST['genero'];
$num_paginas = $_POST['num_paginas'];
$precio = $_POST['precio'];
$descripcion = $_POST['descripcion'];

$sql = "INSERT INTO libros (titulo, autor, editorial, anio_publicacion, genero, num_paginas, precio, descripcion) VALUES ('$titulo', '$autor', '$editorial', $anio_publicacion, '$genero', $num_paginas, $precio, '$descripcion')";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Agregar Libro</title>
</head>
<body>
	<a href="agregar-libro.php">Regresar a agregar libro</a>
	<table border="1" width="80%">
		<?php
		if (mysqli_query($conn, $sql)) {
			echo "<tr><td>Libro agregado con éxito</td></tr>";
		} else {
			echo "0 results";
		}
		mysqli_close($conn);
		?>
	</table>
</body>
</html>