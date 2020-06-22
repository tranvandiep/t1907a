<!DOCTYPE html>
<html>
<head>
	<title>Function in PHP</title>
</head>
<body>
<h1>Welcome to learn Function in PHP</h1>
<?php
//Bai toan tinh tong : 1 -> 10
$sum = 0;
for ($i = 1; $i <= 10; $i++) {
	$sum += $i;
}
print('<br/>sum= '.$sum);
//Bai toan tinh tong : 1 -> 100
$sum = 0;
for ($i = 1; $i <= 100; $i++) {
	$sum += $i;
}
print('<br/>sum= '.$sum);
//Bai toan tinh tong : 1 -> 1000
$sum = 0;
for ($i = 1; $i <= 1000; $i++) {
	$sum += $i;
}
print('<br/>sum= '.$sum);

// Chuyen ve function
function tinhtong($n) {
	$sum = 0;
	for ($i = 1; $i <= $n; $i++) {
		$sum += $i;
	}
	print('<br/>sum= '.$sum);
}
tinhtong(10);
tinhtong(100);
tinhtong(1000);
// So sanh tong cua 10 vs 16
function tinhtong2($n) {
	$sum = 0;
	for ($i = 1; $i <= $n; $i++) {
		$sum += $i;
	}
	return $sum;
}
$t10 = tinhtong2(10);
$t16 = tinhtong2(16);
if ($t16 > $t10) {
	print('<br/>Tong T16 > T10');
} else if ($t10 == $t16) {
	print('<br/>Tong T16 = T10');
} else {
	print('<br/>Tong T16 < T10');
}
?>
</body>
</html>