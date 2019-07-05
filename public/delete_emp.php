<?php  require_once("../ressources/config.php");
$id = escape_string($_GET['id']); 
$sql = "DELETE FROM employe WHERE emp_id=" . $id ."";
query($sql);
confirm($sql); 
echo "employe deleted";
?>
