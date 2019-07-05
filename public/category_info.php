<?php include('../ressources/config.php'); ?>
<?php  include( TEMPLATE_FRONT . DS . "header.php");?>
<?php
if(!empty($_GET)){
    $cat_id = escape_string($_GET['id']);
    $sql = "SELECT * FROM category, employe WHERE category.cat_id = employe.cat_id AND category.cat_id = '$cat_id'";
    $query = query($sql);
    confirm($query);
    while ($row = fetch_array($query)) {
    echo "<div> 
                     <h4>nom: </h4>          
                     <p>" . $row['nom'] ."</p>
                     <h4>prenom: </h4>           
                     <p>" . $row['prenom'] ."</p>
                     <h4>date de naissance: </h4>
                     <p>" . $row['ddn']."</p>
                     <h4>address: </h4>
                     <p>".   $row['adress'] ."</p>
                     <h4>telephone: </h4> 
                     <p>".  $row['tel'] . "</p>
                     <h4>email: </h4>
                     <p>" . $row['email']."</p>
                     <img src=".$row['photo'] . " alt=" . $row['nom']. " " . $row['prenom']."</div>";
};
}
?>
<?php  include( TEMPLATE_FRONT . DS . "header.php");?>