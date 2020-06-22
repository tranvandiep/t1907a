<?php
//insert, update, delete
function execute($sql) {
	//insert, update, delete du lieu vao database
	// start : insert into database
	// tao ket noi toi CSDL
	$con = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
	// Tao truy van
	mysqli_query($con, $sql);

	// Dong ket noi
	mysqli_close($con);
	// ends
}

function execute_result($sql) {
	// start : select from database
	// tao ket noi toi CSDL
	$con = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
	// Tao truy van
	$resultset  = mysqli_query($con, $sql);
	$resultList = [];
	while ($row = mysqli_fetch_array($resultset, 1)) {
		$resultList[] = $row;
	}

	// Dong ket noi
	mysqli_close($con);

	return $resultList;
}