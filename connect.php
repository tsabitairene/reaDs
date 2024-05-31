<?php

$username = "root"; 
$password = "123";
$host = "localhost";
$db_name = "reads_db";

$is_connect = mysqli_connect($host, $username, $password, $db_name);

if($is_connect){
    mysqli_select_db($is_connect, "reads_db");
    
}else{
    echo "Opss....";
}
