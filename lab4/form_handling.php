<?php
require 'config.php';



//create new user
if (isset($_POST['submit'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $genderCheck = isset($_POST['gender']) ? $_POST["gender"] : "";
    $gender = mysqli_real_escape_string($conn, $genderCheck);
    $check_email =  isset($_POST["check-email"]) ? "Yes" : "No";
    $isChecked =  mysqli_real_escape_string($conn, $check_email);


    $sql = "INSERT INTO users (username, email, gender, mail_statue)
                VALUES ('$name','$email','$gender','$isChecked') ";

    $executeSql = mysqli_query($conn, $sql);
    if (!$executeSql) {
        die("couldn't get the data" . mysqli_error($conn));
    } else {
        header("Location: http://localhost/phplabs/lab4/index.php");
    }
}

//update user
if (isset($_POST['update'])) {
    $userId = mysqli_real_escape_string($conn, $_POST['id']); //from input name="id"
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $genderCheck = isset($_POST['gender']) ? $_POST['gender'] : "";
    $gender = mysqli_real_escape_string($conn, $genderCheck);
    $check_email =  isset($_POST["check-email"]) ? "Yes" : "No";
    $isChecked = mysqli_real_escape_string($conn, $check_email);


    $sql = "UPDATE users SET username='$name', email='$email', gender='$gender', mail_statue='$isChecked'
                WHERE ID='$userId' ";

    $executeSql = mysqli_query($conn, $sql);
    if (!$executeSql) {
        die("couldn't update the data" . mysqli_error($conn));
    } else {
        header("Location: http://localhost/phplabs/lab4/index.php");
    }
}
//delete user
if (isset($_POST['delete'])) {
    //u just need the id to delete
    $userId = mysqli_real_escape_string($conn, $_POST['delete']); //from button name="delete" which has the ID from db as value
    $sql = "DELETE FROM users
            WHERE ID='$userId' ";

    $executeSql = mysqli_query($conn, $sql);
    if (!$executeSql) {
        die("couldn't delete the data" . mysqli_error($conn));
    } else {
        header("Location: http://localhost/phplabs/lab4/index.php");
    }
}
