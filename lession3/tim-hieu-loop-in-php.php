<!DOCTYPE html>
<html>
<head>
	<title>Loop in PHP</title>
</head>
<body>
	<h1>Welcome to learn Loop in PHP</h1>
	<img src="https://i.stack.imgur.com/ZTRtY.png">
	<h2>Kết quả chạy chương trình</h2>
	<h3>Loop: while</h3>
<?php
// Vong lap while.
$i = 2;
while ($i <= 6) {
	print($i+1).'<br/>';
	$i += 2;
}
?>
<h3>Loop: do .. while</h3>
<?php
// Vong lap while.
$i = 2;
do {
	print($i+1).'<br/>';
	$i += 2;
} while ($i <= 6);
?>
<h3>Loop: For</h3>
<?php
// Vong lap For.
for ($i = 2; $i <= 6; $i += 2) {
	if ($i == 4) {
		continue;
		//Ko xu ly voi truong hop $i = 4;
	}
	print($i+1).'<br/>';
}
// break, continue;
?>
<h2>Tinh tong cac so chay tu 1 -> 10</h2>
<?php
$sum = 0;
//$sum = 1 + 2 + 3 + ... + 10 = ???
for ($i = 1; $i <= 10; $i++) {
	$sum += $i;
}
print'Tong sum = '.$sum.'<br/>';
?>
<h2>Ve tam giac sao</h2>
<?php
$N = 10;
for ($i = 0; $i < $N; $i++) {
	//in tung dong
	//in * cua tung dong
	for ($j = 0; $j <= $i; $j++) {
		# code...
		// if ($j == 0 || $j == $i || $i == ($N-1)) {
		// 	print'* ';
		// } else {
		// 	print'0 ';
		// }
		print'* ';
	}
	print'<br/>';
}
?>
</body>
</html>