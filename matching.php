<?php
require('setup.php');
require('db_connect.php');

echo'
<div id="matching">



<div id="match">
<h2>Matching game.</h2>
<p>Once you click over the play it button then it will take you to the matching game website. This website quite suitable for kids or adults 
aged between 6 to 16 years old.</p>
<a href="http://www.primarygames.com/math/fractionmatcher/"><input type="button" name="Matching game" value="Play it"></a>
<br/>
<img src="images/kids-photo.jpeg" alt="images" class="images" height="150px" width="400px">

</div>

</div><!--end of content-form-->
';

require('footer.php');

?>