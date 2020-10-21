<?php
 require 'conexion.php';
  
 $nombre  = $_POST['nombre'];
 $apellido  = $_POST['apellido'];
 $email = $_POST['email'];

$insertar = "INSERT INTO Tabla2(Usuario) VALUES ('$nombre') ";
//"INSERT INTO Tabla2(Usuario, CANT, CODIGO) VALUES ('$name','$email','$cantidad')";
$query = mysqli_query($conectar, $insertar);

if($query){

   echo "<script> alert('correcto');
    location.href = '../index.html';
   </script>";

}else{
    echo "<script> alert('incorrecto');
    location.href = '../index.html';
    </script>";
}






?>