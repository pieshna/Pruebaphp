<?php
include "conexion.php";

$alumno = $_POST['SelectAlumno'];
$asistencia = $_POST['Asistencia'];
$descripcion = $_POST['Descripcion'];
$fecha = $_POST['Fecha'];

$sql="INSERT INTO asistencia (id_Alumno,Asistencia,Descripcion,Fecha) values (".$alumno.",".$asistencia.",'".$descripcion."','".$fecha."')";

if(mysqli_query($conexion,$sql)){
    header("Location: index.php");
}else{
    echo "error";
}

//echo $sql;