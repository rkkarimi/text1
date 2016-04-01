<?php
require('db_connect.php');
require('setup.php');


if(isset($_POST['submit'])){
	//if it is exist then it performs the verification
	$email1 =$_POST['email1'];
	$email2=$_POST['email2'];
	$pass1= $_POST['pass1'];
	$pass2= $_POST['pass2'];
	
	if ($email1==$email2){
		if($pass1==$pass2){
			//So far everything ok
			$username= mysql_escape_string($_POST['username']);
			$firstname= mysql_escape_string($_POST['firstname']);
			$lastname= mysql_escape_string($_POST['lastname']);
			
			$email1= mysql_escape_string($_POST['email1']);
			$email2= mysql_escape_string($_POST['email2']);
			$pass1= mysql_escape_string($_POST['pass1']);
			$pass2= mysql_escape_string($_POST['pass2']);
			$role= mysql_escape_string($_POST['role']);
			$trained= mysql_escape_string($_POST['trained']);
			$disclosure= mysql_escape_string($_POST['disclosure']);
			$daysAvailable= mysql_escape_string($_POST['daysAvailable']);
			$timesAvailable= mysql_escape_string($_POST['timesAvailable']);
			
			$pass1 = md5($pass1);
			
			
			
			
			$vcheck = mysql_query("SELECT * FROM users WHERE username='$username'");
			
			$numberrows = mysql_num_rows($vcheck);
			
			
			
			if($numberrows>0){
		
			echo "User already exists";
			exit();	
			}
			else {
				$sql="INSERT INTO users(username, firstname, lastname, email, pass1, role, trained, disclosure, daysAvailable, timesAvailable) VALUES ('$username','$firstname','$lastname','$email1','$pass1','$role','$trained','$disclosure','$daysAvailable','$timesAvailable')";
				
				if(mysql_query($sql)){
				
				echo "Thank you for registering";
				}
				
				else{
					echo 'Not successful';
				}

			}
		
	
		}
		else {
			echo "Sorry, Passwords do not match.<br/>";
			exit();
		}
	}
	else{
		echo "Sorry, your emails do not match<br/>";
		exit();
	}
}
else{
echo '
<div id="sign_up_form">
<h2>Contact Form</h2>
<form method="POST" action="form.php" >
<fieldset>
<legend>Please complete all parts of the form and press Send</legend>

<p><label class="title">Username:</label></p>
<p><input type="text" name="username"/></p>
<p><label class="title">Firstname:</label></p>
<p><input type="text" name="firstname"/></p>
<p><label class="title">Lastname:</label></p>
<p><input type="text" name="lastname"/></p>
<p><label class="title">Role:</label></p>
<p><input type="text" name="role"/></p>
<p><label class="title">Email:</label></p> 
<p><input type="text" name="email1"/></p>

<p><label class="title">Confirm Email:</label></p>
<p><input type="text" name="email2"/></p>
<p><label class="title">Password:</label></p>
<p><input type="text" name="pass1"/></p>
<p></label class="title">Confirm Password:</label></p>
<p><input type="text" name="pass2"/></p>
<p><label class="title">Trained:</label></p>
<p><input type="text" name="trained"/></p>
<p><label class="title">Disclosure:</label></p>
<p><input type="text" name="disclosure"/><br/></p>
<p><label class="title">Days Available:</label></p>
<p><input type="text" name="daysAvailable"/></p>
<p><label class="title">Times Available:</label></p>
<p><input type="text" name="timesAvailable"/></p>
<input type="submit" value="Register" name="submit"/>
</fieldset>
</form>
</div><!--end of contect-->
';
}



require('footer.php');

?>