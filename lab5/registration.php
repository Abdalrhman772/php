<?php
require 'config.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    body {
        /* background-color: #0D7DFD; */
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

    .link {
        color: #666;
        font-size: 15px;
        text-align: center;
        margin-bottom: 0px;
    }

    .link a {
        color: #666;
    }
</style>


<body>

    <?php

    if ((isset($_REQUEST['password'])) && ($_REQUEST['password']) != $_REQUEST['password-confirm']) {
        echo "<div class='alert alert-danger w-50 h-50 m-5' role='alert'>
              <h3>Passwords aren't matched</h3><br/>
              </div>";
    }

    if (isset($_REQUEST['username']) && ($_REQUEST['password']) == $_REQUEST['password-confirm']) {
        $username = $_REQUEST['username'];
        $username = mysqli_real_escape_string($conn, $username);
        $password = $_REQUEST['password'];
        $password = mysqli_real_escape_string($conn, $password);

        $sql    = "INSERT into lab5 (username, password)
                 VALUES ('$username','$password')";
        $result   = mysqli_query($conn, $sql);
        if ($result) {
            echo "<div class='alert alert-success' role='alert'>
              <h3>You are registered successfully.</h3><br/>
              <a class='btn btn-success' href='login.php'>Click here to Login</a>
              </div>";
        } else {
            echo "<div class='form'>
              <h3>Required fields are missing.</h3><br/>
              <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
              </div>";
        }
    } else {
    ?>



        <div class="container w-70 position-absolute top-50 start-50 translate-middle">
            <h2 class="custom-text">Register Now</h2>
            <h2>Register Now</h2>
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
                        <div class="mb-3">
                            <label for="password-confirm" class="form-label fw-bold my-color">Confirm Password</label>
                            <input type="password" name="password-confirm" class="form-control" id="password-confirm" required>
                        </div>
                        <button type="submit" name="submit" class="btn" style="background-color: #0D7DFD; color: white; font-weight: bold;">Register</button>
                        <button type="reset" name="cancel" class="btn btn-outline-secondary">Cancel</button>
                        <p class="link mt-3">already have an account? <a href="login.php">Click to Login</a></p>

                    </form>
                </div>
            </div>
        </div>

    <?php
    }
    ?>

</body>

</html>