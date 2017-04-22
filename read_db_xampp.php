<?php




$host     = "localhost";
$port     = 3306;
$socket   = "";
$user     = "root";
$password = "";
$dbname   = "map";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
    or die ('Could not connect to the database server' . mysqli_connect_error());


$query = "SELECT user_id, user_name, password,gender,address,pin_code
          FROM   user_profile_details
          ";

if ($stmt = $con->prepare($query)) {

    $stmt->execute();
    $stmt->bind_result($user_id, $user_name, $password,$gender,$address,$pin_code);

    while ($stmt->fetch()) 
    {
         printf("%d, %s, %s,%s,%s,%s  ", $user_id, $user_name, $password,$gender,$address,$pin_code);
    	 echo "<br>";
    }


    $stmt->close();
}

$con->close();


?> 



