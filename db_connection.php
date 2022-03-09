<?php
$host="localhost";
$username="root";
$password="";
$db="hosisystem";


//create connection using mysqli connect
$connection=mysqli_connect($host, $username, $password,$db);

//check connection
if (!($connection)){
    die("DB connection failed!!!");
}


