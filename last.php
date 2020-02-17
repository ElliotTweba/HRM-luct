<?Php
$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "currier";
		
				$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$query="select * from course where faculty='ICT'";
$step = $conn->prepare($query);
$step->bindParam(':name', $name,PDO::PARAM_STR,50);
$step->execute();
$step = $step->fetchAll();

echo "<table>";

echo "<tr><th>id</th><th>userid</th><th>password</th><th>name</th><th>status</th></tr>";

foreach ($step as $row) {
echo "<tr ><td>$row[faculty]</td><td>$row[name]</td></tr>";
}

echo "</table>";
?>