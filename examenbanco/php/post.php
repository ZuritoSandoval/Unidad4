<?php
require ("conexion.php");


$nombre="";
$prestamo="";
$plazo="";
$email="";
if (isset($_POST["nombre"]))
{
    $nombre=$_POST["nombre"];
}

if(isset($_POST["prestamo"])){
    $prestamo = $_POST["prestamo"];
}
if(isset($_POST["plazo"])){
    $plazo = $_POST["plazo"];
}
if(isset($_POST["email"])){
    $email = $_POST["email"];
}

$sql="INSERT INTO prestamo (nombre,plazos,prestamo)  VALUES ('$nombre','$plazo','$prestamo')";

if(mysqli_query($conn, $sql)){
    echo json_encode("Ok");
} else {
    echo "Error: " .$sql. "<br>" .mysqli_error($conn);
}

?>