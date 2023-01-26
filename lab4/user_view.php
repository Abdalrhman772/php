<?php
require 'config.php'
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Details</title>
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
        background-image: url("./imgs/Simple\ Shiny.svg");

    }

    .custom-text {
        font-weight: bold;
        font-size: 85px;
        -webkit-text-stroke: 1px white;
        -webkit-text-fill-color: transparent;
        margin: 0;
    }

    h2 {
        color: white;
        font-weight: bold;
        font-size: 80px;

    }

    .my-color {
        color: #0D7DFD;
    }
</style>

<body>
    <div class="container w-70 position-absolute top-50 start-50 translate-middle">
        <h2 class="custom-text">View</h2>
        <h2 class="opacity-75 m-0">View</h2>
        <h2 class="">User</h2>
        <div class="card w-50  position-absolute top-50 start-50 translate-middle">
            <div class="card-body ">

                <?php
                if (isset($_GET['id'])) {
                    $editedUserId = mysqli_real_escape_string($conn, $_GET['id']);
                    $sql = "SELECT* FROM users WHERE ID='$editedUserId'";
                    $executeSql = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($executeSql) > 0) {
                        $row = mysqli_fetch_array($executeSql);
                    }
                }

                $gender = $row['gender'] == 'M' ? 'Male' : 'Female';


                ?>


                <div class="mb-4">
                    <label class="fw-bold fs-4 my-color">Name :</label>
                    <p class="fs-4 fw ms-4"> <?= $row['username']; ?></p>
                </div>
                <div class="mb-4">
                    <label class="fw-bold fs-4 my-color">E-Mail :</label>
                    <p class="fs-4 fw ms-4"> <?= $row['email']; ?></p>
                </div>

                <div class="mb-4">
                    <label class="fw-bold fs-4 mb-1 my-color">Gender :</label>
                    <p class="fs-4 fw ms-4"> <?= $gender ?></p>
                </div>

                <div class="">
                    <label class="fw-bold fs-4 mb-1 my-color">Receiving Mail From us :</label>
                    <p class="fs-4 fw ms-4"> <?= $row['mail_statue'] ?></p>
                </div>
                <a href="./index.php" class="fs-6 fw-bold btn position-absolute bottom-0 end-0 m-2" style="background-color: #0D7DFD; color: white;">
                    Back
                    <i class="bi bi-caret-right-fill"></i>
                </a>

                <?php
                ?>
            </div>
        </div>
    </div>
</body>

</html>