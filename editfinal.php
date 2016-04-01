<?php
require('db_connect.php');
include('setup.php');

if(isset($_POST['submit'])){
    echo 'Hello there everybody, the input value is '.$input_value.'<br/>';
    echo $input_value;
$field= mysql_escape_string($_POST['field']);
$input_value=mysql_escape_string($_POST['input_value']);

$title= mysql_escape_string($_POST['title']);
$description= mysql_escape_string($_POST['description']);
$date= mysql_escape_string($_POST['date']);
$location= mysql_escape_string($_POST['location']);

echo 'The field is'.$field;
echo $input_value;


$sql = "UPDATE events SET title='$title',description='$description',date='$date'  ,location='$location' WHERE $field='$input_value'";
$result=mysql_query($sql)or die('Error is '.mysql_error());
echo'<a href="modify.php">Login</a>';
}
require('footer.php');
?>