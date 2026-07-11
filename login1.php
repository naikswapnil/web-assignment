<?php

include "header.php";

?>

<style>
section {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 60px 0;
}

.login-container {
    width: 400px;
    max-width: 90%;
    background: #fff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.login-container h2 {
    text-align: center;
    margin-bottom: 25px;
}

.login-container input {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
}
</style>

<section>
    <div class="login-container">

        <h2>User Login</h2>
        <form action="login_process.php" method="POST">

            <label>Email</label>
            <input type="email" name="email" placeholder="Enter Email" required> <br>

            <label>Password</label>
            <input type="password" name="password" placeholder="Enter Password" required> <br>

            <div class="text-center">
                <button type="submit" class="btn btn-primary px-5">
                    Login
                </button>
            </div>

        </form>
    </div>
</section>

<?php include "footer.php"; ?>