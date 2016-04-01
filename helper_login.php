<?php
require('db_connect.php');
include('setup.php');


if($_SESSION['login']=="1"){
     session_start();
     
    
     header("Location: see_all_pages.php");
     
 }
else {
echo'


<div id="content">
<h2>You must login to see other pages.</h2>
<div id="formsection">
<form class="formstyle" action="generate.php" method="POST">
Username <br/>
<input type="text" name="username" required /><br/>
	Password
	<br/><input type="password" name="pass1" required/><br/><br/>
	Role:<select name="role">
  <option value="leader">leader</option>
  <option value="user">user</option>

</select>
	<input type="submit" onclick="writeCookie(\'myName\',this.form.uname.value, 24)" name="submit" value="Log in"/>
	</form></div>
';
echo'
<p>Once you logged in then you will be able to see all the pages which you can not accessed before being a member of our website.</p>
';
}

require('footer.php');

?>