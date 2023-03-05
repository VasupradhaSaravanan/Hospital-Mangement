<?php
include_once 'database.php';

if(isset($_POST['ViewDetails'])) { 
     $Patient_ID = $_POST['Patient_ID'];

     $sql = "SELECT * FROM Patient WHERE Patient_ID = '$Patient_ID'";

     #mysqli_query($conn, $sql)

     $aResult=$conn->query($sql);
     if($aResult->num_rows > 0) { }
     else {
          echo "No records found";
     }

     while($rows = $aResult->fetch_assoc()){
         #$Patient_ID = $_POST['Patient_ID'];
         $Patient_Name = $rows['Patient_Name'];
         $Patient_Age = $rows['Patient_Age'];
         $Patient_Gender = $rows['Patient_Gender'];
         $Patient_Height = $rows['Patient_Height'];
         $Patient_Weight = $rows['Patient_Weight'];
         $Patient_BloodGroup = $rows['Patient_BloodGroup'];
         $Patient_Symptoms = $rows['Patient_Symptoms'];
         $Patient_Appointment = $rows['Patient_Appointment'];
         $Patient_MobNum = $rows['Patient_MobNum'];

         echo "Name : " . $Patient_Name . "<br>";
         echo "Age : " . $Patient_Age . "<br>";
         echo "Gender : " . $Patient_Gender . "<br>";
         echo "Height : " . $Patient_Height . "<br>";
         echo "Weight : " . $Patient_Weight . "<br>";
         echo "Blood Group : " . $Patient_BloodGroup . "<br>";
         echo "Symptoms : " . $Patient_Symptoms . "<br>";
         echo "Appointment Timings : " . $Patient_Appointment . "<br>";
         echo "Mobile Number : " . $Patient_MobNum . "<br>";
    }
#}


if(isset($_POST['save'])) {     

     $Bill_ID = $_POST['Bill_ID'];
     $RoomNum = $_POST['RoomNum'];
     $Patient_Diagnosis = $_POST['Patient_Diagnosis'];
     $Patient_Prescription = $_POST['Patient_Prescription'];

     # echo $Patient_ID;
     # echo "hello";
     
    # $sql = "INSERT INTO Patient (Patient_ID, Patient_Name, Patient_Age, Patient_Gender, Patient_Height, Patient_Weight, Patient_BloodGroup, Patient_Symptoms, Patient_Appointment, Patient_MobNum)
     
    # VALUES ('$Patient_ID', '$Patient_Name', '$Patient_Age', '$Patient_Gender', '$Patient_Height', '$Patient_Weight', '$Patient_BloodGroup', '$Patient_Symptoms', '$Patient_Appointment', '$Patient_MobNum')";
     
     $sql = "UPDATE Patient SET Bill_ID = '$Bill_ID', RoomNum = '$RoomNum', Patient_Diagnosis = '$Patient_Diagnosis', Patient_Prescription = '$Patient_Prescription' WHERE Patient_ID = '$Patient_ID'";
     
     # if (mysqli_query($conn, $sql)) {
     #   echo "Details updated successfully !";
     # } 
     # else {
     #    echo "Error: " . $sql . "
# " . mysqli_error($conn);
#      }
     
     mysqli_close($conn);
}
}
