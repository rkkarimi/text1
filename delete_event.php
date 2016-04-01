<?php
require('db_connect.php');
require('setup.php');

require('eventsearch.php');

if(mysql_num_rows($result)>0){
echo '<p>Do you want to delete these records?</p>';
echo'<form action="deletefinal.php" method="POST">
<input type="hidden" name="input_value" value="'.$input_value.'">
<input type="hidden" name="field" value="'.$field.'">
<input type="Submit" name="Submit">
<input type="button" name="Cancel" value="Cancel" onclick=(location.href="modify.php")>
</form>';
}
else {
	echo 'No results';
	echo '<a href="modify.php">Back to login page</a>';
}
require('footer.php');

?>
