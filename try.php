<?php	
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "currier";

try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "INSERT INTO course (school,faculty, name,qualification,period,subjects) VALUES ('".$_POST["school"]."','".$_POST["faculty"]."','".$_POST["course"]."','".$_POST["qualification"]."','".$_POST["period"]."','".$_POST["subject1"]."')";
	if($conn->exec($sql)){
		echo"<script type= 'text/javascript'>alert('New Record Inserted Successfully');
		     location='register.php';
		</script>";
		
	} else{
		echo"<script type= 'text/javascript'>alert('Record Not Inserted');
		     location='register.php';
		</script>";
	}
	
}
catch(PDOException $e){
	echo $e . "<br>" . $e->getMessage();
}
$conn = null;
?>