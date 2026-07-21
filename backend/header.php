<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Website</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">

        <a class="navbar-brand" href="dashboard.php">My Website</a>

        <button class="navbar-toggler" type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto">

                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>

            </ul>

            <?php if (isset($_SESSION['user_id'])) { ?>

                <ul class="navbar-nav">

                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle d-flex align-items-center"
                           href="#"
                           role="button"
                           data-bs-toggle="dropdown">

                            <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png"
                                 width="35"
                                 height="35"
                                 class="rounded-circle me-2">

                            <?php
                            if (isset($_SESSION['user_name'])) {
                                echo $_SESSION['user_name'];
                            } else {
                                echo "User";
                            }
                            ?>

                        </a>

                        <ul class="dropdown-menu dropdown-menu-end">

                            <li>
                                <h6 class="dropdown-header">
                                    <?php
                                    if (isset($_SESSION['user_name'])) {
                                        echo $_SESSION['user_name'];
                                    } else {
                                        echo "User";
                                    }
                                    ?>
                                </h6>
                            </li>

                            <li><hr class="dropdown-divider"></li>

                            <li>
                                <a class="dropdown-item" href="dashboard.php">
                                    Dashboard
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="#">
                                    Services
                                </a>
                            </li>

                            <li><hr class="dropdown-divider"></li>

                            <li>
                                <a class="dropdown-item text-danger" href="logout.php">
                                    Logout
                                </a>
                            </li>

                        </ul>

                    </li>

                </ul>

            <?php } else { ?>

                <a class="btn btn-primary" href="login.php">
                    Login
                </a>

            <?php } ?>

        </div>

    </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>