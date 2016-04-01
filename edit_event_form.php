<?php
require('db_connect.php');
require('setup.php');

echo '<h3> Edit Events</h3>';
echo '<form name="eventsearch" action="edit_event.php" method="post">

Field: <select name="field">
	<option value="id">id</option>
	<option value="title">title</option>
	<option value="description">description</option>
	<option value="date">date</option>
	<option value="location">location</option>
	</select>
	
Value: <input type="text" name="input_value">
<input type="submit" name="submit">
</form>';
echo '<hr/>';





require('footer.php');
?>