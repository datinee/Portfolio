<?php
if (!isset($_COOKIE['accept_cookies']) and empty($_COOKIE['accept_cookies'])) {
    // header('Location:index.php');
    header('Location:' . $_SERVER['HTTP_SERVER']);
}
