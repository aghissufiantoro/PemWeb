<?php

$koneksi = mysqli_connect("localhost", "root", "", "db_pegawai");
if(!$koneksi){
    die("connection failed : " . mysqli_connect_error()); 
}

//Mengambil data yang dikirim user
$id = $_POST['id'];

//Delete data yang ada pada database
mysqli_query($koneksi, "DELETE FROM `data_pegawai` WHERE `id` = $id");

//Kembali ke halaman utama
header("location: index3.php");
?>