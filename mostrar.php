<?php
//incluye la clase Libro y CrudLibro
require_once('clases/crud_libro.php');
require_once('clases/libro.php');
$crud = new CrudLibro();
//obtiene todos los libros con el método mostrar de la clase crud
$listaLibros = $crud->mostrar();
?>

<html lang="es">
    <head>
        <title>Mostrar Libros</title>
    </head>
    <body>
        <table border="1" style="border: 2px solid #ff0000; border-collapse: collapse;">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Autor</th>
                    <th>Edición</th>
                    <th>Actualizar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listaLibros as $libro) {?>
                <tr>
                    <td><?= $libro->getNombre() ?></td>
                    <td><?= $libro->getAutor() ?></td>
                    <td><?= $libro->getAnio_edicion() ?> </td>
                    <td>
                        <a href="actualizar.php?id=<?= $libro->getId() ?>&action=a">Actualizar</a>
                    </td>
                    <td>
                        <a href="clases/controller_book.php?id=<?= $libro->getId() ?>&action=e">Eliminar</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <a href="index.php">Volver</a>
    </body>
</html>