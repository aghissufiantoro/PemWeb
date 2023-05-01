<?php

// Create and check connection
$conn = mysqli_connect("localhost", "root", "", "db_pegawai");

// Check table data_pegawai
$sql = "CREATE TABLE data_pegawai(
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(200) NOT NULL,
    email VARCHAR(50) NOT NULL,
    alamat VARCHAR(200) NOT NULL,
    no_telp VARCHAR(20) NOT NULL)";

if(mysqli_query($conn, $sql)){
    echo "New Record Created Successfully";
}else{
    echo "Error : ". $sql ."<br>" . mysqli_error($conn);
}

mysqli_close($conn)
?>