<? php
include 'database.php';
$dbConn = new Database();
if(isset($_POST) && $_POST['action'] == 'registration'){
	$data = array('faculty' => $_POST['faculty'], 'name' => $_POST['name']);
	$result = $dbConn->insert('course', $data);
	if($result){
		echo "success";
	} else {
		echo "failed";
	}
}
?>