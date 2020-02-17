<?php
include "dbcon.php";
$select = $con->prepare("SELECT * FROM upload ");
$select->setFetchMode(PDO::FETCH_ASSOC);
$select->execute();
while($data=$select->fetch()){
?><tr>
<td><?php echo $data['file']; ?></td>
<td><img src="images/<?php echo $data['type']; ?>" width="100" height="100"></td>
<?php
}?>