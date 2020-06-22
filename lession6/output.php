<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Session >> Output</title>
</head>
<body>
<?php
// var_dump($_SESSION);
echo $_SESSION['a'];
?>
</body>
</html>