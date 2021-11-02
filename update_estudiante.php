<?php

include("conexion.php");
$con=conectar();

$codigo=$_POST['codigo'];
$nom_std=$_POST['nom_std'];
$carrera=$_POST['carrera'];
$telefono=$_POST['telefono'];

$sql="UPDATE estudiante SET  nom_std='$nom_std',carrera='$carrera', telefono='$telefono' WHERE codigo='$codigo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: estudiante.php");
       
    }
?>