<?php  require_once("../ressources/config.php"); ?>
<?php  include( TEMPLATE_FRONT . DS . "header.php");?>
<?php
    if ($_GET){
         $id = escape_string($_GET['id']);
         echo "<div class='add-emp'>
                   <h3>modifier l'employe</h3>
                   <form action= 'update_emp.php' method='POST'>
                       <input type='text' name= 'id' placeholder='nom'  value = ". $id ." >
                       <br>
                       <br>
                       <input type='text' name= 'nom' placeholder='nom' >
                        <br>
                        <br>
                        <input type='text' name='prenom' placeholder='prénom'>
                        <br>
                        <br>
                        <input type='date' name='ddn' >
                        <br>
                        <br>
                        <input type='text' name='adress'  placeholder='address' >
                        <br>
                        <br>
                        <input type='phone' name='tel' placeholder='phone' >
                        <br>
                        <br>
                        <input type='email' name='email' placeholder='email' >
                        <br>
                        <br>
                        <select name='category' id='category'>
                        ";
                        $sql = "SELECT * FROM category";
                        $query = query($sql);
                        confirm($query);
                        while ($row = fetch_array($query)) {
                             echo "<option value=" . $row['cat_id'] . ">" . $row['cat'] . "</option>"; 
                           };
                         echo "</select>
                         <br>
                          <br>
                         <input type='file' name='photo' />
                         <br>
                         <br>
                         <button type='submit'>update</button>
             </form>
    </div>";  
         
    }
  if(!empty($_POST)){
       $id =       escape_string($_POST['id']);
       $nom =      escape_string($_POST['nom']);
       $prenom=    escape_string($_POST['prenom']);
       $ddn =      escape_string($_POST['ddn']);
       $adress =   escape_string($_POST['adress']);
       $tel =      escape_string($_POST['tel']);
       $email =    escape_string($_POST['email']);
       $category = escape_string($_POST['category']);
       $photo =    escape_string($_POST['photo']);
       
       $sql = "UPDATE employe SET nom = '$nom', prenom ='$prenom', ddn = '$ddn', adress ='$adress', tel = $tel,
            email ='$email', cat_id ='$category', photo= '$photo' WHERE emp_id='$id'";
            $query = query($sql);
            confirm($query);
            
  } 
  
?>