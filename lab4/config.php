<?php 
$host = 'localhost';
$user = 'root';
$pass = 'abdo';
$database = 'phplab';


$conn = mysqli_connect($host, $user, $pass, $database);
if (!$conn) {
    die("connection failed : " . mysqli_connect_error());
}
?>