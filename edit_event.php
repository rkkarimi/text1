<?php
require('db_connect.php');
require('setup.php');


echo '<h2>Editing Events</h2>';
require('eventsearch.php');





if(mysql_num_rows($result) ==1){
 echo' What changes do you want to make?';
echo'<form action="editfinal.php" method="POST">
<input type="hidden" name="input_value" value="' .$input_value.'">
<input type="hidden" name="field" value="' .$field.'">

Title: <input name="title" type="text">
Description: <input name="description" type="text">
Date: <input name="date" type="text">
Location: <input name="location" type="text">
<input type="Submit" name="submit">
</form>';
}
else{
 echo '<p>MUltiple or no results. Please try again</p>';
 echo '<a href="modify.php">Back to previous page</a>';
}
 


require('footer.php');
?>