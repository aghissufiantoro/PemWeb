<?php
if (isset($_COOKIE['variable_cookies'])) {
    echo "Variable cookiesnya \"variable_cookies\" nilai adalah" . $_COOKIE['variable_cookies'];
}else {
    echo "Variable cookie belum diterapkan";
}
?>
