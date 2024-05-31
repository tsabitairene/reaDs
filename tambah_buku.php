<?php

include('connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $judul_buku = $_POST['judul_buku'];
    $deskripsi = $_POST['deskripsi'];
    $kategori = $_POST['kategori'];
    $tersedia = $_POST['tersedia'];
    $lokasi_buku = $_POST['lokasi_buku'];

    // Handle file upload
    $target_dir = "img/";
    $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $uploadOk = 1;

    // Check if image file is an actual image or fake image
    $check = getimagesize($_FILES["gambar"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["gambar"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars(basename($_FILES["gambar"]["name"])). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    // Insert data into database
    $gambar = basename($_FILES["gambar"]["name"]); // get the filename only

    // Check connection
    if ($is_connect->connect_error) {
        die("Connection failed: " . $is_connect->connect_error);
    }

    $sql = "INSERT INTO buku (judul_buku, gambar, deskripsi, status, tersedia, kategori, lokasi_buku) 
            VALUES ('$judul_buku', '$gambar', '$deskripsi', 'tersedia', '$tersedia', '$kategori', '$lokasi_buku')";

    if ($is_connect->query($sql) === TRUE) {
        header('Location: admin.php#tambah-section');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $is_connect->error;
    }

    $is_connect->close();
}
?>