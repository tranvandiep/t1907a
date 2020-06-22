<?php
require_once ('people.php');

class Student extends People {
	public $rollNo;

	public function __construct() {

	}

	public function learning() {
		echo 'OK';
	}
}