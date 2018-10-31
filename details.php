<!DOCTYPE html>
<html>
<head>
	<title>Details</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		tr:nth-child(even){
  			background-color: lightgrey;
		}

		tr:nth-child(odd){
  			background-color: lightblue;
		}

		td{
 			height: 50px;
  			vertical-align: bottom;
  			padding: 15px;
		}

		th{
			height: 50px; 
			text-align: left; 
			padding: 15px; 
			background-color: blue; 
			color: white;
		}
	</style>

	<script type="text/javascript">
		function deleteRow1(r) {
    	//var i = r.parentNode.parentNode.rowIndex;
    	document.getElementById("table1").deleteRow(r);
    	var javascriptVariable = r;
  		window.location.href = "delete1.php?name=" + javascriptVariable;



   }



    	
		

	</script>
</head>
<body background="rolled-blueprints-on-table_23-2147710843.jpg">

<div class="head" id="home"> 
 	
 	<nav>
 	<div class="navid">
 	<a href=mainpage.html>HOME</a> 
 	<a href=student_form.html>NEW STUDENT</a>
 	<a href=#>DETAILS</a>
 	<a href=#>ABOUT US</a>
 	<a href=#>CONTACT US</a>
 	
 	
 	</div>
 	</nav>
 </div>
 <br><br><br><br><br>
	<center>
<table border="1" id="table1" style="width: 100%;">
	<tr>
		<th><strong>First Name</strong></th>
		<th><strong>Last Name</strong></th>
		<th><strong>Gender</strong></th>
		<th> <strong>Contact</strong></th>
		<th><strong>College</strong></th>
		<th><strong>Branch</strong></th>
		<th><strong>Type</strong></th>
	</tr>

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
$i=1;
if ($result -> num_rows>0) {
	while ($row = $result -> fetch_assoc()) {

		echo "<tr onclick=deleteRow1($i)><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["gender"]."</td><td>".$row["contact1"]."</td><td>".$row["college"]."</td><td>".$row["branch"]."</td><td>".$row["type"]."</td><td><a href=#>Delete</a></td></tr>";
	$i=$i+1;

	}
	echo "</table>";

	}

	else{
		echo "No entries in the database";
	}

?>

</table>
</center>
</body>
</html>