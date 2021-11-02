<?php
include("conexion.php");
$con=conectar();

$cod_libro=$_GET['id'];

$sql="DELETE FROM libro  WHERE cod_libro='$cod_libro'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: libro.php");
    }else{
        echo "No ingreso";
        echo $codigo;
    }
?>
