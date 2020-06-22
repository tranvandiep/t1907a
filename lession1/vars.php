<!DOCTYPE html>
<html>
<head>
	<title>Tìm hiểu về biến trong PHP</title>
</head>
<body>
	<h1>Tìm hiểu về biến trong PHP</h1>
<!-- Bat dau viết code PHP -->
<?php
//Kieu du lieu bien => phu thuoc vao gia tri no luu
// $str => bien string
$str = '<h1>Hello World</h1>';
echo $str;
//$str => bien kieu so nguyen
$str = 123;
echo $str;
//Noi chuoi
$str = 'Hello';
$str = $str.' World';
//thay the boi dong code sau
$str .= ' World';
echo $str;

//Khai bao hang so => bien gia tri khong thay doi
const BASE_URL = 'https://gokisoft.com';
echo BASE_URL;

//cach 2 > khai bao hang so
define('PI', 3.14);
echo PI;

//Biến môi trường trong PHP
//Bien moi truong => luu thong tin browser : $_SERVER
// var_dump($_SERVER);
// var_dump($_REQUEST);
// var_dump($_GET);
// var_dump($_POST);
// var_dump($_COOKIE);
// var_dump($_SESSION);
// var_dump($_ENV);
//Lay gia tri $_SERVER voi key >> HTTP_USER_AGENT
//isset => kiem tra 1 key co ton tai trong array
if (isset($_SERVER['HTTP_USER_AGENT12'])) {
	echo $_SERVER['HTTP_USER_AGENT12'];
}
?>
<h1 style="color: red;"><?=$str?></h1>
<h1 style="color: blue"><?=BASE_URL?></h1>
<h2 style="color: green">PI: <?=PI?></h2>
<h3 style="color: red">Browser: <?=$_SERVER['HTTP_USER_AGENT']?></h3>
</body>
</html>