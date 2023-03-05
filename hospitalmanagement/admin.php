<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/favicon">
    <link rel="stylesheet" href="css/admin.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abel&family=EB+Garamond:ital,wght@1,500&family=Oswald:wght@300&display=swap" rel="stylesheet">
    <title>Admin Panel</title>
</head>

<body style="background-color: azure;">
    <div class="container">
        <nav class="navbar navbar-light">
            <a class="navbar-brand" href="index.php"><span class="mb-0 h1">MDU Hospitals</span></a>
            <span class="mb-0 h4" style="padding-right: 15%;">Admin Portal</span>
        </nav>
    </div>
    <div class="selectors">
        <div class="row">
            <div class="col-lg-3">
                <button type="button" class="btn btn-outline-info" style="text-decoration-line: none;"> <a href="patient.php">Patient</a> </button>
                <img src="images/Flaticon/patient.png" width="250" style="padding-top:15% ;" alt="patient">
            </div>
            <div class="col-lg-3">
                <button type="button" class="btn btn-outline-info"><a href="doctor.php">Doctor</a></button>
                <img src="images/Flaticon/doctor.png" width="250" style="padding-top:15% ;" alt=" doctor">
            </div>
            <div class="col-lg-3 ">
                <button type="button" class="btn btn-outline-info"> <a href="nurse.php">Nurse</a></button>
                <img src="images/Flaticon/nurse.png" width="250" style="padding-top:15% ;" alt=" nurse">
            </div>
            <div class="col-lg-3 ">
                <button type="button" class="btn btn-outline-info"><a href="wardboy.php">Wardboy</a></button>
                <img src="images/Flaticon/wardboy.png" width="250" style="padding-top:15% ;" alt=" wardboy">
            </div>
        </div>
    </div>
</body>