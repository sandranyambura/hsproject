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
<a class="btn btn-outline-success" href="dashboard.php">Dashboard</a>
<h1 class="text-info text-center">Feedback</h1>
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
</table>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>

