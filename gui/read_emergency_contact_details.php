<?php


//function read_db_emergency_contact_details($id)
//{

     $id = $_POST['user_id'];
    //echo "name entered  ".$name."<br>";
    //echo "password enterred  ".$user_password."\n";
    

      $host     = "localhost";
      $port     = 3306;
      $socket   = "";
      $user     = "root";
      $password = "";
      $dbname   = "map";

      $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
          or die ('Could not connect to the database server' . mysqli_connect_error());


      $query = "SELECT user_id, contact_no 
                FROM   emergency_contact_details
                WHERE user_id='$id' ";


      if ($stmt = $con->prepare($query)) 
      {

          $stmt->execute();
          $stmt->bind_result($user_id, $contact_no);

          while ($stmt->fetch()) 
          {
               printf(" %s  ", $contact_no);
               echo "<br>";
          }


          $stmt->close();
      }

      $con->close();








//}

?> 



