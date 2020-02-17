<?php	
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "currier";

try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "INSERT INTO faculty (school,code,name,email) VALUES ('".$_POST["school"]."','".$_POST["code"]."','".$_POST["name"]."','".$_POST["email"]."')";
	if($conn->exec($sql)){
		echo"<script type= 'text/javascript'>alert('New Faculty Added');
		     location='register.php';
		</script>";
		
	} else{
		echo"<script type= 'text/javascript'>alert('Faculty Not Inserted');
		     location='register.php';
		</script>";
	}
	
}
catch(PDOException $e){
	echo $e . "<br>" . $e->getMessage();
}
$conn = null;
?>