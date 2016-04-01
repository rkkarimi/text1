<?php

echo'<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Scouts website</title>


<script type="text/javascript" src="JS/cookies.js"></script>
<link href="styling.css" type="text/css" rel="stylesheet"> 


</head>

<body>
<div id="container">

<nav>
<a href="helper_login.php">Login</a>
<a href="logout.php">Logout</a>
<a href="signup.php"><a/>
</nav>
<div id="socialMedia">
<a href="https://www.facebook.com"><img src="images/fb.jpg" alt="fb" width="50" height="50"></a>
<a href="https://twitter.com"><img src="images/twitter.png" alt="twitter" width="50" height="50"></a>
<a href="https://youtube.com"><img src="images/yt.jpg" alt="youTube" width="50" height="50"></a>
<a href="https://mail.google.com"><img src="images/gmail.jpg" alt="fb" width="50" height="50"></a>
<a href="https://uk.yahoo.com/"><img src="images/yahoo.png" alt="twitter" width="50" height="50"></a>
<a href="https://outlook.com"><img src="images/outlook.jpg" alt="youTube" width="50" height="50"></a>
</div><!--end of social media-->
<p class="sugnUp">To register with us click here Please<a href="form.php">_Sign up...</a></p>

<div id="logo"><img src="images/logo.jpg" alt="images" class="images">



</div><!--end of logo-->


<div id="dropDownMenu">

<div id="wrapper">
<div id="navMenu"><!-- begining of drop down menu-->

<ul>
<li><a href="index.php">Home</a></li><!--end of main LI -->


</ul><!--end of main UL-->



<ul>
<li><a href="#">Games</a>
<ul>
<li><a href="hangman.php">Hang</a></li>
<li><a href="quiz.php">Quiz</a></li>
<li><a href="matching.php">Match</a></li>




</ul><!--end inner UL-->
</li><!--end of main LI -->
</ul><!--end of main UL-->
<ul>
<li><a href="helper_login.php">Badges</a>

</li><!--end of main LI -->
</ul><!--end of main UL-->
<ul>
<li><a href="helper_login.php">Gallery</a>
<ul>





</ul><!--end inner UL-->
</li><!--end of main LI -->
</ul><!--end of main UL-->
<ul>
<li><a href="#">Leader</a>
<ul>
<li><a href="modify.php">Modify</a></li>
<li><a href="assisstance.php">Assisst</a></li>



</ul><!--end inner UL-->
</li><!--end of main LI -->
</ul><!--end of main UL-->
<ul>
<li><a href="helper_login.php">Sign in</a>
<ul>

<li><a href="helper_query.php">Query</a></li>



</ul><!--end inner UL-->
</li><!--end of main LI -->
</ul><!--end of main UL-->
<ul>
<li><a href="#">Info</a>
<ul>
<li><a href="contact.php">Contact us</a></li>
<li><a href="form.php">Sign up</a></li>


</ul><!--end inner UL-->
</li><!--end of main LI -->
</ul><!--end of main UL-->
<br class="clearFloat"/>
</div><!--end of drop down no	navMenu-->
</div><!--end of wrapper-->

</div><!--end of DropDownMenu-->';



?>