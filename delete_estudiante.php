<?php

include("conexion.php");
$con=conectar();

$codigo=$_GET['id'];

$sql="DELETE FROM estudiante  WHERE codigo='$codigo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: estudiante.php");
    }else{
        echo "No ingreso";
        echo $codigo;
    }
?>
