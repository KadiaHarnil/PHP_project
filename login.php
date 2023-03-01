<?php
session_start();
if (isset($_SESSION['auth_user'])) {
    header("location:index.php");
}
include('includes/header.php');
?>
<section class="intro">
    <div class="bg-image h-100">
        <div class="mask d-flex align-items-center h-40" style="background-color: #f3f2f2;">
            <div class="container">
                <?php include("admin/message.php"); ?>
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-12 col-lg-9 col-xl-8">
                        <div class="card" style="border-radius: 1rem;">
                            <div class="row g-0">
                                <div class="col-md-7  d-none d-md-block">
                                    <img src="image/logo.png" alt="login form"
                                        class="img"
                                        style="border-top-left-radius:1rem; border-bottom-left-radius: 1rem;" />
                                </div>
                                <div class="col-md-5 d-flex align-items-center">
                                    <div class="card-body py-5 px-4 p-md-5">

                                        <form action="logincode.php" method="post">
                                            <h4 class="fw-bold mb-4" style="color: #92aad0;">Log in to your account
                                            </h4>
                                            <p class="mb-4" style="color: #45526e;">To log in, please fill in these
                                                text fiels with your e-mail address and password.</p>

                                            <div class="form-outline mb-4">
                                                <input type="email" name="txtemail" id="form2Example1"
                                                    class="form-control" />
                                                <label class="form-label" for="form2Example1">Email address</label>
                                            </div>

                                            <div class="form-outline mb-4">
                                                <input type="password" id="form2Example2" name="txtpass"
                                                    class="form-control" />
                                                <label class="form-label" for="form2Example2">Password</label>
                                            </div>

                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mt-4">
                                                        <input class=" btn btn-lg" type="submit" name="btnlogin"
                                                            value="Submit" />
                                                    </div>

                                                </div>
                                            </div>
                                            <hr>
                                            <a class="link float-end" href="#!">Forgot password</a><br>
                                            <a class="link float-end" href="userregistration.php">Signup As User</a><br>
                                            <a class="link float-end" href="panditregistration.php">Signup As Pojari</a>

                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// include('includes/footer.php');
include('includes/scripts.php');
?>