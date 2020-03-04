<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
<h4>ASISTENCIAS</h4>
<table border="1">
<tr>
<th>Alumno</th>
<th>Grado</th>
<th>Asistencia</th>
<th>Tipo de asistencia</th>
<th>Fecha</th>
<th>Modificar</th>
<th>Eliminar</th>
</tr>
    <?php
    include "conexion.php";
    $maestro="2";
    $sql="SELECT alumnos.Nombre,grado.Nombre,asistencia.Asistencia,asistencia.Descripcion,asistencia.Fecha FROM alumnos
    INNER JOIN grado ON grado.id_Grado=alumnos.id_Grado
    INNER JOIN asistencia ON asistencia.id_Alumno=alumnos.id
    INNER JOIN maestro ON maestro.id_Maestro=".$maestro;
    $respuesta=mysqli_query($conexion,$sql) or die("error en la consulta");
    while($consulta=mysqli_fetch_array($respuesta)){
        echo "<tr>";
        echo ("<td>".$consulta["0"]."</td>");
        echo ("<td>".$consulta["1"]."</td>");
        if($consulta['2']=="1"){
            echo ("<td>Asistio</td>");
        }else{
            echo ("<td>No asistio</td>");
        }
        echo ("<td>".$consulta["3"]."</td>");
        echo ("<td>".$consulta["4"]."</td>");
        echo ("<td><a href='modificar.php'>Modificar</a></td>");
        echo ("<td><a href='#'>Eliminar</a></td>");
        echo "</tr>";
    }
    ?>
</table>
    <a href="ingreso.php">REGISTRAR ASISTENCIA</a>
    </center>
</body>
</html>