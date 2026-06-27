<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 1 Programacion Web</title>
</head>
<body>
<H1>Practica 1 de programacion web: Biblioteca escolar</H1>
<h3>Esta practica debe de mostrar los siguientes puntos para su evaluacion</h3>
<ul>
    <li>Crear un nuevo proyecto</li>
    <li>Crear una base de datos para el proyecto</li>
    <li>Crear la conexion a la base de datos</li>
    <li>Generar la consulta a la base de datos</li>
    <li>Mostrar la informacion recuperada por la lista</li>
    <li>El objetivo es con dos tablas que cumplan con todo lo anterior</li>
</ul>
</body>
</html>

<!-- conexion base de datos -->
 <?php
 include 'conn.php';
 ?>
<h3>Tabla 1: Libros </h3>
<?php
 include 'Libros.php';
 ?>
<h3>Tabla 2: Alumnos</h3>
<?php
 include 'Alumnos.php';
 ?>