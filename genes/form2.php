<?php 
$page = 'Finish'; 
?>
<?php include("../inc/header.php"); ?>
<body>
<!-- <div id="floater" style="height:50%; margin-bottom: -100px;"></div> -->
<div class="one">
<div id="form" style="margin-top:1em;" >
<div id="bigroundforms_form">
<form action="../static/formsend.php" method="post" id="commentForm">
<?php
  foreach($_POST as $key=>$value){
    if ($key!="submit"){
      $value=htmlentities(stripslashes(strip_tags($value)));
      echo "\t<input type=\"hidden\" name=\"$key\" value=\"$value\">\n";
    }
  }
?>
<div id="big_gray" class="collumn">
<img src="../inc/css/images/young_ssn.png" align="left" class="left" style="margin-left:-5px;" height="110" >
<label>
	<h2>What do you think?</h2>
</label>
<p>If you have any questions or feedback be sure to let us know!</p>
</div>
<div id="big_gray" class="collumn">
<textarea name="comment" rows="8" cols="75" placeholder="Please let us know what you think, honestly. We want to make this experience better and better." class="required" title="We would really appreciate it if you left even a brief comment :D"></textarea>
<!--<div id="big_gray" style="padding-left:0;margin:0;">-->
	<ul class="choices" style="float:left; margin: 0 0 10px; padding-left:0;"><li><label><input type="radio" name="Keep.my.post" value="public" class="ss-q-radio" id="group_1_1" validate="required:true" title="Mind if we post this comment?">

Public: Feel free to include my answer among the others</label></li> <li><label><input type="radio" name="Keep.my.post" value="Private">

Private: Please do not post my question and/or comment</label></li>

	</ul>

    <input type="hidden" name="pageNumber" value="0">
    <input type="hidden" name="backupCache" value="">
</div name="big_gray" class="collumn">
<br style="clear:both;">
<div id="big_gray">
<h2 style="clear:both;">Email</h2>
<input type="text"  style="float:left;" name="email" placeholder="You@email.com" id="required" class="email required" input="Don't worry, we won't sign you up for any newsletters">

<!-- <input type="submit" value="Send"> -->
<button id="form-submit" class="done" name="Reached" value="the comment page" type="submit" style="float:left;"></button>
</form>
</div>
</div><!-- end of bigroundforms_form -->
</div><!-- end of form div -->
</div name="one">
<?php include("../inc/google-analytics.php") ; ?>
</body></html>