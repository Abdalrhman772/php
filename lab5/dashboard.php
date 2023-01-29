<?php
require 'config.php';
include("auth_session.php");
?>


<?php
if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css" />
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

    h5 {
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
    <div class="card text-center position-absolute top-50 start-50 translate-middle">
        <div class="card-body p-5">
            <h5 class="card-title">Hey, <?php echo $_SESSION['username']; ?>!</h5>
            <p class="card-text">You are now user dashboard page.</p>
            <form action="" method="POST">
                <button class="btn btn-primary" type="submit" name="logout">LOGOUT</button>
            </form>
        </div>
    </div>
</body>

</html>