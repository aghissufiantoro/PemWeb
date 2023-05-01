<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBAH DATA PEGAWAI</title>
</head>

<body>
    <h2>Tambah Data Pegawai</h2>
    <form method="post" action="tambahact.php">
        <table>
            <tr>
                <td>Nama : </td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Email : </td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Alamat : </td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>No Telephone : </td>
                <td><input type="text" name="no_telp"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
</body>

</html>