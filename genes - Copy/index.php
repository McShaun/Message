<?php 
$page = 'Name'; 
?>
<?php include("../inc/header.php"); ?>
<!-- INSTRUCTIONS: For Adding new content to one of these e-modules

Change links in navigation

Change out the txt and video content
Don't forget the 
$page = '2'; and <form action=" at the top of each page

Edit the question pages

Edit colors inc/css/forms.php

Edit Header

Edit images in inc/css/images

Change name of lesson/message <button id="form-submit" class="go" name="Lesson" value="the Message"

Change the button and "click here to finish" on the last page of content
-->
<body>
<!-- <div id="floater" style="height:50%; margin-bottom: -100px;"></div> -->
<div id="big_gray" class="welcome" >
<div id="bigroundforms_form">
<form action="1.php" method="post" id="commentForm">
<?php
  foreach($_POST as $key=>$value){
    if ($key!="submit"){
      $value=htmlentities(stripslashes(strip_tags($value)));
      echo "\t<input type=\"hidden\" name=\"$key\" value=\"$value\">\n";
    }
  }
?>
<div id="left-or-top" style="float:none;">
  <center>
<img src="../inc/css/images/form_avatar.png" style="margin-left:-5px;" height="145" width="166" >
	</center>
</div name="left-or-top">

<div id="right-or-bottom">
  <center>
    <!--<center><h3>Welcome to<br />Providence Online.</h3>-->
    <h3><center>Welcome to<br />Providence Online.</center></h3><p>I'm Minister Shaun <br />What's your name?</p>
    <br />
    <div style="display:inline-block;">
    <input type="text" placeholder="Name" name="name" style="float:left;" class="required" title="Just a name - What could it hurt?">
    
    <!-- <input type="submit" value="Send"> -->
    <button id="form-submit" class="go" name="Message" value="Counseling on Issues in Life with the Lord" type="submit" style="float:right;"></button>
    </div>
    </center>
</div name="right-or-bottom">
</form>

<br style="clear: both;">

</div><!-- end of bigroundforms_form -->
</div><!-- end of form div -->
<?php include("../inc/google-analytics.php") ; ?>
</body></html>