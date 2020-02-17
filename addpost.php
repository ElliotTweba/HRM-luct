<?php	
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "currier";

try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "INSERT INTO events (sponsor,venue,comment,day,month) VALUES ('".$_POST["sponsor"]."','".$_POST["venue"]."','".$_POST["comment"]."','".$_POST["day"]."','".$_POST["month"]."')";
	if($conn->exec($sql)){
		echo"<script type= 'text/javascript'>alert('New Record Inserted Successfully');
		    location='post.php';
		</script>";
		
	} else{
		echo"<script type= 'text/javascript'>alert('Record Not Inserted');
		     location='post.php';
		</script>";
	}
	
}
catch(PDOException $e){
	echo $e . "<br>" . $e->getMessage();
}
$conn = null;
?>