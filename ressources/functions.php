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
         die("FAILED CONNECTION" . mysqli_error($conection));
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

 // Get product
 function get_employies(){
     $query = query("SELECT * FROM employe");
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
               //echo $employe;    
 }
}

?>