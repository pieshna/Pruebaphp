<?php
$servername="localhost:3309";
$username="root";
$database="escuela";
$password="";

$conexion = mysqli_connect($servername,$username,$password) or die ("Can not connect with data base server");
$db = mysqli_select_db($conexion,$database) or die("Can not connect with data base");


