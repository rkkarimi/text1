<?php
include('db_connect.php');

session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {

header ("Location: see_all_pages.php");


}
else {
    if($_SESSION["role"]=='leader'){
        include('setup.php');
    
echo '<script>document.write("Welcome "+readCookie("myName"));</script>';

echo 'You are logged in as '.$_SESSION["role"].'';

header("Location: admin.php");
/*echo '(edit_event_form.php)';
echo '(delete_edit_form.php)';
echo '(badge.php)';*/


		


}
else 
    
    if($_SESSION["role"]=='user') {
				
		include('setup.php');
		echo '<script>document.write("Welcome "+readCookie("myName"));</script>';
		echo ' You are logged in as a '.$_SESSION["role"].'';
			
	

		
	
	
	}

}

include('footer.php');
?>

