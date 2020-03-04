<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  action="envio.php" method="post">
    <?php
    include "conexion.php";
    $maestro="2";
    $buscarMaestro="SELECT maestro.Nombre FROM maestro where id_Maestro=".$maestro;
    $resultadoMaestro=mysqli_query($conexion,$buscarMaestro);
    while($maestroEncontrado=mysqli_fetch_array($resultadoMaestro)){

        echo("<p>Maestro: ".$maestroEncontrado['0']."</p>");
    }

    $BuscarAlumno="SELECT alumnos.id,alumnos.Nombre FROM alumnos
    INNER JOIN grado ON grado.id_Grado=alumnos.id_Grado
    INNER JOIN maestro ON grado.id_Grado=maestro.id_Grado AND maestro.id_Maestro=".$maestro;

    $resultado=mysqli_query($conexion,$BuscarAlumno)or die("Error al consultar");

    ?>
    <p>ALUMNO:</p>
    <select name="SelectAlumno" id="SelectAlumno">
    
    <?php
    while($consulta=mysqli_fetch_array($resultado)){

        echo("<option value=".$consulta["0"].">".$consulta["1"]."</option>");
    }
    ?>
    </select>
    <select name="Asistencia" id="Asistencia">
    <option value="1">Vino</option>
    <option value="0">No vino</option>
    </select>


<!--Descripcion de asistencia-->
    <select name="Descripcion" id="Descripcion">
    <option value="Puntual">Puntual</option>
    <option value="Vino tarde">Vino tarde</option>
    <option value="Se fue tarde">Se fue tarde</option>
    <option value="No vino">No vino</option>
    </select>

    <?php
    echo("<input type='text' name='Fecha' value=".date('y-m-d'));
    ?> >
    <input type="submit" value="ok">


</form>
</body>
</html>