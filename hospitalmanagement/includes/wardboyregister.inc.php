<?php
include_once 'dbh.inc.php';
$patientid = $_POST['patientid'];
$patientname = $_POST['patientname'];
$age = $_POST['age'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$gender = $_POST['gender'];
$bloodgroup = $_POST['bloodgroup'];
$mobile = $_POST['mobile'];
$roomnumber = $_POST['roomnumber'];
$sql = "INSERT INTO patient(Patient_ID, Room_Number, Patient_Name, Age, Weight, Height, Blood_Group, Mobile_Number, Symptoms, Appointment_Time) VALUES ('$patientid','$roomnumber','$patientname','$age','$weight','$height','$bloodgroup','$mobile','$symptoms','$appointementtime');";
mysqli_query($conn, $sql);
header("Location:../wardboy.php?wardboyEntry=Success?");
