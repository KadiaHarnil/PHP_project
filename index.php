<?php
session_start();
if(isset($_SESSION['auth_user1']))
{
    header("location:admin/index.php");
}
include("includes/header.php");
include("includes/navbar.php");

?>
<?php
include("includes/footer.php");
include("includes/scripts.php");
?>