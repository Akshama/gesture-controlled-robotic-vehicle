<html>
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
			<body>


<?php
	
		$a = $_POST['num_of_contacts'];

		session_start();
 
 		$_SESSION['num']= $_POST['num_of_contacts'];

		$c=1;
		echo "<form action=save_and_exit.php method=post>";
		echo "<table class='table table-bordered'>
								<tr class=tor>
								<th><center>S.No</center></th>
								<th><center>Contact Number</center></th>";

		while($a != 0) {
									$contact = "contact".$a;
							
?>



<tr>
    <td><br><input type=text name=<?php echo $c; ?> value=<?php echo $c; ?> hidden><?php echo $c; ?></td>
								
    <td><input type=text name=<?php echo $contact; ?> > </td>
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

