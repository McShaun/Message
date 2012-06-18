<?php 
$page = '2'; 
?>
<?php include("../inc/header.php"); ?>
<body>

<div class="container">
<div id="form" class="one">
<?php include("nav.php"); ?>
<form action="3.php" method="post" id="commentForm">
<?php
  foreach($_POST as $key=>$value){
    if ($key!="submit"){
      $value=htmlentities(stripslashes(strip_tags($value)));
      echo "\t<input type=\"hidden\" name=\"$key\" value=\"$value\">\n";
    }
  }
?>
<div id="bigroundforms_form">
	<div id="content">		
    <div class="clear"></div>                     
        <div id="big_gray">
                
                <h1>"Counseling on Issues in Life with the Lord"<strong style="font-weight:100; font-size:18px;">Continued...</strong>
                </h1>
        </div><!-- big gray -->
        	<div id="big_gray">
        		<p>
                The second person is the 'Samaritan woman.'
				</p>
            <div class="embed-container">
            <iframe src="http://player.vimeo.com/video/37116816?title=0&amp;byline=0&amp;portrait=0" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
            </div>
	</div><!-- big gray -->
    <div class="clear"></div>                     
        <div id="big_gray">
        	<p>
    All of you too, if you are in the same situation as this Samaritan woman, the answer for you is the same. 
    		</p>
        </div><!-- big gray -->
    </div><!-- content -->
<div id="big_gray">
    <div id="next">
        <h3>Go to the next page to keep reading!</h3>
    </div>
        <button id="form-submit" class="next" name="Lesson" value="Finished" type="submit" style="float:right;"></button>
<div>

</div><!-- end of bigroundforms_form -->
</form>
</div><!-- end of form div -->
</div name="cotainer">
<?php include("../inc/google-analytics.php") ; ?>
</body></html>