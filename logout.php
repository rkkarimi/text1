<?php
include('db_connect.php');
session_start();
session_destroy();
include('setup.php');

echo 'You have logged out';
include('footer.php');

?>