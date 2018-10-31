<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$firstname=$_REQUEST['firstname'];
	$lastname =$_REQUEST['lastname'];
	$gender =$_REQUEST['gender'];
	$contact1 =$_REQUEST['contact1'];
	$contact2 =$_REQUEST['contact2'];
	$sscmarks =$_REQUEST['sscmarks'];
	$hscmarks =$_REQUEST['hscmarks'];
	$cetmarks =$_REQUEST['cetmarks'];
	$college =$_REQUEST['college'];
	$branch =$_REQUEST['branch'];
	$type =$_REQUEST['type'];
	

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fe_admission";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO student_details VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssiiiiisss",$firstname,$lastname,$gender,$contact1,$contact2,$sscmarks,$hscmarks,$cetmarks,$college,$branch,$type);

// set parameters and execute

$firstname=$_REQUEST['firstname'];
$lastname =$_REQUEST['lastname'];
$gender =$_REQUEST['gender'];
$contact1 =$_REQUEST['contact1'];
$contact2 =$_REQUEST['contact2'];
$sscmarks =$_REQUEST['sscmarks'];
$hscmarks =$_REQUEST['hscmarks'];
$cetmarks =$_REQUEST['cetmarks'];
$college =$_REQUEST['college'];
$branch =$_REQUEST['branch'];
$type =$_REQUEST['type'];
$stmt->execute();

echo "You have registered successfully !!";
$stmt->close();
$conn->close();
}
?>