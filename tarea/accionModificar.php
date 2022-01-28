<?php
include("conn/conexion.php");

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$editorial = $_POST['editorial'];
$anio_publicacion = $_POST['anio_publicacion'];
$genero = $_POST['genero'];
$num_paginas = $_POST['num_paginas'];
$precio = $_POST['precio'];
$descripcion = $_POST['descripcion'];

$sql = "UPDATE libros SET titulo = '$titulo', autor = '$autor', editorial = '$editorial', anio_publicacion = '$anio_publicacion', genero = '$genero', num_paginas = '$num_paginas', precio = $precio, descripcion = '$descripcion' WHERE id = $id";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Actualizar libro</title>
	<meta charset="utf-8">
</head>

<body>
<table border="1" width="80%">
	<?php
	if (mysqli_query($conn, $sql)) {
		echo "<tr><td> Libro modificado con éxito </td></tr>";
	} else {
		echo "0 results";
	}
	mysqli_close($conn);
	?>
</table>

<a href="modificar-libro.php">Regresar</a>

</body>
</html>