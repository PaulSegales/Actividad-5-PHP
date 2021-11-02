<?php
include("conexion.php");
$con=conectar();


$nom_autor=$_POST['nom_autor'];



$sql="INSERT INTO autor(`nom_autor`) VALUES ('$nom_autor')";
//INSERT INTO usuarios (nombre, apellidos) VALUES ('Juan','Garcia Pérez');
$query= mysqli_query($con,$sql);
echo $nom_autor;

if($query){
    Header("Location: autor.php");
    
}else {

    echo "<h1>hola no ingreso <h1>";
}
?>