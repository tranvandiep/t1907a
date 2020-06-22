<?php
$fullname = $email = $birthday = $password = $confirmation_pwd = $address = '';

if (!empty($_POST)) {
	if (isset($_POST['fullname'])) {
		$fullname = $_POST['fullname'];
	}

	if (isset($_POST['email'])) {
		$email = $_POST['email'];
	}

	if (isset($_POST['birthday'])) {
		$birthday = $_POST['birthday'];
	}

	if (isset($_POST['password'])) {
		$password = $_POST['password'];
	}

	if (isset($_POST['confirmation_pwd'])) {
		$confirmation_pwd = $_POST['confirmation_pwd'];
	}

	if (isset($_POST['address'])) {
		$address = $_POST['address'];
	}

	if ($password != $confirmation_pwd) {
		//thong bao error ra man hinh
	} else {
		$sql = "insert into user(fullname, email, birthday, password, address) values ('$fullname', '$email', '$birthday', '$password', '$address')";
		execute($sql);
	}
}