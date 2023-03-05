<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/favicon">
    <link rel="stylesheet" href="css/nurse.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abel&family=EB+Garamond:ital,wght@1,500&family=Oswald:wght@300&display=swap" rel="stylesheet">
    <title>Patient Panel</title>
</head>

<body style="background-color: azure;">
    <div class="container">
        <nav class="navbar navbar-light">
            <a class="navbar-brand" href="index.php"><span class="mb-0 h1">MDU Hospitals</span></a>
            <span class="mb-0 h4" style="padding-right: 15%;">Patient Portal</span>
        </nav>
    </div>
    <div class="container formContainer">
        <form action="includes/nurseregister.inc.php" method="POST">
            <div class="form-group frm">
                <label for="formGroupExampleInput">Patient ID</label>
                <input type="text" name="patientid" class="form-control" id="formGroupExampleInput" placeholder="Patient ID assigned">
            </div>
            <div class="form-group frm">
                <label for="formGroupExampleInput">Patient Name</label>
                <input type="text" name="patientname" class="form-control" id="formGroupExampleInput" placeholder="Patient name assigned">
            </div>
            <div class="form-group frm">
                <label for="formGroupExampleInput2">Age</label>
                <input type="text" name="age" class="form-control" id="formGroupExampleInput2" placeholder="Age patient">
            </div>
            <div class="form-group frm">
                <label for="formGroupExampleInput">Height</label>
                <input type="text" name="height" class="form-control" id="formGroupExampleInput" placeholder="Height in cm">
            </div>
            <div class="form-group frm">
                <label for="formGroupExampleInput">Weight</label>
                <input type="text" name="weight" class="form-control" id="formGroupExampleInput" placeholder="Weight in kg">
            </div>
            <div class="form-group frm">
                <label for="formGroupExampleInput">Gender</label>
                <select id="formGroupExampleInput" name="formGroupExampleInput">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="trans">Trans</option>
                </select>
                <input type="text" name="gender" class="form-control" id="formGroupExampleInput" placeholder="">
            </div>
            <div class="form-group frm">
                <label for="formGroupExampleInput">Blood Group</label>
                <input type="text" name="bloodgroup" class="form-control" id="formGroupExampleInput" placeholder="">
            </div>
            <div class="form-group frm">
                <label for="formGroupExampleInput">Mobile</label>
                <input type="text" name="mobile" class="form-control" id="formGroupExampleInput" placeholder="">
            </div>
            <div class="form-group frm">
                <label for="formGroupExampleInput">Syptoms</label>
                <input type="text" name="symptoms" class="form-control" id="formGroupExampleInput" placeholder="">
            </div>
            <div class="form-group frm">
                <label for="formGroupExampleInput">Appointment Time</label>
                <input type="time" name="appointementtime" class="form-control" id="formGroupExampleInput" placeholder="Pick a time">
            </div>
            <div class="form-group frm">
                <label for="formGroupExampleInput">Room Number</label>
                <input type="text" name="roomnumber" class="form-control" id="formGroupExampleInput" placeholder="Room Number">
            </div>
            <div class="buttonclass">
                <button type="submit" class="btn btn-outline-info"><a href="index.php"> Submit</a></button>
            </div>
        </form>
    </div>
</body>

</html>