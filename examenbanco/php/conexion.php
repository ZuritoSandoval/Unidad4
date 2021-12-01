<?php
$servername="jtb9ia3h1pgevwb1.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$database="k66l01j24frl8b7e";
$username="haudy572ox2kahpi";
$password="vdraw3kbr6fhdy2u";

$conn=mysqli_connect($servername,$username, $password, $database);

if (!$conn){
    die("Connection failed" .mysqli_connect_error());
}
?>