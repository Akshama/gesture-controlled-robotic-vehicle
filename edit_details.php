
<?php
		

      $host     = "localhost";
      $port     = 3306;
      $socket   = "";
      $user     = "root";
      $password = "";
      $dbname   = "map";
      $name = $_POST['user_name'];
      $user_password = $_POST['password'];
      


    $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
       or die ('Could not connect to the database server' . mysqli_connect_error());

	//WHERE user_name='$name' AND password='$user_password'"
      $query = "SELECT user_id, user_name, password,gender,address,pin_code
                FROM   user_profile_details
                WHERE user_name='$name' AND password='$user_password'";
         //echo $query;

               /*$query = "SELECT user_id, user_name, password,gender,address,pin_code
                FROM   user_profile_details
                ";
				*/

      if ($stmt = $con->prepare($query)) 
      {

          $stmt->execute();
          $stmt->bind_result($user_id, $user_name, $password,$gender,$address,$pin_code);
          //echo json_encode($stmt);
		 while ($stmt->fetch()) 
		    {
		         
		    }

	 }

          //read_db_emergency_contact_details($user_id);
          $stmt->close();
      

      //$con->close();
 

 
?>
	<html>
		<head>
			<title>Login </title>
			<meta charset="utf-8">
			<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
			<script src="bootstrap/js/bootstrap.min.js"></script>
			<link rel=stylesheet href='css/a.css'>
				<style type="text/css">
	body 
   	{
   		background: -webkit-linear-gradient(315deg, #0e7fef 0%, #00a7c9 44%, #00d3a2 100%), -webkit-linear-gradient(45deg, #f20e6d 0%, rgba(242, 14, 109, 0.93) 7%, rgba(0, 211, 162, 0) 100%);
  background: linear-gradient(135deg, #0e7fef 0%, #00a7c9 44%, #00d3a2 100%), linear-gradient(45deg, #f20e6d 0%, rgba(242, 14, 109, 0.93) 7%, rgba(0, 211, 162, 0) 100%);

   	}
</style>
		</head>

		<body>
			<div class="container">
				<center><h2>Existing User</h2></center>
				<center><h4><strong>Personal Details of User:</strong></h4>
				<form action="enter_contacts.php" method="post" class="form-horizontal" name="edit_details" role="form">
					<table class="table table-bordered">
						<tbody>
							<tr>
								<th>Name of Applicant</th>
								<td><input type="text" name="name" pattern="[a-zA-Z ]+" title="Only Alphabets are allowed" value=<?php echo$user_name;?> ></td>
							</tr>

							<tr>
								<th>Gender </th>
								<td>
								<?php
										if($gender == 'M')
										{
								?>
											<input type="radio" name="gender" id="gender" checked="checked" value="Male"> Male &nbsp&nbsp
									<input type="radio" name="gender" id="gender" value="Female"> Female &nbsp&nbsp
									
									<input type="radio" name="gender" id="gender" value="Third Gender"> Third Gender
								</td>
								<?php 
									}
									else if($gender == 'F')
										{
								?>

											<input type="radio" name="gender" id="gender"  value="Male"> Male &nbsp&nbsp
									<input type="radio" name="gender" id="gender" checked="checked" value="Female"> Female &nbsp&nbsp
									
									<input type="radio" name="gender" id="gender" value="Third Gender"> Third Gender
								</td>
								<?php
									}
									else if($gender == 'T')
										{
								?>
											<input type="radio" name="gender" id="gender"  value="Male"> Male &nbsp&nbsp
									<input type="radio" name="gender" id="gender" value="Female"> Female &nbsp&nbsp
									
									<input type="radio" name="gender" id="gender" checked="checked" value="Third Gender"> Third Gender
								</td>
								<?php 
									}
								?>

							</tr>

							<tr>
								<th> Address</th>
								<td><textarea type="text" name="address" id="address1" rows="3" columns="6" style="width:280px; resize:none;" ><?php echo $address; ?></textarea> </td>
							</tr>

							<tr>
								<th>Pin code</th>
								<td><input type="text" pattern="^\d{6}$" name="pc" minlength="6" maxlength="6" value=<?php echo$pin_code;?>></td>
							</tr>
						</tbody>
						</table>
						<br><br>
						</form>
																				
							<a href='index.php' class= "btn btn-primary"> Save and Exit</button>
						
			</div>
		</body>
	</html>
<?php
		$con->close();
?>