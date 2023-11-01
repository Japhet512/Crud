<?php
$stu_id = $_POST['sid'];
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

include 'config.php';

$sql = "UPDATE student SET svoters = '{$stu_voters}', sprecinct = '{$stu_precinct}', sfirstname = '{$stu_firstname}', slastname = '{$stu_lastname}', smiddlename = '{$stu_middlename}', sstreet = '{$stu_street}', sbarangay = '{$stu_barangay}', smunicipality = '{$stu_municipality}', scity = '{$stu_city}', sregion = '{$stu_region}', szipcode = '{$stu_zipcode}' WHERE sid = {$stu_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/crud/index.php");

mysqli_close($conn);

?>
