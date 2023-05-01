<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT DATA PEGAWAI</title>
</head>
<body>
    <form action="editact.php" method="post">
        <table  cellpadding="3">
            <tr>
                <th>ID</th>
                <th><input type="text" name="id"></th>
            </tr>
            <tr>
                <th>Nama</th>
                <th><input type="text" name="nama"></th>
            </tr>
            <tr>
                <th>Email</th>
                <th><input type="text" name="email"></th>
            </tr>
            <tr>
                <th>Alamat</th>
                <th><input type="text" name="alamat"></th>
            </tr>
            <tr>
                <th>No Telp</th>
                <th><input type="text" name="no_telp"></th>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
</body>
</html>