<?php
if (isset($_COOKIE['status']) && $_COOKIE['status'] == 'success') {
	header('Location: welcome.php');
	die();
}

if (!empty($_POST)) {
	$uname = $pwd = '';
	if (isset($_POST['username'])) {
		$uname = $_POST['username'];
	}

	if (isset($_POST['password'])) {
		$pwd = $_POST['password'];
	}

	if ($uname == 'admin' && $pwd == '123') {
		setcookie('status', 'success', time()+30, '/');

		header('Location: welcome.php');
		die();
	}
}
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
				<h2 class="text-center">Login</h2>
			</div>
			<div class="panel-body">
				<form method="post">
					<div class="form-group">
					  <label for="usr">User Name:</label>
					  <input required="true" type="text" class="form-control" id="usr" name="username">
					</div>
					<div class="form-group">
					  <label for="pwd">Password:</label>
					  <input required="true" type="password" class="form-control" id="pwd" name="password">
					</div>
					<button class="btn btn-success">Login</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>