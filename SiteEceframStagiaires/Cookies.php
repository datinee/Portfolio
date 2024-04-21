<?php
setcookie('accept_cookies', true, time() + 365 * 24 * 3600, '/', null, false, true);
if (isset($_COOKIE['accept_cookies']) and !empty($_COOKIE['accept_cookies'])) {
    //header('Location:' . $_SERVER['HTTP_SERVER']);
} else {
    header('Location:index.php');
}
