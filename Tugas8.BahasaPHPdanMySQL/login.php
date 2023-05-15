<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Peserta Didik</title>
    <link rel="stylesheet" href="/bootstrap-4.5.3-dist/css/bootstrap.min.css">
</head>

<body style="background-color:aqua" >
    <center>
        
        <h3>Selamat Datang Peserta Didik Baru</h3>
        <h2>SMA Negeri 20 Surabaya</h2>
        <form action="formpendaftaran.php">
        <section>
            <table>
                <tr>
                    <th>Username</th>
                    <th><input type="text" name="username" id="username" required></th>
                </tr>
                <tr>
                    <th>Password</th>
                    <th><input type="text" name="password" id="password" required></th>
                    <th><input type="checkbox" onclick="myFunction()">Hide Password</th>
                </tr>
            </table>
            <br>
        </section>
        <a href="main.php"><input type="button" value="masuk" style="height: 48px; width: 48; color: white; background-color: black;"></a>
        
    </center>

    <script>
        function myFunction(){
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>

    <link rel="stylesheet" href="/bootstrap-4.5.3-dist/js/bootstrap.min.js">
    <link rel="stylesheet" href="/jquery-3.5.1.min.js">
    <script src="/popper.min.js"></script>
</body>

</html>