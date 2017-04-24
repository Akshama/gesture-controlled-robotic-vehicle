<head>
        <title>Contact Details</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel=stylesheet href='css/a.css'>
        <meta charset="utf-8">
        <style type="text/css">
  body 
    {
      background: -webkit-linear-gradient(315deg, #0e7fef 0%, #00a7c9 44%, #00d3a2 100%), -webkit-linear-gradient(45deg, #f20e6d 0%, rgba(242, 14, 109, 0.93) 7%, rgba(0, 211, 162, 0) 100%);
  background: linear-gradient(135deg, #0e7fef 0%, #00a7c9 44%, #00d3a2 100%), linear-gradient(45deg, #f20e6d 0%, rgba(242, 14, 109, 0.93) 7%, rgba(0, 211, 162, 0) 100%);

    }
</style>
      </head> 

<?php


//function read_db_emergency_contact_details($id)
//{

     //$id = $_POST['user_id'];
      $id=1;
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



