<?php

    include 'index.php';

    $id = $_SESSION['id'];
		$b = $_SESSION['no_of_queries'];
		
        $mysqli = new mysqli('localhost', 'root', '', 'map');

    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

		$data1 = "SELECT * FROM emergency_contact_details WHERE id=".$id.";";

        $a = $data2;
		$c = $a;
		while ($b!=0) {
			

$stmt = $mysqli->prepare("INSERT INTO user_profile_details VALUES (?, ?, ?)");
$stmt->bind_param('dss', $user_id, $user_name, $password);

            
            $ques = "ques".$b;
			$map = "map".$b;
			$date_s = "date_s".$b;
			$ques1 = $_POST[$ques];
			$map1 = $_POST[$map];
			$date_s1 = $_POST[$date_s];
			$a++;
            
			$sql = "INSERT INTO emergency_contact_details VALUES(?,?)";
			mysqli_query($con, $sql);
			$b--;
		}
		mysqli_close ($con);
?>