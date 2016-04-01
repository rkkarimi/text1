<?php
include('db_connect.php');
include('setup.php');
echo ('<h2>Display Badges</h2>');

 
 echo '<form name="individual_badge" action="badge.php" method="post">
Badgename: <input type="text" name="badgename">
<input type="submit">

</form>';
 
 //This is triggered if the request comes from badge.php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && ($_SERVER['PHP_SELF'])){
 $badgename=mysql_escape_string($_POST['badgename']);
 
 //sql to search for badgename in name field
 $sql ="SELECT * FROM badges WHERE (name)=('$badgename')";
 $result = mysql_query($sql);
 if (mysql_num_rows($result) > 0) {



echo "<table>";

 // output data of each row
 while($row = mysql_fetch_assoc($result)) {
echo '<tr>';
 echo "<td>ID: " . $row["id"]. " </td>
 <td>name: " . $row["name"]. "</td>
 <td>info: " . $row["info"]. " </td>
 
 <td><img src='".$row["path"]."'></td>";

 
 echo '</tr>';
}
echo '</table>';
 }
 
 else {
	 echo '<h2>No results to display</h2>';
 	
 }
}
 //This section is called when page if from mainscreen
else{
 $sql = "SELECT * FROM badges";


 $result = mysql_query($sql);
 if (mysql_num_rows($result) > 0) {



echo "<table>";

 // output data of each row
 while($row = mysql_fetch_assoc($result)) {
echo '<tr>';
 echo "<td>ID: " . $row["id"]. " </td>
 <td>name: " . $row["name"]. "</td>
 <td>info: " . $row["info"]. " </td>
 
 <td><img src='".$row["path"]."'></td>";
 
 
 echo '</tr>';
}
echo '</table>';
 }
 else {
	 echo '<h2>No results to display</h2>';
 	
 }
 
}//end of else
 echo'<input type="button" value="print it" onclick="print()"/>';
require('footer.php');
?>