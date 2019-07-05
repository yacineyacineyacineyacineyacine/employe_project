<?php
  include('../ressources/config.php');
  $nom =       escape_string($_POST['nom']);
  $prenom =    escape_string($_POST['prenom']);
  $ddn =       escape_string($_POST['ddn']);
  $adress =    escape_string($_POST['adress']);
  $tel =       escape_string($_POST['tel']);
  $email =     escape_string($_POST['email']);
  $category =  escape_string($_POST['category']);
  $photo =     escape_string($_POST['photo']);
  if (!empty($nom) && !empty($prenom) && !empty($ddn) && !empty($adress) && !empty($tel) && !empty($email) && !empty($category) && !empty($photo) ) {
    $sql = "INSERT INTO employe (nom, prenom, ddn, adress, tel, email, cat_id, photo) VALUES ('$nom', '$prenom',
                                 '$ddn', '$adress', '$tel', '$email', '$category', '$photo')";
   insert_employe($sql);  
  }
                            

  
?>