<?php
include("conexion.php");
$con=conectar();

$codigo=$_POST['codigo'];
$nom_std=$_POST['nom_std'];
$carrera=$_POST['carrera'];
$telefono=$_POST['telefono'];

$sql="INSERT INTO estudiante(codigo,nom_std,carrera,telefono) VALUES ('$codigo','$nom_std','$carrera','$telefono')";
echo "$codigo";
echo "$nom_std";
echo "$carrera";
echo "$telefono";
$query= mysqli_query($con,$sql);


if($query){
    Header("Location: estudiante.php");
    
}else {

    echo "<h1>hola no ingreso <h1>";
}
?>