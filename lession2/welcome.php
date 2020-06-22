<?php
$hovaten = '';
if (isset($_GET['ten'])) {
	$hovaten = $_GET['ten'];
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome to learn PHP</title>
</head>
<body>
	<h1 style="color: black">Chúc mừng <font color="red"><?=$hovaten?></font> đã đăng ký tài khoản thành công!!!</h1>
</body>
</html>