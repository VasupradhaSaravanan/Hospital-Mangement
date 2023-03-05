<?php
include_once "dbh.inc.php";
$patientid = $_POST['patientid'];
$diagnosis = $_POST['diagnosis'];
$prescription = $_POST['prescription'];
#$sql = "UPDATE patient" . "SET Diagnosis = $diagnosis" . "Prescription='$prescription'" . "WHERE Patient_ID = $patientid";
$sql = "UPDATE patient SET Diagnosis = '$diagnosis', Prescription='$prescription' WHERE Patient_ID = '$patientid'";
mysqli_query($conn, $sql);
header("Location:../doctorwork.php?patientUpdate=Success?");
