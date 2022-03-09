<?php
$host="localhost";
$username="root";
$password="";
$dbname="hosisystem";


//create connection using mysqli connect
$connection=mysqli_connect($host, $username, $password,$dbname);

//check connection
if (!($connection)){
    die("DB connection failed!!!");
}
//check if the update button has been clicked
if (isset($_POST["btn_update"])){
    $updatedPatientName=$_POST["pb_name"];
    $updatedPatientEmail=$_POST["pb_email"];
    $updatedPatientPhoneNo=$_POST["pb_number"];
    $updatedPatientDoctor=$_POST["pb_doctor"];
    $updatedPatientDpt=$_POST["pb_department"];
    $updatedPatientDate=$_POST["pb_date"];
    $updatedPatientTime=$_POST["pb_time"];
    $PatientId=$_POST["p_id"];
    //connect to the database to update
    require_once "db_connection.php";
    //prepare the update query
    $updateQuery ="UPDATE `patients` SET `p_name`='$updatedPatientName',`p_email`='$updatedPatientEmail',`p_number`='$updatedPatientPhoneNo',
                      `doctor`=' $updatedPatientDoctor',`department`='$updatedPatientDpt',`date`='$updatedPatientDate',`time`='$updatedPatientTime' WHERE patient_id= '$PatientId'";
    //use mysql_query() to execute the update query
    $update = mysqli_query($connection, $updateQuery);
    if (isset($update)) {
        //return back to voter.php to see the changes
        header("location:dashboard.php");
    } else {
        die("Updating failed");
    }
}
