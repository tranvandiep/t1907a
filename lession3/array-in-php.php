<!DOCTYPE html>
<html>
<head>
	<title>Array in PHP</title>
</head>
<body>
	<h1>Welcome to learn Array in PHP</h1>
	<img src="https://media.geeksforgeeks.org/wp-content/uploads/Arrays1.png">
	<br/>
<?php
// Khai báo mảng trong PHP
// Khai báo mảng rỗng trong PHP
// Cach 1
$arr = [];
// cach 2
$arr = array();

//Khai báo 1 mảng có phần tử sẵn => $arr2 có các phần từ 3,2, 10
$arr2 = [3, 2, 10];
$arr2 = array(3, 2, 10);

// Phan 2: Them 1 phan tu moi vao maang
// cach 1
array_push($arr2, 100);
// cach 2
$arr2[] = 111;

// Phan 3: Lay cac phan tu trong mang
$len = count($arr2);//Tra ve so phan tu trong mang
//lay phan tu tai 1 vi tri index = 2
print$arr2[2].'<br/>';
// duyet qua cac phan tu trong mang
for ($i = 0; $i < $len; $i++) {
	print$arr2[$i].'<br/>';
}

// Phan 4: Xoa 1 phan tu khoi mang
// cach 1:
print('<br/>So phan tu ban dau: '.count($arr2));
unset($arr2[2]);//xoa phan tu vi tri index = 2
// cach nay khong dung trong TH mang index, su dung trong mang key & value
print('<br/>So phan tu sau khi xoa: '.count($arr2));
for ($i = 0; $i < $len; $i++) {
	print$arr2[$i].'<br/>';//Gap loi chuong trinh khi dung for.
}

// khi xoa phan tu trong mang => index => dung cach sau
$arr2 = [3, 2, 10, 100, 21];
array_splice($arr2, 2, 1);//2 => vi tri bat dau xoa, 1 => so phan tu bi xoa di tu vi tri index = 2
print('<br/>So phan tu sau khi xoa: '.count($arr2).'<br/>');
$len = count($arr2);
for ($i = 0; $i < $len; $i++) {
	print$arr2[$i].'<br/>';
}

// Phan 5: Mang key & value
$dog = [
	'name'    => 'ABC',
	'address' => 'Ha Noi',
	'eye'     => 2
];
//name, address, eye => key
//ABC, Ha Noi, 2 => gia tri
//voi key = name => gia tri tuong ung la ABC
print('<br/>');
print$dog['name'];
// add them 1 key moi vao mang $dog
$dog['foodtype'] = 'Xuong';
print('<br/>');
print$dog['foodtype'];

$dogList = [
	[
		'name'     => 'ABC',
		'address'  => 'Ha Noi',
		'eye'      => 2,
		'foodType' => ['Xuong', 'Com', 'Rau']
	], [
		'name'     => 'ABC',
		'address'  => 'Ha Noi',
		'eye'      => 2,
		'foodType' => ['Xuong', 'Com', 'Rau']
	]
];
$dog1 = $dogList[0];
print($dog1['name']);
?>
</body>
</html>