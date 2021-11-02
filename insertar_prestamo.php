<?php
include("conexion.php");
$con=conectar();

$cod_pres=$_POST['cod_pres'];
$codigo=$_POST['codigo'];
$cod_libro=$_POST['cod_libro'];
$fech_dev=$_POST['fech_dev'];

$sql="INSERT INTO prestamo(cod_pres,codigo,cod_libro,fech_dev) VALUES ('$cod_pres','$codigo','$carrera','$telefono')";
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