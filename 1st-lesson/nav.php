<!--<div style="color: #8eb6d6; margin-bottom:10px; text-align:center;">1. Name &nbsp; &gt;&gt; &nbsp;<font style="color: #FFFFFF; padding-left:10px;">2. Video Lecture &nbsp; </font>&gt;&gt; &nbsp; 3. Comment</div>-->

<div id="nav">
<ul style="position: relative;">
<li class="live">
<em>Current Progress</em>
</li>

<?php if ($page == '1') { ?>
<li class="live">
<em>1</em>
</li>
<?php } else { ?>
<li><a href="1.php">1</a></li>
<?php } ?>

<?php if ($page == '2') { ?>
<li class="live">
<em>2</em>
</li>
<?php } else { ?>
<li><a href="2.php">2</a></li>
<?php } ?>

<?php if ($page == '3') { ?>
<li class="live">
<em>3</em>
</li>
<?php } else { ?>
<li><a href="3.php">3</a></li>
<?php } ?>

<?php if ($page == '4') { ?>
<li class="live">
<em>4</em>
</li>
<?php } else { ?>
<li><a href="4.php">4</a></li>
<?php } ?>
<!--
<?php if ($page == '5') { ?>
<li class="live">
<em>5</em>
</li>
<?php } else { ?>
<li><a href="../counsel/5.php">5</a></li>
<?php } ?>
-->

<?php if ($page == 'Finish') { ?>
<li class="live">
<em>Finish</em>
</li>
<?php } else { ?>
<li>Finish</li>
<?php } ?>

<li style=""><!-- <em style="color:#FFF;"><a href="../formsend_bookmark.php">Save</a></em> --> 

<form action="../static/bookmark.php" method="post" id="commentForm"style="display:inline-block; margin-top: -24px;">
<?php
  foreach($_POST as $key=>$value){
    if ($key!="submit"){
      $value=htmlentities(stripslashes(strip_tags($value)));
      echo "\t<input type=\"hidden\" name=\"$key\" value=\"$value\">\n";
    }
  }
?>
<!-- This code collects the current page url -->
    <?php
function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}
?>

<!-- create a hidden field with the value of the current page title -->
<input type="hidden" name="current_page" value="<?php
  echo curPageURL();
?>" />

<button id="form-submit" class="bookmark" name="Purpose of this email" value="Thank you for visiting BibleStudyInteractive.com! A link to the page you were previously visiting is listed above." type="submit" style="float:right; top:24px; position:relative;"></button>


</form>
</li>
</ul>
</div>