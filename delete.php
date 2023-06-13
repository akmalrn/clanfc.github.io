<?php
include("koneksi.php");
$id = $_GET['nomor'];
$hasil = mysqli_query($connection, "DELETE FROM clanfc WHERE nomor=$id");
header("Location:center.php");
?>