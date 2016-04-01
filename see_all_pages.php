<?php

require('setup.php');

     if($_SESSION['login']=="1"){
     session_start();
     
    
     header("Location: see_all_pages.php");
     }  
 
echo'
<div id="three_pages">
<h1>Please choose one of the link to access to.</h1>

<a href="badge.php"><input type="button" name="Submit" value="Badge page"></a>
<a href="gallery.php"><input type="button" name="Submit" value="Gallery page"></a>
<a href="display_event.php"><input type="button" name="Submit" value="Events page"></a>


<br/>




</div>

';


require('footer.php');
?>