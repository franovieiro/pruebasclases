<html lang="es">
    <head>
        <title> Ingresar Libro</title>
    </head>
    <body>
        <header>
        Ingresa los datos del Libro
        </header>
        <form action='clases/controller_book.php' method='post'>
            <table>
                <tr>
                    <td><label for="nombre">Nombre libro:</label></td>
                    <td>
                        <label>
                            <input type='text' name='nombre'>
                        </label>
                    </td>
                </tr>
                <tr>
                    <td><label for="autor">Autor:</label></td>
                    <td>
                        <label>
                            <input type='text' name='autor' >
                        </label>
                    </td>
                </tr>
                <tr>
                    <td><label for="edicion">Fecha Edición:</label></td>
                    <td>
                        <label>
                            <input type='text' name='edicion' >
                        </label>
                    </td>
                </tr>
                <input type='hidden' name='insertar' value='insertar'>
            </table>
            <input type='submit' value='Guardar'>
            <a href="index.php">Volver</a>
        </form>
    </body>

</html>