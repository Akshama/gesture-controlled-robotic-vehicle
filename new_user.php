	<html>
		<head>
			<title>Sign up</title>
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
				<center><h2>New User</h2></center>
				<center><h4><strong>Personal Details of User:</strong></h4>
				<form action="enter_contacts.php" method="post" class="form-horizontal" name="add_rti" role="form">
					<table class="table table-bordered">
						<tbody>
							<tr>
								<th>Name of Applicant</th>
								<td><input type="text" id=user_name class='user_name' name="user_name" pattern="[a-zA-Z ]+" title="Only Alphabets are allowed" required></td>
							</tr>
                            <tr>
								<th>Enter password:</th>
								<td><input type="password" id=password class='password' name="password" pattern="[a-zA-Z]+[0-9]+" required></td>
							</tr>
							<tr>
								<th>Gender </th>
								<td>
									<input type="radio" name="gender" id="gender" value="Female"> Female &nbsp&nbsp
									<input type="radio" name="gender" id="gender" checked="checked" value="Male"> Male &nbsp&nbsp
									<input type="radio" name="gender" id="gender" value="Third Gender"> Third Gender
								</td>
							</tr>

							<tr>
								<th> Address</th>
								<td><textarea type="text" name="address" id="address" rows="3" columns="6" style="width:280px; resize:none" id=address required></textarea></td>
							</tr>

							<tr>
								<th>Pin code</th>
								<td><input type="text" name="pin" id=pin pattern="^\d{6}$" minlength="6" maxlength="6" required></td>
							</tr>
						</tbody>
						</table>
						<br><br>
						<center><input type="submit" name="submit" value="Add Emergency Contacts" class='btn btn-primary'></center>
				</form>
			</div>
		</body>
	</html>
