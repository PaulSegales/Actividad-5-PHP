<?php

include("conexion.php");
$con=conectar();

$cod_libro=$_POST['cod_libro'];
$titulo=$_POST['titulo'];
$stock=$_POST['stock'];
$autor=$_POST['autor'];
$editorial=$_POST['editorial'];

$sql="UPDATE libro SET  titulo='$titulo', stock='$stock', autor ='$autor', editorial ='$editorial' WHERE cod_libro='$cod_libro'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: libro.php");      
    }
?>