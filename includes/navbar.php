<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
            data-mdb-target="#navbarRightAlignExample" aria-controls="navbarRightAlignExample" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarRightAlignExample">
            <!-- Left links -->
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <!-- Navbar dropdown -->
                <?php if (isset($_SESSION['auth'])): ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-mdb-toggle="dropdown" aria-expanded="false">
                            <?= $_SESSION['auth_user']; ?>
                        </a>
                        <!-- Dropdown menu -->
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="#">Action</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Another action</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <!-- <li>
                                <a class="dropdown-item" name="btnlogout" href="logout.php">Logout</a>
                            </li> -->
                            <form action="logout.php" method="post">
                            <button class="dropdown-item" type="submit" name="btnlogout">Logout</button>
                            </form>
                        </ul>
                    </li>
                <?php else: ?>
                    <div class="d-flex align-items-center">
                            <a href="login.php" class="btn btn-link px-3 me-2" role="button">Login</a>
                           <a href="userregistration.php" class="btn btn-primary me-3" role="button"> Sign up for free</a>
                    </div>
                <?php endif; ?>
            </ul>
            <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
</nav>