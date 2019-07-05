<?php include('../ressources/config.php'); 
$id = escape_string($_GET['id']);
$sql = "DELETE FROM category WHERE cat_id = " .$id." ";
$query = query($sql);
confirm($query);

?>