<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include_once "dbh.inc.php";
    extract($_POST);
    $sql = "SELECT  * FROM patient WHERE Patient_ID = '$patientid';";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    echo "<h1>" . "name : ", $row["Patient_Name"] . "</h1>";
    echo "blood group : ", $row["Blood_Group"];
    ?>
</body>

</html>