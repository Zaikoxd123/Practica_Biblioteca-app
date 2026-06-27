<?php
//Tabla 1: Libros
 //consulta a SQL
 $sqlConsultapruebas = $conn->query("SELECT * FROM alumnos");

 //Verificacion de errores
 if($sqlConsultapruebas === false){
    die("Error de consulta SQL: " . $conn>-error);
 }

 if($sqlConsultapruebas->num_rows === 0){
    echo "No se encontraron resultados en la tabla 'pruebas'.";
 }
 else{
    while($fila = $sqlConsultapruebas->fetch_assoc()){
        echo "ID: " . $fila["id"] . "- Nombre del Alumno: " . $fila["nombre"] . "- Apellido: " . $fila["apellido"] . "- Grupo: " . $fila["grupo"];
        ?>
        <table border="1">
            <th>
                <td>ID</td>
                <td>Nombre del Alumno</td>
                <td>Apellido</td>
                <td>Grupo</td>
            </th>
            <tr>
                <td></td>
                <td><?php echo $fila["id"]; ?></td>
                <td><?php echo $fila["nombre"]; ?></td>
                <td><?php echo $fila["apellido"]; ?></td>
                <td><?php echo $fila["grupo"]; ?></td>
            </tr>
        </table>
        <?php
    }
}
?>