<?php
//incluye la clase Libro y CrudLibro
require_once('crud_libro.php');
require_once('libro.php');

$crud = new CrudLibro();
$libro = new Libro();

//ESTO ES EL CONTROLADOR DE LIBROS

// si el elemento insertar no viene nulo llama al crud e inserta un libro
if (isset($_POST['insertar'])) {
    $libro->setNombre($_POST['nombre']);
    $libro->setAutor($_POST['autor']);
    $libro->setAnio_edicion($_POST['edicion']);
    //llama a la función insertar definida en el crud
    $crud->insertar($libro);
    header('Location: /proyectos/clases/index.php');

// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el libro
}elseif (isset($_POST['actualizar'])){
    $libro->setId($_POST['id']);
    $libro->setNombre($_POST['nombre']);
    $libro->setAutor($_POST['autor']);
    $libro->setAnio_edicion($_POST['edicion']);
    $crud->actualizar($libro);
    header('Location: /proyectos/clases/index.php');

// si la variable action enviada por GET es == 'e' llama al crud y elimina un libro
}elseif ($_GET['action']=='e') {
    $crud->eliminar($_GET['id']);
    header('Location: /proyectos/clases/index.php');

// si la variable action enviada por GET es == 'a', envía a la página actualizar.php
}elseif($_GET['action']=='a'){
    header('Location: /proyectos/clases/actualizar.php');
}
?>