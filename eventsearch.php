<?php


if(isset($_POST['submit'])){/*if sent by a post and by submit the the rest follows*/
$input_value = mysql_escape_string($_POST['input_value']);
$field = mysql_escape_string($_POST['field']);
}


$sql = "SELECT * FROM events WHERE $field = '$input_value'";/*accessing the database*/
$result=mysql_query($sql);/*this line finds any errors and writes then out*/



if (mysql_num_rows($result) > 0) {/*if a row is found move on*/

echo "<table border='1'>";
while($row = mysql_fetch_assoc($result)) {

echo 

'<tr>';/*all the rows individually*/
echo "<td>Title: " . $row["title"]. "</td>
<td>Description: " . $row["description"]. "</td>
<td>Date: " . $row["date"]. "</td>
<td>Location: " . $row["location"]. "</td>";


echo '</tr>';
}
echo '</table>';

}
?>