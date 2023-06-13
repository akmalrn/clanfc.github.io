<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "database";
$connection = mysqli_connect($host,$user,$password,$database);
if($connection->connect_error)
{
    die("Koneksi Gagal");
}
?>