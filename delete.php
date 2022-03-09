<?php

 //check if the delete link has been clicked
if (isset($_GET["p_id"])) {
    $patientId = $_GET["p_id"];

    $host="localhost";
    $username="root";
    $password="";
    $db="hosisystem";


//create connection using mysqli connect
    $connection=mysqli_connect("$host","$username","$password","$db");

//check connection
    if (!($connection)){
        die("DB connection failed!!!");
    }

    $deleteQuery = "DELETE FROM `patients` WHERE patient_id='$patientId'";

    //use mysqli_query() to execute the delete query
    $delete = mysqli_query($connection,$deleteQuery);
    //check if the deletion was successful
    if ($delete) {
        //redirect back to voters.php to see if changes actually occurred
        header("location:dashboard.php");
    } else {
        die("Patient deletion failed".mysqli_connect_error());
    }
}

