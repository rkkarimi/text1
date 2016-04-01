<?php
require('db_connect.php');
include('setup.php');


if($_SESSION['login']=="1"){
     session_start();
     
    
     header("Location: admin.php");
     
 }
 else {
echo'

<p>Once you have logged in then you will be allowed for the modification.</p>

<p>I have to make this page looks much better later on, please!</p>
';
}

require('footer.php');

?>