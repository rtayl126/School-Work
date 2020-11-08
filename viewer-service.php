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

	//get grades from database
	if($result = $conn-> query("SELECT studentID, grades FROM gradesTable")){
?>	
<table>

<?php
	while($row=$result->fetch_assoc()){
		echo "<tr>";
		echo "<td>" . $row["studentID"] ."</td>";
		echo "<td>" . $row["grades"] ."</td>";
		echo "</tr>";
	}
?>
</table>
<?php
	//free up some memory
	$result-> free_result();
}
//close connection
$conn->close();
?>