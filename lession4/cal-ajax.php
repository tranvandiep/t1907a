<?php
$a = $b = $cal = $result = '';
if (!empty($_GET)) {
	if (isset($_GET['a'])) {
		$a = $_GET['a'];
	}
	if (isset($_GET['b'])) {
		$b = $_GET['b'];
	}
	if (isset($_GET['cal'])) {
		$cal = $_GET['cal'];
	}

	switch ($cal) {
		case '+':
			$result = $a+$b;
			break;
		case '-':
			$result = $a-$b;
			break;
		case '*':
			$result = $a*$b;
			break;
		case '/':
			$result = $a/$b;
			break;
		case '%':
			$result = $a%$b;
			break;
	}
}

// POST
if (!empty($_POST)) {
	if (isset($_POST['a'])) {
		$a = $_POST['a'];
	}
	if (isset($_POST['b'])) {
		$b = $_POST['b'];
	}
	if (isset($_POST['cal'])) {
		$cal = $_POST['cal'];
	}

	switch ($cal) {
		case '+':
			$result = $a+$b;
			break;
		case '-':
			$result = $a-$b;
			break;
		case '*':
			$result = $a*$b;
			break;
		case '/':
			$result = $a/$b;
			break;
		case '%':
			$result = $a%$b;
			break;
	}
}
print($result);