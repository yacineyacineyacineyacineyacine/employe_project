<?php include('../ressources/config.php'); ?>
<?php 
    if (!empty($_POST)) {
        
        // get the subject
             // some code ..
            $subject = escape_string($_POST['subject']);
            
            
            

        //  get the mails of employies of the categorie
            // some code ..
            
            $id_receiver = escape_string($_POST['receiver']);
            
            $sql_receiver = "SELECT email from employe WHERE employe.cat_id = '$id_receiver'";
            $query_receiver = query($sql_receiver);
            confirm($query_receiver);
           
                             
              
        // send the email 
            // some code
            $mail = escape_string($_POST['mail_text']);
                 
                  while ($row_receiver = fetch_array($query_receiver)) {
                      $receiver = $row_receiver['email'];
                      
                      if(mail($receiver, $subject , $mail)){
                           $sql_mail = "INSERT INTO email (receiver, sbj, mail  ) VALUES ('$id_receiver','$subject'
                                 ,'$mail')";
                                 $query_mail = query( $sql_mail);
                                 confirm($query_mail); 
                      } else {
                          echo "Failed";
                      }
                  }
            }
            
           

    


?>
