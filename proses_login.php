<?php
session_start(); 
include ('connect.php'); 

$username = $_POST['username']; 
$password = $_POST['password'];

$query = mysqli_query($is_connect, "SELECT * FROM user WHERE username='".$username."' AND password='".$password."'"); 

$data = mysqli_fetch_assoc($query); 
 
if($data != NULL) {
    $_SESSION['id'] = $data['id']; 
    $_SESSION['username'] = $username; 
    $_SESSION['is_admin'] = $data['is_admin'];

    if($_SESSION['is_admin'] == 1){
        header('Location: admin.php');
    }else{
        header('Location: index.php');
    }

}else{
    echo "Login gagal! Username atau password salah.";
    echo "<a herf='login.php'>Kembali</a>";
}
