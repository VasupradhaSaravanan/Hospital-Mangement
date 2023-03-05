<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/favicon">
    <link rel="stylesheet" href="css/doctor.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abel&family=EB+Garamond:ital,wght@1,500&family=Oswald:wght@300&display=swap" rel="stylesheet">
    <title>Doctor Panel</title>
</head>

<body style="background-color: azure;">
    <div class="container">
        <nav class="navbar navbar-light">
            <a class="navbar-brand" href="index.php"><span class="mb-0 h1">MDU Hospitals</span></a>
            <span class="mb-0 h4" style="padding-right: 15%;">Doctor Portal</span>
        </nav>
    </div>
    <div class="container formContainer">
        <form action="includes/doctorregister.inc.php" method="POST">
            <div class="form-group frm">
                <label for="formGroupExampleInput">Doctor ID</label>
                <input type="text" name="doctorid" class="form-control" id="formGroupExampleInput" placeholder="">
            </div>
            <div class="form-group frm">
                <label for="formGroupExampleInput">Doctor Name</label>
                <input type="text" name="doctorname" class="form-control" id="formGroupExampleInput" placeholder="">
            </div>
            <div class="form-group frm">
                <label for="formGroupExampleInput2">Specialization</label>
                <input type="text" name="specialization" class="form-control" id="formGroupExampleInput2" placeholder="">
            </div>
            <div class="form-group frm">
                <label for="formGroupExampleInput">Gender</label>
                <input type="text" name="gender" class="form-control" id="formGroupExampleInput" placeholder="W for Women & M for Men">
            </div>
            <div class="form-group frm">
                <label for="formGroupExampleInput">Blood Group</label>
                <input type="text" name="bloodgroup" class="form-control" id="formGroupExampleInput" placeholder="">
            </div>
            <div class="form-group frm">
                <label for="formGroupExampleInput">Contact Number</label>
                <input type="text" name="contactnumber" class="form-control" id="formGroupExampleInput" placeholder="">
            </div>
            <div class="buttonclass">
                <button type="submit" class="btn btn-primary"> Submit </button>
            </div>
        </form>
    </div>
</body>