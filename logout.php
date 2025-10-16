<?php
require 'myDb.php';
session_unset();
session_destroy();
header('Location: registerpage.php');
exit();
?>