
<?php

require('setup.php');

echo '<p> These photos here which uploaded already by our users, Obanshire Cub Scouts is not responsible for them. 
if any of these images you think inappropriate to be appear then, please contact us.</p>';


echo '<form name="photos" action="gallery.php" method="post" enctype="multipart/form-data">';

echo '<table id="gallery_table">

<tr>
	<td>Make</td>
	<td><input type="text" name="make_box" size="45"></input></td>
</tr>

<tr>
	<td>Image</td>
	<td><input type="file" name="fileToUpload" id="fileToUpload"></td>
</tr>
<tr><td><input type="Submit" value="Submit">
</table>
</form>';


include 'db_connect.php';
//displays gallery

$sql = " SELECT * FROM gallery" ;
$result = mysql_query($sql);
if (mysql_num_rows($result) > 0) {
echo '<table>';
while($row = mysql_fetch_assoc($result)) {
echo '<tr>';
 echo "<td>Information: " . $row["name"]. "</td>
 <td><img src='".$row["path"]."'></td>";
 echo '</tr>';
}
echo '</table>';
 }
 
else {

 echo '<h2>No results to display</h2>';

 }

//end of display gallery
 
 
//if statement to check if page has been loaded from submit***********************************
if(!empty($_FILES["fileToUpload"]["name"])){


$target_dir = "images/";
//target file variable will be input into the database as the photo
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$make= mysql_escape_string($_POST['make_box']);
$image= $target_file;



$sql = "INSERT INTO gallery ( name,path)
VALUES ('$make','$image' )";


if (mysql_query($sql)) {
 echo "New record created successfully";
} else {
 echo "Error: " . $sql . "<br>" . mysql_error($conn);
}


//COPY THIS CODE
/*ALL OF THE FOLLOWING CODE INVOLVES CHECKING AND UPLOADING THE FILE*/
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
 $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
 if($check !== false) {
 echo "File is an image - " . $check["mime"] . ".";
 $uploadOk = 1;
 } else {

 echo "File is not an image.";
 $uploadOk = 0;
 }
}
// Check if file already exists
if (file_exists($target_file)) {
 echo "Sorry, file already exists.";
 $uploadOk = 0;
}
// Check file size

if ($_FILES["fileToUpload"]["size"] > 500000) {
 echo "Sorry, your file is too large.";
 $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
 echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
 $uploadOk = 0;

}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
 echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
 if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
 echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
 } else {
 echo "Sorry, there was an error uploading your file.";
 }
}
echo '<a href="index.php"> Back to main page</a>';
//END OF COPIED CODE

 $_POST = array();
}




require('footer.php');

?>