<?php	
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "currier";

try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "INSERT INTO course (faculty, name,qualification,period,subject1,subject2,subject3,more) VALUES ('".$_POST["faculty"]."','".$_POST["course"]."','".$_POST["qualification"]."','".$_POST["period"]."','".$_POST["subject1"]."','".$_POST["subject2"]."','".$_POST["subject3"]."','".$_POST["more"]."')";
	if($conn->exec($sql)){
		echo"<script type= 'text/javascript'>alert('New Record Inserted Successfully');</script>";
		
	} else{
		echo"<script type= 'text/javascript'>alert('Record Not Inserted');</script>";
	}
	
}
catch(PDOException $e){
	echo $e . "<br>" . $e->getMessage();
}
$conn = null;
?>