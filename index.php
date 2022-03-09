<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="view port"content="width=device-width,initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <!-- <link rel="stylesheet"href="index.css"> -->
    <title></title>
</head>
<body>

<script src="index.js"></script>


<!--start of navbar-->
<nav class="navbar navbar-light bg-white fixed-top">
        <a class="navbar-brand" href="#">Greenwood Centre</a>
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php ">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#services">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact">Contact Us</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-primary" href="index.php" role="button"
                   data-bs-toggle="modal" data-bs-target="#exampleModal">Book Appointment</a>
            </li><br>
            <li class="nav-item">
                <a class="nav-link" href="index.php"
                   data-bs-toggle="modal" data-bs-target="#examplemodal">Login</a>
              </li>
        </ul>
</nav>
<!--end of navbar-->

<div class="modal fade" id="examplemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ADMIN LOGIN FORM</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="login.php" method="post">
                    <div class="mb-3 d-flex flex-row align-items-center">
<!--                        <i class="bi bi-person-fill"></i>-->
                        <label for="disabledTextInput" class="form-label"></label>
                        <input required type="text" id="disabledTextInput" class="form-control validate" name="user_name" placeholder="Username">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label"></label>
                        <input required type="password" id="disabledTextInput" class="form-control validate" name="pass_word" placeholder="Password">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button name="btn_login" type="submit" class="btn btn-primary btn-block btn-lg gradient-custom-4" style="color: white">LOGIN</button>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>
<!--end of modal-->


<!--end of modal-->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Book Appointment Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="bookappmnt.php" method="post">
                <label for="">Please confirm that you would like to request for the following appointment:</label><br>
                <div class="md-form md-outline input-with-post-icon datepicker">
                    <label for="">Date</label>
                    <input placeholder="Select date" type="date" id="" name="pb_date" class="form-control" aria-colspan="30" aria-rowspan="20">

                </div><br>
                <label for="">Time</label>
                <div class="md-form md-outline">
                    <input type="time" id="" class="form-control" name="pb_time" placeholder="Select time">
                </div><br>

                <div class="mb-3">
                    <label for="" class="form-label"></label>
                    <input type="text" id="" class="form-control" name="pb_name" placeholder="Your Name">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label"></label>
                    <input type="text" id="" class="form-control" name="pb_email" placeholder="Email Address">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label"></label>
                    <input type="tel" id="" class="form-control" name="pb_number" placeholder="Phone Number">
                </div>
                <br>
                    <select class="form-select" aria-label="Default select example" name="pb_doctor">
                        <option selected>Doctor</option>
                        <option value="Dentist">Dentist</option>
                        <option value="Optician">Optician</option>
                        <option value="Physicist">Physicist</option>
                        <option value="Dermatologist">Dermatologist</option>
                        <option value="Orthopedist">Orthopedic</option>
                        <option value="physiotherapist">Physiotherapist</option>
                    </select>
                    <br><br>
                <select class="form-select" aria-label="Default select example" name="pb_department">
                    <option selected>Department</option>
                    <option value="Dental">Dental </option>
                    <option value="Optical">Optical</option>
                    <option value="Physician">Physician</option>
                    <option value="Dermatology">Dermatology</option>
                    <option value="Orthopedic">Orthopedic</option>
                    <option value="physiotherapy">Physiotherapy</option>
                </select>
                <br>
            </div>
            <div class="modal-footer">
                <button type="submit"name="btn_book" class="btn btn-primary">Submit Form</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!--end of modal-->





<div class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/hospital.jpg" class="d-block w-100" alt="..." style="width:1000px;height:700px;">
            <div class="carousel-caption" >
            <h1>Your Health, Our priority.</h1><br>
            <h1>Providing Quality Care In An Environment Of Excellence.</h1><br>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/homee.jpg" class="d-block w-100" alt="..."style="width:1000px;height:700px;">
            <div class="carousel-caption" >
                <h1>Your Health, Our priority.</h1><br>
                <h1>Providing Quality Care In An Environment Of Excellence.</h1><br>
            </div>
        </div>
        <div class="carousel-item">
            <img src=images/home.jpg class="d-block w-100" alt="..."style="width:1000px;height:700px;">
            <div class="carousel-caption" >
                <h1>Your Health, Our priority.</h1><br>
                <h1>Providing Quality Care In An Environment Of Excellence.</h1><br>
            </div>
        </div>
    </div>
</div>


<div class="card mb-3" style="max-width: 1720px; background-color: white;" id="about">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="images/Doctor-Background.png" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
            <div class="row g-6">
                <div class="card-body">
                    <h2 class="card-title" style="color: cornflowerblue;"><br>Committed To Excellent Care</h2><br><br>
                    <h2 class="card-title" style="color: cornflowerblue;">Our Vision</h2><br>
                    <p class="card-text">To be the best healthcare provider of comprehensive and affordable services in the region.</p><br><br>
                    <h2 class="card-title" style="color: cornflowerblue;">Our Mission</h2><br>
                    <p class="card-text">To provide quality, affordable and all-inclusive inpatient and outpatient treatment services to the satisfaction of our clients.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
    * {
        box-sizing: border-box;
    }

    /* Create four equal columns that floats next to each other */
    .column {
        float: left;
        width: 25%;
        margin: 0;
        padding: 10px;
        height: 300px; /* Should be removed. Only for demonstration */
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

</style>
    <div class="card">
        <div class="card-body" style="background-color: lightsteelblue;" >
            <h2 style="text-align: center; color: cornflowerblue;">Why should  you choose us?</h2><br>
            <h3 style="text-align: center; color: cornflowerblue;">In addition to our expertise and quallity, we guarantee the following</h3>
            <div class= "row">
                <div class="column">
                    <i class="bi bi-person-check-fill" style="font-size: 2rem; color: cornflowerblue; position: center"></i>
                    <h3 style="color: cornflowerblue;">Patient satisfaction</h3><br>
                    <p>Our patients are always at the center of everything we do. This ensures we deliver excellent patient care.</p>
                </div>
                <div class="column">
                    <i class="bi bi-bag-plus-fill" style="font-size: 2rem; color: cornflowerblue; position: center"></i>
                    <h3 style="color: cornflowerblue;">Medical Technology & Equipment</h3>
                    <p>We have invested in top equipment, and information technology enhancements to provide a state-of-the-art environment for clinical staff to practice, and for our patients to receive high-quality care.</p>
                </div>
                <div class="column">
                    <i class="bi bi-hand-thumbs-up-fill" style="font-size: 2rem; color: cornflowerblue; position: center"></i>
                    <h3 style="color: cornflowerblue;">Organizational Excellence</h3>
                    <p>We are a health service provider of excellence that integrates culture, engages employees, support excellent operations, and partners to successfully serve patients. We cultivate an environment of passionate and engaged people.</p>
                </div>
                <div class="column">
                    <i class="bi bi-stars" style="font-size: 2rem; color: cornflowerblue; position: center"></i>
                    <h3 style="color: cornflowerblue;">Service Excellence</h3><br>
                    <p>We Provide a unique brand of service excellence that promotes high satisfaction for patients, staff and medical professionals. We are a leading hospital recognized for best outcomes in clinical quality and patient safety. </p>
                </div>
            </div>
        </div>

        <h1 class="text-center" id="services">Services</h1>
        <div class="row">
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img src="images/xray.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Radiology</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, commodi culpa deserunt doloremque ea enim explicabo</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img src="images/one.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Operating room</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque beatae commodi cumque earum, illo rferendis quae quibusdam</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img src="images/clinic_03.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Specialist Physician</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium at aut, consequuntur eaque, earum expedita id illo incid
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img src="images/our_staff.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Dental</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias blanditiis consequatur dignissimos dolore incidun</p>
                    </div>
                </div>
            </div>
        </div>

<form action="contact.php" method="post" id="contact">
    <!-- <fieldset disabled> -->
    <div class="card">
        <div class="card-body" style="background-color: whitesmoke;" >
            <div class="container">
                <div class="row">
                    <div class="col">
                        <legend>Contact Us</legend>
                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">Name</label>
                            <input type="text" id="disabledTextInput" class="form-control" name="user_name" placeholder="Your Name">
                        </div>
                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">Email Address</label>
                            <input type="text" id="disabledTextInput" class="form-control" name="email_address" placeholder="Email Address">
                        </div>
                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">Phone Number</label>
                            <input type="text" id="disabledTextInput" class="form-control" name="phone_number" placeholder="Phone Number">
                        </div>
                        <br>

                        <div class="input-group">
                            <span class="input-group-text">Send Message</span>
                            <textarea class="form-control" aria-label="With textarea" name="text_message"></textarea>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary" name="btn_submit">Submit</button>

                    </div>
                    <div class="col">
                        <legend>Find Us</legend><br>
                        <ul>
                            <li>Email info: greenwoodcentre@gmail.com</li>
                            <li>Phone no:+254776499693</li>
                            <li>Beverly Hills</li>
                        </ul>
                    </div>
                </div>
            </div>
</form>
</div>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
