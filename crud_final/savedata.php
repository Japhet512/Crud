<?php

 $stu_voters = $_POST['svoters'];
 $stu_precinct = $_POST['sprecinct'];
 $stu_lastname = $_POST['slastname'];
 $stu_firstname = $_POST['sfirstname'];
 $stu_middlename = $_POST['smiddlename'];
 $stu_street = $_POST['sstreet'];
 $stu_barangay = $_POST['sbarangay'];
 $stu_municipality = $_POST['smunicipality'];
 $stu_city = $_POST['scity'];
 $stu_region = $_POST['sregion'];
 $stu_zipcode = $_POST['szipcode'];

$conn = mysqli_connect("localhost","root","","crud") or die("Connection Failed");

$sql = "INSERT INTO student(svoters,sprecinct,slastname,sfirstname,smiddlename,sstreet,sbarangay,smunicipality,scity,sregion,szipcode) 
VALUES ('{$stu_voters}','{$stu_precinct}','{$stu_lastname}','{$stu_firstname}','{$stu_middlename}','{$stu_street}','{$stu_barangay}','{$stu_municipality}','{$stu_city}','{$stu_region}','{$stu_zipcode}')";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/crud/index.php");

mysqli_close($conn);

?>
