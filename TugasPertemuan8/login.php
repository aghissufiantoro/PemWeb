<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form action="redirect.php" method="post">
        <table width="450" align="center" cellpadding="2">
            <tr>
                <td width="125">Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td width="125">Email</td>
                <td><input type="email" name="email"></td>
            </tr>
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