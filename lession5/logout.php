<?php
setcookie('status', 'success', time()-30, '/');

header('Location: login.php');
die();