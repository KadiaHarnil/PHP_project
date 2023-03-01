<?php
session_start();
include("includes/header.php");
include("config/dbcon.php");
if($_SESSION['auth1'])
{
    echo $_SESSION['auth_id1'];
    
}
?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><a href="index.php" class="text-decoration-none"> Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="pooja.php" class="text-decoration-none"> Pooja</a></li>
        <li class="breadcrumb-item ">Add Pooja</li>
    </ol>

    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <h3>Add Pooja</h3>
                </div>
                <div class="card-body">
                    <form action="insertpooja.php" method="post">

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include("includes/footer.php");
include("includes/scripts.php");
?>