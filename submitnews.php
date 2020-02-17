<?php	
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "currier";

try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "INSERT INTO news (heading, month,day,content,user) VALUES ('".$_POST["heading"]."','".$_POST["month"]."','".$_POST["day"]."','".$_POST["message"]."','".$_POST["user"]."')";
	if($conn->exec($sql)){
		echo"<script type= 'text/javascript'>alert('News Successfully Posted');
		     location='addnews.php';
		</script>";
		
	} else{
		echo"<script type= 'text/javascript'>alert('News Not Inserted');
		     location='addnews.php';
		</script>";
	}
	
}
catch(PDOException $e){
	echo $e . "<br>" . $e->getMessage();
}
$conn = null;
?>