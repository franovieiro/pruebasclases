<html>
	<head>
		<title>Administrador de Libros</title>
	</head>	
	<body>
		<header>
			Bienvenido al administrador de libros<br>
            La lógica aquí será:
            <ol>
                <li>En la vista ejecuto un evento, por ejemplo un botón de lanzar un formulario para guardar algo</li>
                <li>Ese formulario me lleva al CONTROLADOR</li>
                <li>En el CONTROLADOR recojo los datos y hago lo que necesite con ellos.</li>
                <li>En caso de tener que conectar con la BD, me voy al MODELO de mi clase y realizo la consulta que sea</li>
                <li>Cuando he terminado el modelo me devuelve a la vista de destino con los datos que sean</li>
            </ol>
		</header>
		<table border="1">
			<tr>
				<td><a href="ingresar.php">Ingresar</a></td>
			</tr>
			<tr>
				<td><a href="mostrar.php">Ver</a></td>
			</tr>
		</table>
		<footer>
			Administrar Libro 2017
		</footer>
	</body>
</html>