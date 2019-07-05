<?php include('../ressources/config.php');?>
<?php  include( TEMPLATE_FRONT . DS . "header.php");?>
<?php
if(!empty($_GET)){
   $emp_id = escape_string($_GET['id']);
   $sql_emp = "SELECT * FROM employe WHERE emp_id ='$emp_id' ";
   $query_emp = query($sql_emp);
   confirm($query_emp);
   while ($row = fetch_array($query_emp)) {
    
                               echo "<div> 
                               <h4>nom: </h4>          
                               <p>" . $row['nom'] ."</p>
                               <h4>prenom: </h4>           
                               <p>" . $row['prenom'] ."</p>
                               <h4>date de naissance: </h4>
                               <p>" . $row['ddn'] . "</p>
                               <h4>address: </h4>
                               <p>".   $row['adress'] ."</p>
                               <h4>telephone: </h4> 
                               <p>".  $row['tel'] . "</p>
                               <h4>email: </h4>
                               <p>" . $row['email']."</p>";
                               $cat_id = $row['cat_id'];
                               $sql_cat = "SELECT cat FROM category, employe WHERE employe.cat_id = category.cat_id 
                               AND category.cat_id = '$cat_id'";
                               $query_cat = query($sql_cat);
                               confirm($query_cat);
                               while ($row_cat = fetch_array($query_cat)) {
                                   echo "<h4>category</h4>
                                          <p>". $row_cat['cat']."</p>";
                               }
                               echo "<img src=".$row['photo'] . " alt=" . $row['nom']. " " . $row['prenom']."</div>";
    }
}
 
?>

<?php  include( TEMPLATE_FRONT . DS . "header.php");?>