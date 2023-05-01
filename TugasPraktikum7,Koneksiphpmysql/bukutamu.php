<?php

// Create Connection
$koneksi = mysqli_connect("localhost", "root", "", "db_bukutamu");

// Check connection
if (!$koneksi) {
    die("Connection failed : " . mysqli_connect_error());
}

// Create tabel bukutamu
$sql = "CREATE TABLE buku_tamu (
    id_bt INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(200) NOT NULL,
    email VARCHAR(50) NOT NULL,
    ISI TEXT)";


if (mysqli_query($koneksi, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>