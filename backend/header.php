<html>

<head>
    <title>My Website</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
    body {
        background: #F3F4F6;
    }

    nav {
        background: #1E3A8A;
        color: white;
    }

    .navbar * {
        color: white !important;
    }

    .dropdown-menu {
        background-color: #fff;
    }

    .dropdown-menu .dropdown-item,
    .dropdown-menu .dropdown-header {
        color: #212529 !important;
    }

    .dropdown-menu .dropdown-item:hover {
        background-color: #f8f9fa;
        color: #212529 !important;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">

            <a class="navbar-brand" href="#">My Website</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="dashboard.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                </ul>

                <ul class="navbar-nav">

                    <?php if(isset($_SESSION['user_id'])) { ?>

                    <!-- User Dropdown -->
                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">

                            <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" width="35" height="35"
                                class="rounded-circle me-2">

                            <?php echo $_SESSION['name']; ?>

                        </a>

                        <ul class="dropdown-menu dropdown-menu-end">

                            <li>
                                <h6 class="dropdown-header">
                                    <?php echo $_SESSION['name']; ?>
                                </h6>
                            </li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item" href="dashboard.php">
                                    Dashboard
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="users.php">
                                    Users
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item text-danger" href="logout.php">
                                    Logout
                                </a>
                            </li>

                        </ul>

                    </li>

                    <?php } else { ?>

                    <!-- Show Login/Register if user is not logged in -->
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Register</a>
                    </li>

                    <?php } ?>

                </ul>
            </div>

        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>