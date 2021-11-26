<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "bag_login";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Gagal tersambung.')</script>");
}

?>
