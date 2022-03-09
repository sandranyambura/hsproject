<?php
//check if button is clicked
if (isset($_POST["btn_submit"])) {
    //start receiving data
    $name = $_POST["user_name"];
    $email = $_POST["email_address"];
    $phone = $_POST["phone_number"];
    $message = $_POST["text_message"];

    //connect to database to save data
    require_once "db_connection.php";

    //prepare the insert query to save
    $insertQuery = "INSERT INTO `contact`(`id`, `name`, `email`, `phone`, `message`)
        VALUES (null,'$name','$email','$phone','$message')";

    //finally save data using mysqli_query()
    $save = mysqli_query($connection, $insertQuery);
    //check if the saving was succesfull
    if (isset($save)) {
        header("location:index.php");
    } else {
        echo "<script>alert('Message not sent')</script>";
    }
}
