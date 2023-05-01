<?php
include 'koneksi.php';

// ambil data
$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'] ;
$alamat = $_POST['alamat'] ;
$no_telp = $_POST['no_telp'];
echo $id;

// update data
mysqli_query($koneksi, "UPDATE `data_pegawai` SET `nama` = '$nama', 
`email` = '$email', 
`alamat` = '$alamat', 
`no_telp` = '$no_telp' 
WHERE `data_pegawai`.`id` = $id;"); 

// Back home
header("location:index3.php");

?>