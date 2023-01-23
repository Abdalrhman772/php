<?php
$nameReq = $emailReq = $genderReq = $agreeReq = $nameCheck =  $group = $classDetails = $courses = $gender = "";

if (isset($_POST["submit"])) {
    if (empty($_POST["name"])) {
        $nameReq = "Name Can't be empty";
    } else {
        if (preg_match('/^[A-Za-z\s]*$/',  $_POST["name"])) {
            $name =  $_POST["name"];
        } else {
            $nameCheck = "Characters allowed Only";
        }
    }

    if (empty($_POST["email"])) {
        $emailReq = "Email Can't be empty";
    } else {
        $email = $_POST["email"];
    }

    if (!empty($_POST["group"])) {
        $group = $_POST["group"];
    }

    if (!empty($_POST["class-details"])) {
        $classDetails = $_POST["class-details"];
    }

    if (empty($_POST["gender"])) {
        $genderReq = "gender is required";
    } else {
        $gender = $_POST["gender"];
    }

    if (!empty($_POST["courses"])) {
        $courses = $_POST["courses"];
    }

    if (empty($_POST["agree"])) {
        $agreeReq = "you must agree First";
    } else {
        $agree = $_POST["agree"];
    }
}
?>

<html>
<style>
    body {
        background-color: #F8F9EC;
    }

    main,
    section {
        display: grid;
        place-items: center;
        font-size: 20px;
    }

    table {
        border: solid 2px goldenrod;
        border-radius: 5px;
        background-color: lightgoldenrodyellow;
        padding: 5px;
    }

    .require-asterisk {
        color: red;
    }

    .key {
        color: darkgreen;
        font-weight: bold;
    }

    .value {
        color: goldenrod;
        font-weight: bold;
    }
</style>

<body>
    <main>

        <h2>Class Registration</h2>
        <span class="require-asterisk">* Required Field</span>
        <br>
        <form action="<?php $_PHP_SELF ?>" method="POST">
            <table>
                <tr>
                    <td>Name: </td>
                    <td><input type="text" name="name">
                        <span class="require-asterisk">*<?php echo $nameReq;
                                                        echo $nameCheck ?></span>
                    </td>
                </tr>

                <tr>
                    <td>Email: </td>
                    <td><input type="email" name="email">
                        <span class="require-asterisk">*<?php echo $emailReq ?></span>
                    </td>
                </tr>
                <tr>
                    <td>Group #</td>
                    <td><input type="number" name="group"></td>
                </tr>
                <tr>
                    <td>Class details:</td>
                    <td><textarea name="class-details" cols="40" rows="6"></textarea></td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td>
                        <input type="radio" name="gender" value="female" id="female">
                        <label for="female">Female</label>
                        <input type="radio" name="gender" value="male" id="male">
                        <label for="male">Male</label>
                        <span class="require-asterisk">*<?php echo $genderReq ?></span>
                    </td>
                </tr>
                <tr>
                    <td>Select Courses:</td>
                    <td>
                        <select name="courses[]" multiple>
                            <option value="PHP">PHP</option>
                            <option value="Java Script">Java Script</option>
                            <option value="MySQL">MySQL</option>
                            <option value="HTML">HTML</option>
                            <option value="CSS">CSS</option>
                            <option value="Node JS">Node JS</option>
                            <option value="Laravel">Laravel</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Agree</td>
                    <td><input type="checkbox" name="agree">
                        <span class="require-asterisk">*<?php echo $agreeReq ?></span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </main>

</body>

</html>

<?php

$validation = isset($_POST["submit"]) &&
    isset($_POST["name"]) &&
    preg_match('/^[A-Za-z\s]*$/', $_POST["name"]) &&
    isset($_POST["gender"]) &&
    isset($_POST["agree"]);

if ($validation) {
    echo "<section><div>";
    echo "<h2>your values are :</h2>";

    echo "<span class='key'> Name:</span>
        <span class='value'> $name </span> <br>";

    echo "<span class='key'> Email:</span>
        <span class='value'> $email </span> <br>";

    echo "<span class='key'> Group#:</span>
        <span class='value'> $group </span> <br>";

    echo "<span class='key'> Class details:</span>
        <span class='value'> $classDetails </span> <br>";

    echo "<span class='key'> Gender:</span>
        <span class='value'> $gender </span> <br>";

    $course = join(", ", $courses);
    echo "<span class='key'> Your Courses are: </span>
    <span class='value'> $course </span> <br>";
    echo "</div></section>";
}
?>