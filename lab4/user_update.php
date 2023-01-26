<?php
require 'config.php'
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update User</title>
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
        <h2 class="custom-text">Update</h2>
        <h2 class="opacity-75 m-0">update</h2>
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


                ?>

                <form action="form_handling.php" method="POST">
                    <input type="hidden" name="id" value="<?= $row['ID']; ?>">
                    <div class="mb-3">
                        <label for="name" class="form-label fw-bold my-color">Name</label>
                        <input type="text" name="name" value="<?= $row['username']; ?>" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label fw-bold my-color">E-mail</label>
                        <input type="email" name="email" value="<?= $row['email']; ?>" class="form-control" id="email">
                    </div>

                    <label class="fw-bold fs-4 mb-1 my-color">Gender</label>

                    <?php if ($row['gender'] == 'F') : ?>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" value="F" id="female" checked>
                            <label class="form-check-label" for="female">
                                Female
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" value="M" id="male">
                            <label class="form-check-label" for="male">
                                Male
                            </label>
                        </div>
                    <?php else : ?>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" value="M" id="male" checked>
                            <label class="form-check-label" for="male">
                                Male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" value="F" id="female">
                            <label class="form-check-label" for="female">
                                Female
                            </label>
                        </div>

                    <?php endif ?>



                    <?php if ($row['mail_statue'] == 'Yes') : ?>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" name="check-email" value="<?= $row['mail_statue']; ?>" id="check-email" checked>
                            <label class="form-check-label" for="check-email">Receives E-mails from us</label>
                        </div>
                    <?php else : ?>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" name="check-email" value="<?= $row['mail_statue']; ?>" id="check-email">
                            <label class="form-check-label" for="check-email">Receives E-mails from us</label>
                        </div>
                    <?php endif ?>


                    <button type="submit" name="update" class="btn btn-success fw-bold">Save Changes</button>
                    <a href="./index.php" type="reset" name="cancel" class="btn btn-outline-secondary">Cancel</a>

                </form>
                <?php
                ?>
            </div>
        </div>
    </div>


</body>

</html>