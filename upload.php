<?php
include 'db_connect.php';
require('setup.php');

echo '<form name="events" action="upload.php" method="post" enctype="multipart/form-data">';





$title= mysql_escape_string($_POST['title']);
$description= mysql_escape_string($_POST['description']);
$date = mysql_escape_string($_POST['date']);
$location= mysql_escape_string($_POST['location']);


$sql = "INSERT INTO events (title, description, date, location)
VALUES ('$title', '$description', '$date' ,'$location')";


if (mysql_query($sql)) {
 echo "New record created successfully";
} else {
 echo "Error: " . $sql . "<br>" . mysql_error($conn);
}

$sql = " SELECT * FROM events" ;

$result = mysql_query($sql);

if (mysql_num_rows($result) > 0) {


echo '<table id="EventForm">';

while($row = mysql_fetch_assoc($result)) {

echo '<tr>';

 echo "<td>Title: " . $row["title"]. "</td>
 <td>Description: ".$row["description"]. "</td>
 <td>When: ".$row["date"]. "</td>
 <td>Where: ".$row["location"]. "</td>";


 echo '</tr>';

}

echo '</table>';

 }

else {

 echo '<h2>No results to display</h2>';


 }
echo '<a href="generate.php"> Back to main page</a>';
 


require('footer.php');
?>