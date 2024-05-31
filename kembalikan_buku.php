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

// Query untuk memperbarui status buku menjadi dikembalikan (is_approve = 2)
$sql = "UPDATE pinjam_buku SET is_approved = 2, tanggal_kembali = NOW() WHERE id_buku = $id_buku AND id_user = $id_user AND is_approved = 1";
if (mysqli_query($is_connect, $sql)) {
    // Redirect ke halaman detail.php setelah berhasil mengembalikan buku
    header('Location: detail.php?id=' . $id_buku);
    exit(); // Penting untuk memastikan tidak ada output lain setelah redirect
} else {
    echo "Gagal mengembalikan buku: " . mysqli_error($is_connect);
}

// Tutup koneksi ke database
mysqli_close($is_connect);
?>