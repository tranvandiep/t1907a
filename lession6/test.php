<?php
require_once ('sinh_vien.php');

$std           = new Student();
$std->fullname = "TRAN VAN A";
echo $std->fullname;
$std->running();