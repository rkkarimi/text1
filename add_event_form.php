<?php
require("setup.php");
echo '<h3> Add Event</h3>';
echo '<form name="addevent" action="upload.php" method="post" enctype="multipart/form-data">';
echo '<table class="tableform">

<tr>
	<td>Title</td>
	<td><input type="text" name="title"></input></td>
</tr>
<tr>
	<td>Description</td>
	<td><input type="text" name="description"></input></td>
</tr>
<tr>
	<td>Date</td>
	<td><input type="text" name="date"></input></td>
</tr>
<tr>
	<td>Location</td>
	<td><input type="text" name="location"></input></td>
</tr>

<tr><td>&nbsp;</td><td><input type="Submit" value="Submit">
</table>
</form>';
require("footer.php");
?>