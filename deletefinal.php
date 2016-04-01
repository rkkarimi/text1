<?php
require('db_connect.php');
include('setup.php');

if(isset($_POST['Submit'])){

$field= mysql_escape_string($_POST['field']);

$input_value=mysql_escape_string($_POST['input_value']);




$sql = "DELETE FROM events WHERE $field='$input_value'";

$result=mysql_query($sql);

echo'<a href="modify.php">Login</a>';
}
require('footer.php');
?>
