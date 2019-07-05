<?php  require_once("../ressources/config.php"); 
 $cat = escape_string($_POST['category']);
 $sql = "INSERT INTO category (cat) VALUES ('$cat')";
 insert_category($sql);

?>