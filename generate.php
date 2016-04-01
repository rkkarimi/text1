<?php

 require('db_connect.php');
 require('setup.php'); 

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $username=mysql_escape_string($_POST['username']);
     $pass1=mysql_escape_string($_POST['pass1']);
      $role=mysql_escape_string($_POST['role']);
      $_SESSION['username']=$username;
      $_SESSION['role']=$role;
      $pass1 = md5($pass1);
      
      $vcheck = mysql_query("SELECT * FROM users WHERE username='$username' AND pass1='$pass1' AND role='$role'");
      
      $numberrows = mysql_num_rows($vcheck);
      
}
 
 if($numberrows>0 || $_SESSION['login']=="1"){
     session_start();
     
     $_SESSION['login']="1";
     header("Location: see_all_pages.php");
     
 }
else{
    $errorMessage="Invalid Login";
    header("Location: helper_login.php");
    session_start();
    $_SESSION['login']='';
    
    echo 'User does not exist';
  require('footer.php');
    
}
?>