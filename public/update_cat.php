<?php  require_once("../ressources/config.php"); 
 if ($_GET) {
     $cat_id = escape_string($_GET['id']);
      echo "<div class='update_cat'>
                   <form action='update_cat.php' method='POST'>
                   <input type='text' name='cat_id' value=". $cat_id ."
                   <label for='category'>category :</label>
                   <input type='text' name='category' required>
                   <button type= 'submit'> modifier </button> 
                </form>
           </dev>";
 }
 
if(isset($_POST['category'])){
   $category = escape_string($_POST['category']);
   $cat_id = escape_string($_POST['cat_id']);
   $sql  = "UPDATE category SET cat= '$category' WHERE cat_id= '$cat_id' ";
   query($sql);
   confirm($sql);
  }
?>