<?php 
include 'database/koneksi.php';
    if (isset($_POST['submit'])) {
    $namaleng = $_POST['namaleng'];
    $jkelamin = $_POST['jkelamin'];
    $nisn = $_POST['nisn'];
    $nik = $_POST['nik'];
    $tlahir = $_POST['tlahir'];
    $tglahir = $_POST['tglahir'];
    $agama = $_POST['agama'];
    $berkebkhusus = $_POST['berkebkhusus'];
    $alamat = $_POST['alamat'];
    $rt = $_POST['rt'];
    $rw = $_POST['rw'];
    $namadusun = $_POST['namadusun'];
    $namakel = $_POST['namakel'];
    $kec = $_POST['kec'];
    $kodepos = $_POST['kodepos'];
    $ttinggal = $_POST['ttinggal'];
    $transport = $_POST['transport'];
    $nohp = $_POST['nohp'];
    $notelp = $_POST['notelp'];
    $email = $_POST['email'];
    $kpspkh = $_POST['kpspkh'];
    $nokpspkh = $_POST['nokpspkh'];
    $kwn = $_POST['kwn'];
    $namanegara = $_POST['namanegara'];

      // Menyimpan ke database
      $sql = mysqli_query($conn, "INSERT INTO data_siswa (namaleng, jkelamin, nisn, nik, tlahir, tglahir, agama, berkebkhusus, alamat, rt, rw, namadusun, namakel, kec, kodepos, ttinggal, transport, nohp, notelp, email, kpspkh, nokpspkh, kwn, namanegara) VALUES ('$namaleng', '$jkelamin', '$nisn', '$nik', '$tlahir', '$tglahir', '$agama', '$berkebkhusus', '$alamat', '$rt', '$rw', '$namadusun', '$namakel', '$kec', '$kodepos', '$ttinggal', '$transport', '$nohp', '$notelp', '$email', '$kpspkh', '$nokpspkh', '$kwn', '$namanegara')");
      if ($sql) {
          // pesan jika data tersimpan
          echo "<script>alert('Terima Kasih Telah Mengisi Data Diri! Selamat Bergabung Di SMA Negeri 20 Surabaya'); window.location.href='main.php'</script>"; 
        } else {
          // pesan jika data gagal disimpan
            echo "alert('Data Diri Gagal Ditambahkan!!');";
        }
      }
?>