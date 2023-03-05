<?php
include_once "dbh.inc.php";
$doctorid = $_POST['doctorid'];
$doctorname = $_POST['doctorname'];
$specialization = $_POST['specialization'];
$contactnumber = $_POST['contactnumber'];
$gender = $_POST['gender'];
$bloodgroup = $_POST['bloodgroup'];

$sql = "INSERT INTO doctor(Doc_ID, Doc_Name, Specialization, Mobile_Number, Gender, Blood_Group) VALUES ('$doctorid','$doctorname','$specialization','$contactnumber','$gender','$bloodgroup');";
mysqli_query($conn, $sql);
header("Location:../doctor.php?doctorEntry=Success?");
