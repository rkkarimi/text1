<?php
require('db_connect.php');
require('setup.php');


echo ('<h2>Display badges</h2>');
 $sql = "SELECT * FROM badges";
 
 $result = mysql_query($sql);
 if (mysql_num_rows($result) > 0) {

echo "<table>";

 // output data of each row
 while($row = mysql_fetch_assoc($result)) {
echo '<tr>';
 echo "<td>ID: " . $row["id"]. " </td>
 <td>Name: " . $row["name"]. "</td>
 <td>Information: " . $row["info"]. " </td>
 <td>Registration: <img src='" . $row["path"]. "' alt='pic'> </td>";
 

 echo '</tr>';
}
echo '</table>';
 }
 else {
	 echo '<h2>No results to display</h2>';
 	
 }



require('footer.php');
?>