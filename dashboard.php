<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Patient</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
</head>
<body>

<!--<nav class="navbar navbar-light bg-light">-->
<!--    <div class="container-fluid">-->
<!--        <a class="navbar-brand" href="index.php">Dashboard</a>-->
<!--    </div>-->
<!--</nav>-->

<!-- As a heading -->
<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <span class="navbar-brand mb-0 h1">Dashboard</span>
    </div>
</nav>
<div class="d-flex align-items-start">
    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Appointments</button>
        <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>
    </div>
    <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"><h1 class="text-info text-center">Booked Appointments</h1>
            <table class="table table-hover table-striped">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Doctor</th>
                    <th>Department</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
                <?php
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
                require_once "db_connection.php";
                $selectQuery="SELECT * FROM `patients` WHERE 1";
                $patients=mysqli_query($connection,$selectQuery);
                //PATIENTS REP NAME OF THE TABLE IN THE DB
                foreach ($patients as $patient){
                    //THE ARRAY REP THE CREDENTIALS IN TABLE PATIENTS
                    $patientName=$patient["p_name"];
                    $patientEmail=$patient["p_email"];
                    $patientPhoneNo=$patient["p_number"];
                    $patientDoctor=$patient["doctor"];
                    $patientDpt=$patient["department"];
                    $patientDate=$patient["date"];
                    $patientTime=$patient["time"];
                    $patientId=$patient["patient_id"];

                    echo "<tr>
                <td>$patientName</td>
                <td>$patientEmail</td>
                <td>$patientPhoneNo</td>
                <td>$patientDoctor</td>
                <td>$patientDpt</td>
                <td>$patientDate</td>
                <td>$patientTime</td>
               <td><a class='btn btn-primary' href='delete.php?p_id=$patientId'>Delete</a></td>
             <td><a class='btn btn-primary' href='ptupdate.php?p_id=$patientId&pb_name=$patientName&pb_email=$patientEmail&pb_number=$patientPhoneNo&pb_doctor=$patientDoctor
                &pb_department=$patientDpt&pb_date=$patientDate&pb_time=$patientTime'>Edit</a></td>
                </tr>";
                }
                ?>
            </table></div>
        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"><h1 class="text-info text-center">Feedback</h1>
            <table class="table table-hover table-striped">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Message</th>
                    <th>Delete</th>
                    <!--        <th>Update</th>-->
                </tr>
                <?php
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
                require_once "db_connection.php";
                $selectQuery="SELECT * FROM `contact` WHERE 1";
                $contact=mysqli_query($connection,$selectQuery);
                //PATIENTS REP NAME OF THE TABLE IN THE DB
                foreach ($contact as $text){
                    //THE ARRAY REP THE CREDENTIALS IN TABLE PATIENTS
                    $textName=$text["name"];
                    $textEmail=$text["email"];
                    $textPhoneNo=$text["phone"];
                    $textMessage=$text["message"];
                    $textId=$text["id"];

                    echo "<tr>
                <td>$textName</td>
                <td>$textEmail</td>
                <td>$textPhoneNo</td>
                <td>$textMessage</td>
               <td><a class='btn btn-primary' href='cdelete.php?c_id=$textId'>Delete</a></td>
             
                </tr>";
                }
                ?>
            </table></div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
