<?php
$host = "localhost";
$user = "root";
$password = "12345678";
$db = "db_portofolio";
// Create connection
$kon = mysqli_connect($host,$user,$password);

$hasil=mysqli_select_db($kon,$db);

?>