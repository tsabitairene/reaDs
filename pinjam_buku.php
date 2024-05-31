<?php
include('connect.php');

// Pastikan session telah dimulai
session_start();
if (!isset($_SESSION['id'])) {
    echo "Session tidak ditemukan.";
    exit();
}

// Pastikan data buku diterima dari formulir
if (!isset($_POST['id_buku'])) {
    echo "Data buku tidak diterima.";
    exit();
}

// Ambil data buku dan user dari formulir
$id_buku = $_POST['id_buku'];
$id_user = $_SESSION['id'];

// Query untuk memasukkan data ke database
$sql = "INSERT INTO pinjam_buku VALUES ('', $id_buku, $id_user, NOW(), '', 1, 1)";
if (mysqli_query($is_connect, $sql)) {
    // Redirect ke halaman detail.php setelah berhasil meminjam buku
    header('Location: detail.php?id=' . $id_buku);
    exit(); // Penting untuk memastikan tidak ada output lain setelah redirect
} else {
    echo "Gagal meminjam buku: " . mysqli_error($is_connect);
}

// Tutup koneksi ke database
mysqli_close($is_connect);
?>