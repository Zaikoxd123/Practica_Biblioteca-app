<?php
//Tabla 1: Libros
 //consulta a SQL
 $sqlConsultapruebas = $conn->query("SELECT * FROM libros");

 //Verificacion de errores
 if($sqlConsultapruebas === false){
    die("Error de consulta SQL: " . $conn>-error);
 }

 if($sqlConsultapruebas->num_rows === 0){
    echo "No se encontraron resultados en la tabla 'pruebas'.";
 }
 else{
    while($fila = $sqlConsultapruebas->fetch_assoc()){
        echo "ID: " . $fila["id"] . "- Titulo: " . $fila["titulo"] . "- Autor: " . $fila["autor"]. "- Año: " . $fila["anio"]. "- Editorial: " . $fila["editorial"];
        ?>
        <table border="1">
            <th>
                <td>ID</td>
                <td>titulo</td>
                <td>Autor</td>
                <td>Año</td>
                <td>Editorial</td>
            </th>
            <tr>
                <td></td>
                <td><?php echo $fila["id"]; ?></td>
                <td><?php echo $fila["titulo"]; ?></td>
                <td><?php echo $fila["autor"]; ?></td>
                <td><?php echo $fila["anio"]; ?></td>
                <td><?php echo $fila["editorial"]; ?></td>
            </tr>
        </table>
        <?php
    }
}
?>