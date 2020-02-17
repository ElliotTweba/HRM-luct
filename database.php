<? php
class Database {
	private $hostname;
	private $username;
	private $password;
	private $dbname;
	private $dbConn;
	function constructor(){
		try{
			$this->hostname = "localhost";
			$this->username = "root";
			$this->password = "";
			$this->dbname = currier;
			$this->dbConn = new PDO("mysql:host=$this->hostname;dbname=
			$this->dbname", $this->username, $this->password);
			$this->dbConn->setAttribute(PDO::ATTR_ERRMODE_EXCEPTION);
			return $this->dbConn;
		} catch(PDOEXCEPTION $e){
			echo "Connection failed:" . $e->getMessage();
		}
	}
	
	public function insert($table, $data){
		$keys = implode(',', array_keys($data));
		$values = ":" . implode(',:', array_keys($data));
		$sql = "INSERT INTO $table($keys) VALUES($values)";
		
		$stmt = $this->dbConn->prepare($sql);
		
		foreach($data as $key => $value){
			$stmt->bindValue(":$key", $value);
		}
		return $stmt->execute();
	}
}
	
?>








