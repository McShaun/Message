<?php 
$page = '1'; 
?>
<?php include("inc/header.php"); ?>
<body>
<!-- <div id="floater" style="height:50%; margin-bottom: -100px;"></div> -->
<!-- <div id="form" style="width: 768px;" > -->
<div id="form">

<?php include("inc/nav.php"); ?>
<form action="http://www.biblestudyinteractive.com/wp-content/themes/press/form/lesson2.php" method="post" id="commentForm">
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
                <img src="form_avatar.png" align="left" style="margin-left:-5px;" >
                <p>
If God both created the earth and inspired the scriptures, then why is there a conflict between the two? The conflict dates back to when Galileo first introduced heliocentric theory confronting the ruling religious authority of his time.
				</p>
                <p>
In the following videos we will look at the story of the "Sun Stop" that appears to contradict Galileo's findings as well as some controversial scriptures in Genesis surrounding creation, Adam, and Eve.
				</p>
        </div><!-- big gray -->
	</div><!-- content -->
<!-- Video Tabs //////////////////////////////////////////////////////////////////////   -->
	<div id="big_gray" style="display: block;">
		<!--<div class="tab_container"> 

	This is the tab[s] for the video page or "live" page
	it also includes all tools together with the jQuery library
--> 
<!--<script type="text/javascript" src="www.biblestudyinteractive.com/wp-content/themes/press//live_jquery102min.js"></script>-->
<!-- <script src="http://cdn.jquerytools.org/1.0.2/jquery.tools.min.js"></script> -->
<!-- tab styling  
<link rel="stylesheet" type="text/css" href="http://www.biblestudyinteractive.com/wp-content/themes/press/live_tabs.css" /> -->

<!-- please place tabs/panes here -->

<!-- the tabs --> 
<div class="embed-container">
<iframe src="http://www.youtube.com/embed/1qMZ2bojbsA" frameborder="0" allowfullscreen></iframe>
</div>
<!-- end paste tabs -->

<!-- This JavaScript snippet activates those tabs --> 
<script> 
// perform JavaScript after the document is scriptable.
jQuery_tabs(function() {
	// setup ul.tabs to work as tabs for each div directly under div.panes
	jQuery_tabs("ul.tabs").tabs("div.panes > div");
});
</script> 
		<!--</div> End Tabs --> 
	</div><!-- big gray -->
<!-- End Video tabs ////////////////////////////////////////      -->
<!-- end of custom additions before post loop -->
<div id="big_gray" style="background-color:#045a9f; display:inline-block;" >
    <div id="big_gray" style="height: 32px; margin-right: 10px; margin-bottom:0; text-align: center; max-width: 562px; float:left;">
        <h3>Okay I'm done with this part. What's Next?</h3>
    </div>
        <button id="form-submit" class="next" name="Lesson" value="Finished" type="submit" style="float:right;"></button>
<div>

</div><!-- end of bigroundforms_form -->
</form>
</div><!-- end of form div -->
<?php include("inc/google-analytics.php") ; ?>
</body></html>