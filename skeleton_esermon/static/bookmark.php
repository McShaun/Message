<?php 
$page = 'Finish'; 
?>
<?php include("../inc/header.php"); ?>
<body>
<!-- <div id="floater" style="height:50%; margin-bottom: -100px;"></div> -->
<div id="big_gray" style="width:630px; margin-top:1em;" >
<div id="bigroundforms_form">
<form action="formsend_bookmark.php" method="post" id="commentForm">
<?php
  foreach($_POST as $key=>$value){
    if ($key!="submit"){
      $value=htmlentities(stripslashes(strip_tags($value)));
      echo "\t<input type=\"hidden\" name=\"$key\" value=\"$value\">\n";
    }
  }
?>
<img src="../inc/css/images/form_avatar.png" align="left" class="left" style="margin-left:-5px;" height="130" >
<p>
    If you would like to keep your spot simply provide your email below and we'll email you the bookmark.
</p>
<!-- <h2 style="clear:both;">Email</h2> -->
<input type="text"  style="float:left;" name="email" placeholder="You@email.com" id="required" class="email required" input="Don't worry, we won't sign you up for any newsletters">
<!-- <input type="submit" value="Send"> -->
<button id="form-submit" class="done" type="submit" style="float:left;"></button>
</form>

<br style="clear: both;">

<div style="padding:10px;" class="lightcolor">* Don't worry, you will not be signed up for any newsletters and I most certainly will not give out your email to anyone. You can also email us directly at <a href="mailto:biblestudyinteractive@gmail.com">biblestudyinteractive@gmail.com</a>.
</div>

</div><!-- end of bigroundforms_form -->
</div><!-- end of form div -->
<?php include("../inc/google-analytics.php") ; ?>
</body></html>