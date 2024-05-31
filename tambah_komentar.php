<?php
// tambah_komentar.php
include('connect.php');

session_start();
if(!isset($_SESSION['id'])){
    echo "Sesion tidak ditemukan";
}

// Check connection
if ($is_connect->connect_error) {
    die("Connection failed: " . $is_connect->connect_error);
}

$id_buku = $_POST['id_buku'];
$id_user = $_SESSION['id'];
$komentar = $is_connect->real_escape_string($_POST['komentar']);

$sql = "INSERT INTO review VALUES ('', $id_buku, $id_user, '$komentar')";

if ($is_connect->query($sql) === TRUE) {
    header('Location: detail.php?id=' . $id_buku);
    exit(); // Penting untuk memastikan tidak ada output lain setelah redirect
} else {
    echo "Error: " . $sql . "<br>" . $is_connect->error;
}

$is_connect->close();
?>
