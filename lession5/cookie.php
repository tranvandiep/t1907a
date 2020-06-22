<!DOCTYPE html>
<html>
<head>
	<title>Cookie Tutorial</title>
</head>
<body>
	<h1>Welcome to learn Cookie PHP</h1>

<?php
// var_dump($_COOKIE);
// Them du lieu vao cookie
// setcookie('age', '21', time()+24*60*60, '/')
// Xoa key trong cookie
// setcookie('age', '', time()-1000, '/')

if (isset($_COOKIE['fullname'])) {
	$fullname = $_COOKIE['fullname'];
	echo $fullname;
}

?>
</body>
</html>