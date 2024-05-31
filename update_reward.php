<?php
// Memasukkan file koneksi database
include 'connect.php';

// Memeriksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $namaLengkap = $_POST['nama_lengkap'];
    $reward = $_POST['reward'];

    // Menyiapkan query untuk mengupdate data
    $sql = "INSERT INTO reward (id, id_user, reward) VALUES ('', (SELECT id FROM user WHERE nama_lengkap = ?), ?)";

    // Menyiapkan statement
    $stmt = $is_connect->prepare($sql);
    if ($stmt === false) {
        die("Error preparing statement: " . $is_connect->error);
    }

    // Mengikat parameter ke query
    $stmt->bind_param("ss", $namaLengkap, $reward);

    // Mengeksekusi statement
    if ($stmt->execute()) {
        // echo "Data berhasil diupdate.";
        header('Location: admin.php#update-section');
    } else {
        echo "Error: " . $stmt->error;
    }

    // Menutup statement dan koneksi
    $stmt->close();
    $is_connect->close();
}
?>
