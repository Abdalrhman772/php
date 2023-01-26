<?php
require 'config.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Users</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js
"></script>
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
        font-size: 50px;
        -webkit-text-stroke: 1px white;
        -webkit-text-fill-color: transparent;
        margin: 0;
    }

    h2 {
        color: white;
        font-weight: bold;
        font-size: 40px;
    }

    .my-color {
        color: #0D7DFD;
    }

    button {
        border: none;
        background-color: transparent;
        color: #0D7DFD;
        margin-right: 0;
        padding-right: 0;
    }
</style>


<body>
    <div class="container w-50 mt-5">

        <div>
            <h2 class="custom-text">User Details</h2>
            <h2 class="float-start">User Details</h2> <a href="./user_create.php" class="btn btn-light float-end text-success fw-bold fs-6">
                <i class="bi bi-plus-lg text-success fw-bold"></i> Add New User
            </a>
        </div>
        <table class="table table-striped table-bordered table-light">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Mail statue</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT* FROM users";
                $executeSql = mysqli_query($conn, $sql);
                if (mysqli_num_rows($executeSql) > 0) {
                    while ($row = mysqli_fetch_array($executeSql)) {
                ?>
                        <tr>
                            <td><?= $row['ID']; ?></td>
                            <td><?= $row['username']; ?></td>
                            <td><?= $row['email']; ?></td>
                            <td><?= $row['gender']; ?></td>
                            <td><?= $row['mail_statue']; ?></td>
                            <td>
                                <a href="user_view.php?id=<?= $row['ID']; ?>"><i class="bi bi-eye me-2"></i></a>
                                <a href="user_update.php?id=<?= $row['ID']; ?>"><i class="bi bi-pencil-fill me-2"></i></a>
                                <!-- at the delete it would not redirect to a page "ido not wanna a page for delete
                                        so how to send the delete request without a form ?
                                        then make a form here, send the request direct to form handling  -->
                                <form action="form_handling.php" method="POST" class="d-inline">
                                    <button type="submit" name="delete" value="<?= $row['ID']; ?>">
                                        <i class="bi bi-trash3"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>