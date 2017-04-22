<?php
    $id = 0;
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $pin = $_POST['pin'];
    $gender = $_POST['gender'];

      $host     = "localhost";
      $port     = 3306;
      $socket   = "";
      $user     = "root";
      $password = "";
      $dbname   = "map";

    $mysqli = new mysqli($host, $user, '', $dbname);

      $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
          or die ('Could not connect to the database server' . mysqli_connect_error());


$stmt = $mysqli->prepare("INSERT INTO user_profile_details VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param('dsssss', $user_id, $user_name, $password, $gender, $address, $pin);

$a=0;
$k = "SELECT * FROM user_profile_details";

if ($stmt1 = $con->prepare($k)) {

    $stmt1->execute();
    $stmt1->bind_result($user_id, $user_name, $password,$gender,$address,$pin_code);

    while ($stmt1->fetch()) 
    {
         $a = $user_id;
    }
    
}
    $a=$a+1;
    $user_id = $a;
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $pin = $_POST['pin'];
    $gender = $_POST['gender'];
   
$stmt->execute();



$con->close();
//printf("%d Row inserted.\n", $stmt->affected_rows);
$stmt->close();
session_start();
$_SESSION['user_id']=$user_id;

?> 
		<html>
			<head>
				<title>Add Contacts</title>
				<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
				<script src="bootstrap/js/bootstrap.min.js"></script>
				<link rel=stylesheet href='css/a.css'>
				<meta charset="utf-8">
			</head>

			<body>
				<div class="container">
					<?php
            $a= $_POST['user_name'];
							echo "<h2>User-name: ".$a."</h2>";
							echo "<form action=saving_contacts.php method=post>";
							echo "	<h4>Please enter the number of Contacts you want to add:</h4>
									<input type=text name=num_of_contacts>
									<input type=submit name=enter class='btn btn-log' value='Enter'>";
						

					?>
				</div>
			</body>
		</html>
