<html>
   <head>
   		<meta charset="UTF-8">
		<title> Login </title>
		<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/form.css">
		<script src="bootstrap/js/bootstrap.min.js"></script>

		<style>
   	body 
   	{
   		background: -webkit-linear-gradient(315deg, #0e7fef 0%, #00a7c9 44%, #00d3a2 100%), -webkit-linear-gradient(45deg, #f20e6d 0%, rgba(242, 14, 109, 0.93) 7%, rgba(0, 211, 162, 0) 100%);
  background: linear-gradient(135deg, #0e7fef 0%, #00a7c9 44%, #00d3a2 100%), linear-gradient(45deg, #f20e6d 0%, rgba(242, 14, 109, 0.93) 7%, rgba(0, 211, 162, 0) 100%);

   	}
   	</style>
	
	</head>
	<body  >
	
		

	
	<div class="container">
		<br>
		<h2>Login Page</h2><br>
			<div class="form">
				<form  method="post" action="login_new.php">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Username " id="user_name" name="user_name">
						<i class="fa fa-user"></i>
					</div>

					<!-- Html to show login form -->
					<div class="form-group log-status">
						<input type="password" class="form-control" placeholder="Password" id="password" name="password">
						<i class="fa fa-lock"></i>
					</div>

					<button class="btn btn-log" type='submit' name ='submit' value='Log in' >Log in</button>
				</form>
				<br><br>
				<a id="new_user_sign_in" href="new_user.php" >New User Sign in</a>

			</div>
	</div>




	</body>
</html>
