<?php
include("conn/conexion.php");
$id = $_GET['item'];

$sql = "DELETE FROM libros WHERE id = $id";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Eliminar libro</title>
	<meta charset="utf-8">
</head>
<body>
	<table border="1" width="80%">
		<?php
		if(mysqli_query($conn, $sql)) {
			echo "<tr><td> Libro eliminado con éxito </td></tr>";
		} else {
			echo "0 results";
		}

		mysqli_close($conn);
		?>
	</table>
	<a href="eliminar-libro.php">Regresar</a>
</body>
</html>