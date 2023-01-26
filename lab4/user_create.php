<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create User</title>
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
    <div class="container w-70 position-absolute top-50 start-50 translate-middle">
        <h2 class="custom-text">Add New User</h2>
        <h2>Add New User</h2>
        <div class="card w-50 ">
            <div class="card-body ">
                <form action="form_handling.php" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label fw-bold my-color">Name</label>
                        <input type="text" name="name" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label fw-bold my-color">E-mail</label>
                        <input type="email" name="email" class="form-control" id="email" required>
                    </div>

                    <label class="fw-bold fs-4 mb-1 my-color">Gender</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="F" id="female" required>
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

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" name="check-email" id="check-email">
                        <label class="form-check-label" for="check-email">Receives E-mails from us</label>
                    </div>
                    <button type="submit" name="submit" class="btn" style="background-color: #0D7DFD; color: white; font-weight: bold;">Submit</button>
                    <button type="reset" name="cancel" class="btn btn-outline-secondary">Cancel</button>

                </form>
            </div>
        </div>
    </div>
</body>

</html>