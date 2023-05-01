<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD DATA PEGAWAI</title>
</head>

<body>
    <center>
        <h3>DATA PEGAWAI</h3>
        <table border="1">
            <tr style="background-color: black; color: white;">
                <th>No</th>
                <th>ID</th>
                <th>Nama Pegawai</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>No Telp</th>
            </tr>

            <?php
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi, "SELECT * FROM data_pegawai");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td width="300" align="center"><?php echo $d['id']; ?></td>
                    <td width="300" align="center"><?php echo $d['nama']; ?></td>
                    <td width="300" align="center"><?php echo $d['email']; ?></td>
                    <td width="300" align="center"><?php echo $d['alamat']; ?></td>
                    <td width="300" align="center"><?php echo $d['no_telp']; ?></td>
                </tr>
            <?php
            }
            ?>
        </table>

        <br>

        <table border="2" cellpadding="5">
            <th><a href="tambah.php" style="background-color: lightgreen;" >Tambah</a></th>
            <th><a href="edit.php" style="background-color: lightblue;" >Edit</a></th>
            <th><a href="hapus.php" style="background-color: red">Hapus</a></th>
        </table>    

    </center>
</body>

</html>