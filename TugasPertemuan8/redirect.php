<?php
if(empty($_POST['nama'])){
    header("Location:datakosong.php");
}else if(empty($_POST['email'])) {
    header("Location:datakosong.php");
}else {
    echo "<center>" . $_POST['nama'] . "</center><br>";
    echo "<center>Email : " . $_POST['email'] . "</center><br>";
}
?>