<html>
<center>
    <h3>Selamat datang</h3>

    <div>
        <table border="2px" width="auto">
            <td>
                <?php
                echo "<center>" . $_POST['nama'] . "</center><br>";
                echo "<center>Email : " . $_POST['email'] . "</center><br>";
                ?>
            </td>
        </table>
    </div>

    <?php
    echo "You login at : ";
    echo date("d, m, Y") . "<br>";
    echo date("g:i:s a");
    ?>
</center>

</html>