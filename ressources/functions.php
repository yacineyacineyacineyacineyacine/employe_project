<?php
          //helper functions  
   
 // return the result for a given quey
 function query($sql){
     global $connection;
     return mysqli_query($connection, $sql);
 };
 // verify if the query is well executed for a given result
 function confirm($result){
     if (!$result) {
         global $connection;
         die("FAILED CONNECTION" . mysqli_error($connection));
     }
 };
 // escape some carracters to prevent SQL injection
 function escape_string($string){
     global $connection;
     return mysqli_real_escape_string($connection, $string);
 };
 // fetch data from result of query
 function fetch_array($result){
      return mysqli_fetch_array($result);
 };

  // Get employies
 function get_employies(){
     $query = query("SELECT * FROM employe");
     confirm($query);
     while ($row = fetch_array($query)) {
         echo "<div> 
                     <h4>nom: </h4>          
                     <p><a href= employe_info.php?id=" . $row['emp_id']. "> " . $row['nom'] ."</a></p>
                     <p><a href= update_emp.php?id="  . $row['emp_id']. ">update</a></p>
                     <p><a href= delete_emp.php?id="  . $row['emp_id']. ">delete</a></p>
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
                     <img src=" . $row['photo'] . " alt=" . $row['nom']. " " . $row['prenom'] . ">
                     </div>";
               //echo $employe;
                   
 };
};

  // Get categories 
  function get_categories(){
      $query = query("SELECT * FROM category");
      confirm($query);
      echo "<div> 
                <ul> ";
      while ($row = fetch_array($query)) {
          echo "<ul>
                     <li><a href= category_info.php?id=" . $row['cat_id'] . "> "  . $row['cat'] . "</a></li>
                     <li><a href= delete_cat.php?id="    . $row['cat_id'] . "> delete category </a></li>
                     <li><a href= update_cat.php?id="    . $row['cat_id'] . "> update category </a></li></ul>" ;
        };
             echo "</ul>
          </div>";
  };

  // insert new employe
  function insert_employe($sql){
      $query = query($sql);
      confirm($query);
   };
   function insert_category($sql){
       $query = query($sql);
       confirm($query);
   }
   
    function update_category(){
    //some code
   };
   function delete_category(){
  // some code
   }
   function send_mail($from, $to, $mail){
     
   }

?>