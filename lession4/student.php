<?php
require_once ('config.php');
require_once ('dbhelper.php');
require_once ('process-form.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registation Form * Form Tutorial</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Registation Form - Input User's Detail Information</h2>
			</div>
			<div class="panel-body">
				<form method="post" action="">
				<div class="form-group">
				  <label for="usr">Name:</label>
				  <input required="true" type="text" class="form-control" id="usr" name="fullname" value="<?=$fullname?>">
				</div>
				<div class="form-group">
				  <label for="email">Email:</label>
				  <input required="true" type="email" class="form-control" id="email" name="email" value="<?=$email?>">
				</div>
				<div class="form-group">
				  <label for="birthday">Birthday:</label>
				  <input type="date" class="form-control" id="birthday"  value="<?=$birthday?>" name="birthday">
				</div>
				<div class="form-group">
				  <label for="pwd">Password: <font color="red"><?=($password != $confirmation_pwd)?'Mật khẩu không khớp':''?></font></label>
				  <input required="true" type="password" class="form-control" id="pwd" name="password">
				</div>
				<div class="form-group">
				  <label for="confirmation_pwd">Confirmation Password:</label>
				  <input required="true" type="password" class="form-control" id="confirmation_pwd" name="confirmation_pwd">
				</div>
				<div class="form-group">
				  <label for="address">Address:</label>
				  <input type="text" class="form-control" id="address" name="address" value="<?=$address?>">
				</div>
				<button class="btn btn-success">Register</button>
				</form>
			</div>
		</div>
		<div class="panel panel-primary">
			<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>STT</th>
							<th>Fullname</th>
							<th>Email</th>
							<th>Birthday</th>
							<th>Address</th>
						</tr>
					</thead>
					<tbody>
<?php
$sql      = "select * from user";
$userList = execute_result($sql);
// ends
foreach ($userList as $row) {
	echo '<tr>
			<td>'.$row['id'].'</td>
			<td>'.$row['fullname'].'</td>
			<td>'.$row['email'].'</td>
			<td>'.$row['birthday'].'</td>
			<td>'.$row['address'].'</td>
		</tr>';
}
?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>