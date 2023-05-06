<?php
$mysqli = new MySQLi('localhost', 'root', '12345678', 'db_portofolio');
if($mysqli->connect_errno){
    die('Error: '. $mysql->connect_error);
}

if(isset($_POST['nama']))
{
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];

    $result = $mysqli->query("INSERT INTO `tb_comment` (`nama`, `email`, `pesan`)
    VALUES ('".$nama."', '".$email."', '".$pesan."')");
}

header('Location: index.php');
?>