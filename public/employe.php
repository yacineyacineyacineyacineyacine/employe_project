<?php
include('../ressources/config.php');
$query = query("SELECT * FROM employe WHERE emp_id =" . escape_string($_GET['id'])." ");
confirm($query);
while ($row = fetch_array($query)) {
    echo $row['nom'];
}
?>