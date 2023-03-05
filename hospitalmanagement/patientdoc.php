<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/favicon">
    <link rel="stylesheet" href="css/patient.css">
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
        <form action="" method="POST">
            <div class="form-group frm">
                <label for="formGroupExampleInput">Patient ID</label>
                <input type="text" name="patientid" class="form-control" id="formGroupExampleInput" placeholder="">
            </div>
            <div class="buttonclass">
                <button type="submit" class="btn btn-primary"> Search </button>
            </div>
        </form>
    </div>
</body>

</html>