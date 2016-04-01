<?php
$conn =mysql_connect("localhost", "root", "");
mysql_select_db("scouts");
session_start();

if (false===$conn){
die("Connection was not successful: " . $connect->connected_error);
}

?>

