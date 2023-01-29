<?php
require 'config.php';
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    body {
        background-color: #0D7DFD;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        background-image: url("./imgs/Animated\ Shape.svg");

    }

    h2 {
        color: white;
        font-weight: bold;
        font-size: 45px;
    }

    .custom-text {
        font-weight: bold;
        font-size: 65px;
        -webkit-text-stroke: 1px white;
        -webkit-text-fill-color: transparent;
        margin: 0;
    }

    .my-color {
        color: #0D7DFD;
    }
</style>

<body>
    <?php

    if (isset($_REQUEST['username'])) {
        $username = $_REQUEST['username'];
        $username = mysqli_real_escape_string($conn, $username);
        $password = $_REQUEST['password'];
        $password = mysqli_real_escape_string($conn, $password);

        //after taking user name and pass, make query and
        //check if this user exist in DB
        $sql    = "SELECT * FROM lab5
                    WHERE username = '$username'
                    AND password = '$password' ";
        $result   = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) == 1) {
            //create session var called username and save input
            $_SESSION['username'] = $username;
            // then Redirect to user dashboard 
            echo $_SESSION['username'];
            header("Location: dashboard.php");
        } else {
            echo "<div class='alert alert-warning' role='alert'>
            <h3>Incorrect username or password.</h3><br/>
            <h4>Try again!</h4><br/>
            <a class='btn btn-success' href='login.php'>Click here to Login</a>
            </div>";
        }
    } else {
        //if not exist login
    ?>

        <div class="container w-70 position-absolute top-50 start-50 translate-middle">
            <h2 class="custom-text">LOGIN</h2>
            <h2>LOGIN</h2>
            <div class="card w-50 ">
                <div class="card-body ">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="username" class="form-label fw-bold my-color">Name</label>
                            <input type="text" name="username" class="form-control" id="username" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label fw-bold my-color">Password</label>
                            <input type="password" name="password" class="form-control" id="password" required>
                        </div>
                        <button type="submit" name="submit" class="btn" style="background-color: #0D7DFD; color: white; font-weight: bold;">Login</button>
                        <button type="reset" name="cancel" class="btn btn-outline-secondary">Cancel</button>
                        <p class="link mt-3">Don't have an account? <a href="registration.php">Register Now</a></p>

                    </form>
                </div>
            </div>
        </div>


    <?php
    }
    ?>
</body>

</html>