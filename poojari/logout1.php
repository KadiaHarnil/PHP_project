<?php
session_start();
if(isset($_POST['btnlogout1']))
unset($_SESSION['auth1']);
unset($_SESSION['auth_user1']);
unset($_SESSION['auth_id1']);
session_destroy();
header("location:../login.php");

?>