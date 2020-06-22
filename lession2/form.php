<?php
$hoten        = $emailAddress        = $ngaysinh        = $matkhau        = $xacminhmatkhau        = $diachi        = '';
$isPwdMapping = true;
// xu ly lay du lieu qua method : POST
if (!empty($_POST)) {
	if (isset($_POST['fullname'])) {
		$hoten = $_POST['fullname'];
	}
	if (isset($_POST['email'])) {
		$emailAddress = $_POST['email'];
	}
	if (isset($_POST['birthday'])) {
		$ngaysinh = $_POST['birthday'];
	}
	if (isset($_POST['password'])) {
		$matkhau = $_POST['password'];
	}
	if (isset($_POST['confirmation_password'])) {
		$xacminhmatkhau = $_POST['confirmation_password'];
	}
	if (isset($_POST['address'])) {
		$diachi = $_POST['address'];
	}

	// echo $hoten.'-'.$emailAddress.'-'.$ngaysinh.'-'.$matkhau.'-'.$xacminhmatkhau.'-'.$diachi.'<br/>';
	if ($matkhau == $xacminhmatkhau) {
		//nhay sang trang moi > welcome.php
		// Chuc mung #fullname# dang ky tai khoan thanh cong.
		header('Location: welcome.php?ten='.$hoten);
		die();
	} else {
		$isPwdMapping = false;
	}
	//mat khau ko mapping
}
// xu ly lay du lieu qua method : GET
/**
if (!empty($_GET)) {
$hoten          = $_GET['fullname'];
$emailAddress   = $_GET['email'];
$ngaysinh       = $_GET['birthday'];
$matkhau        = $_GET['password'];
$xacminhmatkhau = $_GET['confirmation_password'];
$diachi         = $_GET['address'];

echo $hoten.'-'.$emailAddress.'-'.$ngaysinh.'-'.$matkhau.'-'.$xacminhmatkhau.'-'.$diachi.'<br/>';
}*/
// xu ly du lieu qua GET/POST => $_REQUEST
/**
if (!empty($_REQUEST)) {
$hoten          = $_REQUEST['fullname'];
$emailAddress   = $_REQUEST['email'];
$ngaysinh       = $_REQUEST['birthday'];
$matkhau        = $_REQUEST['password'];
$xacminhmatkhau = $_REQUEST['confirmation_password'];
$diachi         = $_REQUEST['address'];

echo $hoten.'-'.$emailAddress.'-'.$ngaysinh.'-'.$matkhau.'-'.$xacminhmatkhau.'-'.$diachi.'<br/>';
}*/
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
				<!-- method : GET/POST -->
				<!-- method : GET => $_GET => Du lieu se dc day len URL -->
				<!-- method : POST => $_POST =>  Du lieu se dc an -->
				<!-- method : GET/POST => $_REQUEST -->

				<!-- action : rỗng => gửi tới chính nó (form.php) -->
				<form method="post" action="">
					<div class="form-group">
					  <label for="usr">Name:</label>
					  <input required="true" type="text" class="form-control" id="usr" name="fullname" value="<?=$hoten?>">
					</div>
					<div class="form-group">
					  <label for="email">Email:</label>
					  <input required="true" type="email" class="form-control" id="email" name="email" value="<?=$emailAddress?>">
					</div>
					<div class="form-group">
					  <label for="birthday">Birthday:</label>
					  <input type="date" class="form-control" id="birthday" name="birthday" value="<?=$ngaysinh?>">
					</div>
					<div class="form-group">
					  <label for="pwd">Password: </label>
					  <input required="true" type="password" class="form-control" id="pwd" name="password">
					</div>
					<div class="form-group">
					  <label for="confirmation_pwd">Confirmation Password:</label>
					  <input required="true" type="password" class="form-control" id="confirmation_pwd" name="confirmation_password">
					</div>
					<div class="form-group">
					  <label for="address">Address:</label>
					  <input type="text" class="form-control" id="address" name="address" value="<?=$diachi?>">
					</div>
					<button class="btn btn-success">Register</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>