<?php

	session_start();
	//$contact_details = $_SESSION['contact'];
	$b=$_SESSION['num'];
	$user_id=$_SESSION['user_id'];
	//echo $contact_details[0]."\n";
	//echo $contact_details[1];
    include 'index.php';

    	
    $mysqli = new mysqli('localhost', 'root', '', 'map');

    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

		//$data1 = "SELECT * FROM emergency_contact_details WHERE id=".$id.";";

        
		while ($b!=0)
		 {
			

			//$stmt = $mysqli->prepare("INSERT INTO user_profile_details VALUES (?, ?, ?)");
			//$stmt->bind_param('dss', $user_id, $user_name, $password);

    $stmt = $mysqli->prepare("INSERT INTO emergency_contact_details VALUES(?,?)");
$stmt->bind_param('ds', $user_id,$contact );
$cont="contact".$b;
$contact=$_POST[$cont];

//$user_id = '5';
//$user_name = 'Bhavana';
//$password = "bha";

$stmt->execute();
$stmt->close();            		
			//$sql = "INSERT INTO emergency_contact_details VALUES(?,?)";
			//mysqli_query($con, $sql);
			$b--;
		}

	$mysqli->close();
?>