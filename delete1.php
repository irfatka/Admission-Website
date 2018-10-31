
<?php

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

$sql = "SELECT firstname,lastname,gender,contact1,college,branch,type from student_details";
$result = $conn -> query($sql);
$sid=$_GET['name'];


$row1 = $result -> fetch_assoc();
$sql1 = "DELETE from student_details where sid=$sid";

$result = $conn -> query($sql1);
echo "Record deleted successfully !";




$conn->close();
?>