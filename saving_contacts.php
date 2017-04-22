<html>
			<head>
				<title>Contact Details</title>
				<link rel="stylesheet" href="css/bootstrap.min.css">
				<script src="bootstrap/js/bootstrap.min.js"></script>
				<link rel=stylesheet href='css/a.css'>
				<meta charset="utf-8">
			</head>	
			<body>
<?php
echo "<table class='table table-bordered'>
								<tr class=tor>
								<th><center>S.No</center></th>
								<th><center>Contact Number</center></th>";
$a = $_POST['num_of_contacts'];

$c=1;
echo "<form action=save_and_exit.php method=post>";
while($a != 0) {
							$contact = "contact".$a;
							
?>
<tr>
    <td><br><input type=text name=<?php echo $c; ?> value=<?php echo $c; ?> hidden><?php echo $c; ?></td>
								
    <td><input type=text name=<?php echo $contact; ?> id=<?php echo $contact; ?>></td>
</tr>
<?php
	$a--;
	$c++;
  }
 
                echo "</table>";
     echo "<input type=submit name=save class='btn btn-primary' value='Save and Exit'>";
            echo"</form>";
 
                
 
?>
    </body>
</html>