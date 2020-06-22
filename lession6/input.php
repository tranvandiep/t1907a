<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Session >> Input</title>
</head>
<body>
<?php
$_SESSION['a']       = 12;
$_SESSION['b']       = 'dsadsd';
$_SESSION['student'] = [
	'fullname' => 'TRAN VAN A',
	'age'      => 12
];
// $_ENV
?>
</body>
</html>