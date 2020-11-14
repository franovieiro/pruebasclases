<?php
	//incluye la clase Libro y CrudLibro
	require_once('clases/crud_libro.php');
	require_once('clases/libro.php');
	$crud = new CrudLibro();
	$libro = new Libro();
	//busca el libro utilizando el id, que es enviado por GET desde la vista mostrar.php
	$libro = $crud->obtenerLibro($_GET['id']);
?>
<html>
<head>
	<title>Actualizar Libro</title>
</head>
<body>
	<form action='clases/administrar_libro.php' method='post'>
		<table>
			<tr>
				<input type='hidden' name='id' value='<?=$libro->getId()?>'>
				<td>Nombre libro:</td>
				<td> <input type='text' name='nombre' value='<?=$libro->getNombre()?>'></td>
			</tr>
			<tr>
				<td>Autor:</td>
				<td><input type='text' name='autor' value='<?=$libro->getAutor()?>' ></td>
			</tr>
			<tr>
				<td>Fecha Edición:</td>
				<td><input type='text' name='edicion' value='<?=$libro->getAnio_edicion()?>'></td>
			</tr>
			<input type='hidden' name='actualizar' value='actualizar'>
		</table>
		<input type='submit' value='Guardar'>
		<a href="index.php">Volver</a>
	</form>
</body>
</html>