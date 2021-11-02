<?php
include("conexion.php");
$con=conectar();

$titulo=$_POST['titulo'];
$stock=$_POST['stock'];
$autor=$_POST['autor'];
$editorial=$_POST['editorial'];


$sql="INSERT INTO libro(titulo,stock,autor,editorial) VALUES ('$titulo','$stock','$autor','$editorial')";

$query= mysqli_query($con,$sql);


if($query){
    Header("Location: libro.php");
    
}else {

    echo "<h1>hola no ingreso <h1>";
}
?>