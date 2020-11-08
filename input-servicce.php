<?php
	$cloudhost= "";
	$USERNAME="un";
	$password="pw";
	$database="gradesDB";
	
	$conn= new mysqli($cloudhost,$USERNAME, $password, $database);
	
	//check connection
	if($conn-> cennect_errno){
		die("Failed to connect to MySQL: ". $conn->conn_error);
	}

	//Accept grades from either form or AJAX request
	$studentID= $_post["studentID"];
	$grades= $_POST["grades"];

	//Set up Insert command
	$stmt= $conn->prepare("INSERT INTO gradesTable (studentID, grades) VALUES(?,?)");
	$stmt-> bind_parm("di", $studentID, $grades);
?>