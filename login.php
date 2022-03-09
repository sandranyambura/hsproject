<?php
if (isset($_POST["btn_login"])) {
    //star receiving data
    $name = $_POST["user_name"];
    $pass = $_POST["pass_word"];

    //connect to database to save data
    require_once "db_connection.php";

    $insertQuery = "INSERT INTO `admin`(`name`, `password`) VALUES ('$name','$pass')";

    $save = mysqli_query($connection, $insertQuery);
    if ($name == "admin" && $pass == "admin@pswd") {
        header("location:dashboard.php");
    }else{
        header("location:index.php");
    }
}

