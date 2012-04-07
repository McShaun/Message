<?php 
$page = '2'; 
?>
<?php include("../inc/header.php"); ?>
<body>
<!-- <div id="floater" style="height:50%; margin-bottom: -100px;"></div> -->
<div id="form" >
<?php include("../genes/nav.php"); ?>
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
                <h1>"You Take Heaven by Force through Truth and Love, and Faith and Action."<strong style="font-weight:100; font-size:18px;">Continued...</strong></h1>
                </div><!-- big gray -->
                <div id="big_gray">
                <h3>Do Not Entertain the Thoughts of Evil or Unrighteousness At All 
And Do not Sin.</h3>
        
            <img src="../inc/css/images/jesus3.png" align="left" class="left" style="margin-left:-5px;" >
        		<p>
                Jesus used parables to explain how to not commit sins. As you hear His first parable, I hope that you will realize how you can avoid committing sins. 
				</p>
                <p>The Lord explained, "Two people suffered at the hand of one person in the same environment. One of them became upset after suffering harm from that person, harbored hatred in their heart, and cursed and fought back in the same way they were harmed. As a result, they sinned. As for the other person, even though they suffered pain and injustice, they did not harbor hatred in their heart or have evil thoughts at all, so they did not fight them nor hate them. As a result, they did not sin.
				</p>
                <p>
People are all inflicted with injuries, pain, and harm because of other people. Nevertheless, do not entertain any malicious or hateful thoughts, do not think about fighting at all, and do not commit sins either through your heart or through your actions."
				</p>
                <p>
                Let's watch the next video to see this example.
                </p>
                </div><!-- big gray -->
                <div id="big_gray">
            <div class="embed-container">
            <iframe src="http://player.vimeo.com/video/38780052?title=0&amp;byline=0&amp;portrait=0" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
            </div>
	</div><!-- big gray -->
    <!-- <div class="clear"></div>                     
        <div id="big_gray" class="footer">
        </div name="big_gray"> -->
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
<?php include("../inc/google-analytics.php") ; ?>
</body></html>