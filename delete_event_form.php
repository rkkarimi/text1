<?php


include('db_connect.php');
require('setup.php');
echo '<form name="eventdelete" action="delete_event.php" method="post">

Field: <select name="field">

	<option value="id">ID</option>
	<option value="title">Title</option>
	<option value="description">Description</option>
	<option value="date">Date</option>
	<option value="location">Location</option>
	</select>
	
Value: <input type="text" name="input_value">

<input type="submit" name="submit">
</form>';



?>