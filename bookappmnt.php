<?php
//check if button is clicked
if (isset($_POST["btn_book"])) {
    //start receiving data
    $patientDate = $_POST["pb_date"];
    $patientTime = $_POST["pb_time"];
    $patientName = $_POST["pb_name"];
    $patientEmail = $_POST["pb_email"];
    $patientPhoneNo = $_POST["pb_number"];
    $patientDoctor = $_POST["pb_doctor"];
    $patientDpt = $_POST["pb_department"];



    //connect to database to save data
    require_once "db_connection.php";

    //prepare the insert query to save
    $insertQuery="INSERT INTO `patients`(`patient_id`, `p_name`, `p_email`, `p_number`, `doctor`, `department`, `date`, `time`) 
    VALUES (null,'$patientName','$patientEmail','$patientPhoneNo','$patientDoctor','$patientDpt','$patientDate','$patientTime')";


    //finally save data using mysqli_query()
    $save = mysqli_query($connection, $insertQuery);
    //check if the saving was successful
    if (isset($save)) {
        header("location:index.php");
    } else {
        echo "<script>alert('Message not sent')</script>";
    }
}