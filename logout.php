<?php
session_start();
if (isset($_POST['btnlogout'])) {
    unset($_SESSION['auth']);
    unset($_SESSION['auth_user']);
    unset($_SESSION['auth_id']);
    echo "<script type='text/javascript'>window.top.location='index.php';</script>";
}
?>