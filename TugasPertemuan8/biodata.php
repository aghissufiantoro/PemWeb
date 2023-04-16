<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Singkat</title>
</head>

<body>
    <form action="hasilbiodata.php" method="POST" enctype="multipart/form-data">
        <center>
            <h4>Selamat Datang</h4>
            <h4>Silahkan isi biodata berikut</h4>
        </center>
        <table width="900" align="center" cellpadding="3">
            <!-- Nama -->
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>

            <!-- tempat lahir -->
            <tr>
                <td>Tempat Lahir</td>
                <td><input type="text" name="tempatlahir" placeholder="Kota"></td>
            </tr>
            <!-- tgl lahir -->
            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="date" name="date"></td>
            </tr>

            <!-- Alamat -->
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" placeholder="Alamat"></td>
            </tr>
            <!-- jenis kelamin -->
            <tr>
                <td>Jenis Kelamin</td>
                <td><input type="radio" name="jkelamin" value="Laki-laki" required>Laki-laki</td>
                <td><input type="radio" name="jkelamin" value="Perempuan" required>Perempuan</td>
            </tr>
            <!-- Kata- kata hari ini-->
            <tr>
                <td>Kata-kata hari ini</td>
                <td><textarea name="Pesan" id="Pesan" cols="30" rows="10"></textarea></td>
            </tr>

            <!-- button -->
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="btnlogin" value="Kirim">
                    <input type="reset" name="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>