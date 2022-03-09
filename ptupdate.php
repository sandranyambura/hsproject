<?php
//check if the update link has been clicked
    if (isset($_GET["p_id"])){
        $receivedPatientName=$_GET["pb_name"];
        $receivedPatientEmail=$_GET["pb_email"];
        $receivedPatientPhoneNo=$_GET["pb_number"];
        $receivedPatientDoctor=$_GET["pb_doctor"];
        $receivedPatientDpt=$_GET["pb_department"];
        $receivedPatientDate=$_GET["pb_date"];
        $receivedPatientTime=$_GET["pb_time"];
        $PatientId=$_GET["p_id"];
    }else{
    header("location:dashboard.php");
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Patient</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <!-- <link rel="stylesheet"href="index.css"> -->
</head>
<body>
<h1 class="text-info text-center">Updating Patients</h1>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <form action="ptnhandler.php" method="post">
            <label for="">Please confirm that you would like to request for the following appointment:</label><br>
            <div class="md-form md-outline input-with-post-icon datepicker">
                <label for="">Date</label>
                <input value="<?php echo $receivedPatientDate; ?>"placeholder="Select date" type="date" name="pb_date" class="form-control" aria-colspan="30" aria-rowspan="20">

            </div><br>
            <label for="">Time</label>
            <div class="md-form md-outline">
                <input value="<?php echo $receivedPatientTime; ?>" type="time" class="form-control" name="pb_time" placeholder="Select time">
            </div><br>

            <div class="mb-3">
                <label for="" class="form-label"></label>
                <input value="<?php echo $receivedPatientName; ?>" type="text" class="form-control" name="pb_name" placeholder="Your Name">
            </div>
            <div class="mb-3">
                <label for="" class="form-label"></label>
                <input value="<?php echo $receivedPatientEmail; ?>" type="text" class="form-control" name="pb_email" placeholder="Email Address">
            </div>
            <div class="mb-3">
                <label for="" class="form-label"></label>
                <input value="<?php echo $receivedPatientPhoneNo; ?>" type="tel" class="form-control" name="pb_number" placeholder="Phone Number">
            </div>
            <br>
            <select class="form-select" name="pb_doctor">
                <option value="<?php echo $receivedPatientDoctor; ?>">
                    <?php echo $receivedPatientDoctor;?>
                </option>
                <option selected>Doctor</option>
                <option value="Dentist">Dentist</option>
                <option value="Optician">Optician</option>
                <option value="Physicist">Physician</option>
                <option value="Dermatologist">Dermatology</option>
                <option value="Orthopedist">Orthopedic</option>
                <option value="physiotherapist">Physiotherapist</option>
            </select>
            <br><br>
            <select class="form-select" name="pb_department">
                <option value="<?php echo $receivedPatientDpt; ?>">
                    <?php echo $receivedPatientDpt;?>
                </option>
                <option selected>Department</option>
                <option value="Dental">Dental </option>
                <option value="Optical">Optical</option>
                <option value="Physician">Physician</option>
                <option value="Dermatology">Dermatology</option>
                <option value="Orthopedic">Orthopedic</option>
                <option value="physiotherapy">Physiotherapy</option>
            </select>
            <br>
            <input class="btn btn-outline-info btn-block" name="btn_update" value="Update" type="submit">
            <a class="btn btn-outline-success btn-block" href="dashboard.php">Back</a>
            <input value="<?php echo $PatientId; ?>" name="p_id" type="hidden">
        </form>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>

