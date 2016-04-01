<?php
require('db_connect.php');


echo '<form name="all" action="display_event.php" method="post">
Display Events<input type="submit" name="submit" value="Display Events">
</form>';
echo '<form name="all" action="add_event_form.php" method="post">
Add Events<input type="submit" name="submit" value="Add Events">
</form>';
echo '<form name="all" action="search_event_form.php" method="post">
Search Events<input type="submit" name="submit" value="Search Events">
</form>';
echo '<form name="all" action="edit_event_form.php" method="post">
Edit Events<input type="submit" name="submit" value="Edit Events">
</form>';
echo '<form name="all" action="delete_event_form.php" method="post">
Delete Events<input type="submit" name="submit" value="Delete Events">
</form>';




require("footer.php");
?>