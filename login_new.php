<html>
		<head>
			<title>Home</title>
			<script src="bootstrap/js/bootstrap.min.js"></script>
			<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
			<link rel = "stylesheet" type = "text/css" href = "css/a.css" />

		</head>
  <body>


					<br><h2>PLEASE SELECT AN OPTION:</h2><br>

			
					
			<form action="view_details.php" method ="post">
				
				
				<input type="hidden"  name="user_name" value ='<?php  echo $_POST['user_name']?>' /> 
				<input type="hidden" name="password" value ='<?php  echo $_POST['password']?>'/> 
				
				
				<input type="submit" height= "500px"  value="View Details"/> 
			
						<br><br><br>
          



          <a href='Edit_Details.php' class='btn btn-primary'>Edit information</a>
          <br><br><br>
        <a href='View_current_location.php' class='btn btn-primary'>Current location</a>
        <br><br><br>
				<a href='logout.php' class='btn btn-log'>Logout</a>

  </body>
</html>
